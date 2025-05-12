<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
public function subCategoryList ()
    {
        $subCategories = SubCategory::get();
        return view ('backend.sub-category.list', compact('subCategories'));
    }

    // public function categoryList()
    // {
    //     $categoties = Category::get();


    //     return view ('backend.sub-category.list', compact('subCategories'));
    // }
    public function categoryCreate()
    {
        return view('backend.category.create');
    }
    public function categoryStore(Request $request)
    {
        $category = new Category();

        $category->name = $request->name;
        $category->slug = str::slug($request->name);

        if (isset($request->image)) {

            $imageName = rand() . 'category' . '.' . $request->image->extension();

            $request->image->move('backend/image/category', $imageName);
            $category->image = $imageName;
        }


        // $category->image = $request->image;

        $category->save();
        return Redirect('admin/category/list');
    }

    public function categoryDelete($id)
    {
        $category = Category::find($id);

        if ($category->image && file_exists('backend/image/category/' . $category->image)) {
            unlink('backend/image/category/' . $category->image);
        }
        $category->delete();
        return redirect()->back();
    }
    public function categoryEdit($id)
    {
        $category = Category::find($id);

        return view('backend.category.edit', compact('category'));
    }
   
    public function categoryUpdate(Request $request, $id)
{
    $category = Category::find($id);
    $category->name = $request->name;
    $category->slug = Str::slug($request->name);
if(isset($request->image)){


    if ($category->image && file_exists('backend/image/category/' . $category->image)) {
            unlink('backend/image/category/' . $category->image);
        }
$imageName = rand().'categoryUpdate'.'.'.$request->image->extension();
$request->image->move('backend/image/category/',$imageName );
$category->image =$imageName;

            // $imageName = rand() . 'categoryUpdate' . '.' . $request->image->extension();

            // $request->image->move('backend/image/category', $imageName);
            // $category->image = $imageName;
}



    $category->save();
    return redirect()->back();
}

}
