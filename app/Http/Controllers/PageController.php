<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
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
        $services = Service::paginate(12);
        return view('services', compact('services'));
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
        // Cari project terkait berdasarkan kategori (LIKE MySQL sudah case-insensitive)
        $relatedProjects = Project::where('category', 'LIKE', '%' . $service->name . '%')
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
        $projects = Project::paginate(12);
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