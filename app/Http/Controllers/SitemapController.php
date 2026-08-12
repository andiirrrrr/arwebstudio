<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Article;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $services = Service::select('id', 'updated_at')->get();
        $projects = Project::select('id', 'updated_at')->get();
        $articles = Article::select('slug', 'updated_at')
            ->where('is_published', true)
            ->get();

        $content = view('sitemap', compact('services', 'projects', 'articles'))->render();

        return response($content, 200)
            ->header('Content-Type', 'application/xml')
            ->header('Cache-Control', 'public, max-age=3600');
    }
}
