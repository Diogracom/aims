<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function allDepartment(){
        $alldepartments = Department::get()->all();
        return view('pages.admin.department.all_department', compact('alldepartments'));
    }

    public function addDepartment(){
        return view('pages.admin.department.add_department');
    }

    public function registerDepartment(Request $request){

        $field = $request->validate([
            'department_name' => ['required', 'min:3', 'max:255']
        ]);

        Department::create($field); 

        $noty = array(
            'message' => 'Department Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.department')->with($noty);

    }

    public function editDepartment($id){
        $id_department = Department::find($id);
        return view('pages.admin.department.edit_department', compact('id_department'));
    }

    public function updateDepartment(Request $request){
        $request->validate([
            'department_name' => ['required', 'min:3', 'max:255']
        ]);

        $department_id = $request->id;
        Department::find($department_id)->update([
               'department_name' => $request->department_name,
               'updated_at' => now()
        ]);
         
        $noty = array(
            'message' => 'Department Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.department')->with($noty);

    }

    public function deleteDepartment($id){ 
        Department::find($id)->delete();

        $noty = array(
            'message' => 'Department Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('all.department')->with($noty);

    }
}
