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
        return view('about_us');
    }

// policy pages
public function policy(){
   return view('privacy_policy');
 }

// terms
public function terms(){
   return view('terms_conditions');

   }

// marketplace

   public function marketplace(){
      return view('microjob_marketplace');
   }


// dealMarketplace

    public function dealMarketplace(){
      return view('deal_marketplace');
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
