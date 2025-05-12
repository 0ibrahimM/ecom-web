<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
   
//categorylist
    public function categoryList ()
    {
        $categories = Category::get();


        return view ('backend.category.list', compact('categories'));
    }
    //categorylist

    //categoryCreate
    public function categoryCreate()
    {
        return view('backend.category.create');
    }
//categoryCreate

//categoryStore
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
    //categoryStore

    //categoryDelete
    public function categoryDelete($id)
    {
        $category = Category::find($id);

        if ($category->image && file_exists('backend/image/category/' . $category->image)) {
            unlink('backend/image/category/' . $category->image);
        }
        $category->delete();
        return redirect()->back();
    }
//categoryDelete

//categoryEdit
    public function categoryEdit($id)
    {
        $category = Category::find($id);

        return view('backend.category.edit', compact('category'));
    }
   //categoryEdit

   //categoryupdate
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

            
}



    $category->save();
    return redirect()->back();
}
//categoryUpdate

}
