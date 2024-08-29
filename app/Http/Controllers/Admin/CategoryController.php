<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Department;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;

class CategoryController extends Controller
{
    public function allCategory(){
        $allCategories = Category::latest()->get();
        return view('pages.admin.category.all_category', compact('allCategories'));
    }

    public function addCategory(){
        $department = Department::get()->all();
        return view('pages.admin.category.add_category', compact('department'));
    }

    public function registerCategory(Request $request){
       
        $category = $request->validate([
            'department_id'=>['required','max:255'],
            'category_name'=>['required','min:5','max:255']

        ]);

        Category::create($category);

        $noty = array(
            'message' => 'Category Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($noty);
    }

    public function editCategory($id){
        $department = Department::get()->all();
        $category = Category::find($id);
        return view('pages.admin.category.edit_category', compact('department','category'));
    }

    public function updateCategory(Request $request){
        $request->validate([
            'department_id' =>['required'],
            'category_name' => ['required', 'min:5', 'max:255']
        ]);

        $category_id = $request->id;
        Category::find($category_id)->update([
               'department_id' => $request->department_id,
               'category_name' => $request->category_name,
               'updated_at' => now()
        ]);
         
        $noty = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($noty);
    }

    public function deleteCategory($id){ 
        Category::find($id)->delete();

        $noty = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('all.category')->with($noty);

    }
}
