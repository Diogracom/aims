<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Month;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    public function allMonth(){
        $allMonths = Month::get()->all();
        return view('pages.admin.month.all_month', compact('allMonths'));
    }

    public function addMonth(){
        return view('pages.admin.month.add_month');
    }

    public function registerMonth(Request $request){

        $field = $request->validate([
            'month_name' => ['required']
        ]);

        Month::create($field); 

        $noty = array(
            'message' => 'Month Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.month')->with($noty);

    }

    public function editMonth($id){
        $id_month = Month::find($id);
        return view('pages.admin.month.edit_month', compact('id_month'));
    }

    public function updateMonth(Request $request){
        $request->validate([
            'month_name' => ['required']
        ]);

        $department_id = $request->id;
        Month::find($department_id)->update([
               'month_name' => $request->month_name,
               'updated_at' => now()
        ]);
         
        $noty = array(
            'message' => 'Month Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.month')->with($noty);

    }

    public function deleteDepartment($id){ 
        Month::find($id)->delete();

        $noty = array(
            'message' => 'Month Deleted Successfully',
            'alert-type' => 'error'
        );

        return redirect()->route('all.month')->with($noty);

    }
}
