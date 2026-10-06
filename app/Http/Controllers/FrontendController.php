<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\JobPost;
use App\Models\Country;

class FrontendController extends Controller
{
   
    // show category wish jobs
   public function category($slug){
    $category = Category::where('slug', $slug)->firstOrFail();

    $subCategories = SubCategory::where('category_id', $category->id)
        ->latest()
        ->get();

    $jobs = JobPost::where('category_id', $category->id)
        ->latest()
        ->paginate(12);

    $jobCount = JobPost::where('category_id', $category->id)->count();

    $countries = Country::latest()->get();

    return view('jobs.category', compact(
        'category',
        'subCategories',
        'jobs',
        'jobCount',
        'countries'
    ));
}

// about Us
public function aboutUs(){
       $title = 'About Us | Jobfixs | Online Jobs & Freelance Marketplace';
        return view('about_us', compact('title'));
    }

// policy pages
public function policy(){
   $title = 'Privacy Policy | Jobfixs | Online Jobs & Freelance Marketplace';
   return view('privacy_policy', compact('title'));
 }

// terms
public function terms(){
  $title = 'Terms Conditions | Jobfixs | Online Jobs & Freelance Marketplace';
   return view('terms_conditions', compact('title'));

   }

// marketplace

   public function marketplace(){
      $title = 'Microjob Marketplace | Online Jobs & Freelance Marketplace';
      return view('microjob_marketplace', compact('title'));
   }


// dealMarketplace

    public function dealMarketplace(){
       $title = 'Deal Marketplace | Online Jobs & Freelance Marketplace';
      return view('deal_marketplace', compact('title'));
   }

// article
    public function article(){
      return view('article');
   }
// article details
    public function articledetails(){
      return view('article_details');
   }
}
