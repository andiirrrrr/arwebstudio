<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\CustomAppOffering;
use App\Models\Testimonial;
use App\Models\Package;
use App\Models\ServicePrice;
use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
    public function home()
    {
        // Maksimal 3 layanan
        $services = Service::take(3)->get();
        
        // Maksimal 3 project terbaru
        $projects = Project::latest()->take(3)->get();
        
        $testimonials = Testimonial::all();
        
        return view('home', compact('services', 'projects', 'testimonials'));
    }

    public function services()
    {
        $services = Service::all();
        
        $heroData = [
            'badge_text' => 'Layanan Utama',
            'title' => 'Rekayasa Untuk Skala Eksponensial.',
            'subtitle' => 'Skala Eksponensial.',
            'uptime_text' => '99.9%',
            'uptime_label' => 'Uptime Guarantee',
            'hero_description' => 'Kami tidak hanya membangun website; kami merekayasa infrastruktur digital yang siap menghadapi lonjakan traffic seketika. Menggunakan tech-stack modern untuk menjamin kecepatan, keamanan, dan skalabilitas.',
            'tech_stack_fast' => 'Next.js & React',
            'tech_stack_secure' => 'SSL & Auth0',
            'cta_title' => 'Siap Untuk Meningkatkan Skala Bisnis Anda?',
            'cta_description' => 'Dapatkan konsultasi gratis selama 30 menit dengan tim engineering kami untuk membahas roadmap digital Anda.',
            'cta_primary_btn' => 'Mulai Proyek Sekarang',
            'cta_secondary_btn' => 'Lihat Portfolio Kami',
        ];
        
        return view('services', compact('services', 'heroData'));
    }

    public function serviceDetail($id)
    {
        $service = Service::with(['servicePrices.package'])->findOrFail($id);
        
        $packages = Package::whereHas('servicePrices', function ($query) use ($id) {
            $query->where('service_id', $id);
        })->get();
        
        $servicePrices = ServicePrice::where('service_id', $id)
           ->where('is_active', true)
            ->with('package')
            ->orderBy('price')
            ->get();
        
        // ===== TAMBAHKAN INI =====
        // Cari project terkait berdasarkan kategori
        $relatedProjects = Project::where('category', 'LIKE', '%' . $service->name . '%')
            ->orWhere('category', 'LIKE', '%' . strtolower($service->name) . '%')
            ->take(2)
            ->get();
        
        // Jika tidak ada, ambil 2 project terbaru
        if ($relatedProjects->count() == 0) {
            $relatedProjects = Project::latest()->take(2)->get();
        }
        
        return view('service-detail', compact('service', 'packages', 'servicePrices', 'relatedProjects'));
    }

    public function portfolio()
    {
        $projects = Project::all();
        return view('portfolio', compact('projects'));
    }

    public function portfolioDetail($id)
    {
        $project = Project::findOrFail($id);
        return view('portfolio-detail', compact('project'));
    }

    public function faq()
    {
        return view('faq');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        $articles = Article::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->paginate(9);
        
        $recentArticles = Article::where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->take(5)
            ->get();
        
        $categories = Article::where('is_published', true)
            ->distinct('category')
            ->pluck('category');
        
        return view('blog', compact('articles', 'recentArticles', 'categories'));
    }

    public function blogShow($slug)
    {
        $article = Article::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
        
        // Increment views
        $article->increment('views');
        
        $recentArticles = Article::where('is_published', true)
            ->where('id', '!=', $article->id)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
        
        return view('blog-detail', compact('article', 'recentArticles'));
    }
}