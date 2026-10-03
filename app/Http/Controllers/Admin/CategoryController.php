<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){ 

      $categories = Category::where('is_active',true)->orderBy('name','asc')->get();
    	return view('admin.category.index',compact('categories'));
    }

    // public function indexadd(){
    //   return view('admin.category.add.index');
    //  }

  // public function store(Request $request){
   
  //   $request->validate([
  //       'category' => 'required',
  //       'icon' => 'required',
  //   ]);

  //   Category::create([
  //       'name' => $request->category,
  //       'icon_emoji' => $request->icon,
  //       'slug' => strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->category))),
  //   ]);

  //   return back()->with('success', 'Category added successfully');
  //  }

public function store(Request $request)
{
    $request->validate([
        'category' => 'required',
        'icon' => 'required|image|mimes:jpg,jpeg,png',
    ]);

    $iconName = null;

    if ($request->hasFile('icon')) {
        $icon = $request->file('icon');

        // Original image name
        $iconName = $icon->getClientOriginalName();

        // Save image in public/category folder
        $icon->move(public_path('category'), $iconName);
    }

    Category::create([
        'name' => $request->category,
        'icon' => $iconName,
        'slug' => strtolower(
            trim(
                preg_replace('/[^A-Za-z0-9-]+/', '-', $request->category)
            )
        ),
    ]);

    return back()->with('success', 'Category added successfully');
}

// delete Category
   public function delete($id)
    {

      $category = Category::findOrFail($id);

      if ($category->jobs()->exists()) {
        return back()->with('error','This category Cannot delete because jobs exist under it');
      }
         $category->delete();
 
        return back()->with('success', 'Category deleted successfully');
    }
}
