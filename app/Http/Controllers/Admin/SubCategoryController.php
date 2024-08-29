<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function allSubCategory(){
        $allSubCategories = SubCategory::latest()->get();
        return view('pages.admin.subcategory.all_subcategory', compact('allSubCategories'));
    }

    public function addSubCategory(){
        $category = Category::get()->all();
        return view('pages.admin.subcategory.add_subcategory', compact('category'));
    }

    public function registerSubCategory(Request $request){
       
        $category = $request->validate([
            'category_id'=>['required'],
            'subcategory_name'=>['required','min:5','max:255']

        ]);

        SubCategory::create($category);

        $noty = array(
            'message' => 'SubCategory Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.subcategory')->with($noty);
    }

    public function editSubCategory($id){
        $category = Category::get()->all();
        $subcategory = SubCategory::find($id);
        return view('pages.admin.subcategory.edit_subcategory', compact('category','subcategory'));
    }

    public function updateSubCategory(Request $request){
        $request->validate([
            'category_id' =>['required'],
            'subcategory_name' => ['required', 'min:5', 'max:255']
        ]);

        $subcategory_id = $request->id;
        SubCategory::find($subcategory_id)->update([
               'Category_id' => $request->category_id,
               'subcategory_name' => $request->subcategory_name,
               'updated_at' => now()
        ]);
         
        $noty = array(
            'message' => 'SubCategory Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.subcategory')->with($noty);
    }

    public function deleteSubCategory($id){ 
        SubCategory::find($id)->delete();

        $noty = array(
            'message' => 'SubCategory Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('all.subcategory')->with($noty);

    }
}
