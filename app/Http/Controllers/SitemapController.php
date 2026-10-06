<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\JobPost;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    
        public function index(){
       $categories = Category::latest()->get();
       $allJobs = JobPost::latest()->get();
        return response()
            ->view('sitemap', compact('categories', 'allJobs'))
            ->header('Content-Type', 'application/xml');
    }
}
