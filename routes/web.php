<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\MonthController;
use App\Http\Controllers\Admin\SubCategoryController;

Route::get('/', function () {
    return view('index');
});
Route::post('/', [AuthController::class, 'login'])->name('login');

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('pages.dashboard');
 
//Months All Route
Route::controller(MonthController::class)->group(function(){
  Route::get('/all/month', 'allMonth')->name('all.month');
  Route::get('/all/month/add', 'addMonth')->name('add.month');
  Route::post('/all/month/add', 'registerMonth')->name('register.month');
  Route::get('/all/month/edit/{id}', 'editMonth')->name('edit.month');
  Route::post('/all/month/update', 'updateMonth')->name('update.month');
  Route::get('/all/month/delete/{id}', 'deleteMonth')->name('delete.month');  
}); 

Route::controller(DepartmentController::class)->group(function(){
  Route::get('/all/department', 'allDepartment')->name('all.department');
  Route::get('/all/department/add', 'addDepartment')->name('add.department');
  Route::post('/all/department/add', 'registerDepartment')->name('register.department');
  Route::get('/all/department/edit/{id}', 'editDepartment')->name('edit.department');  
  Route::post('/all/department/update', 'updateDepartment')->name('update.department');
  Route::get('/all/department/delete/{id}', 'deleteDepartment')->name('delete.department');  
});

//Category All Route
Route::controller(CategoryController::class)->group(function(){
  Route::get('/all/category', 'allCategory')->name('all.category');
  Route::get('/all/category/add', 'addCategory')->name('add.category');
  Route::post('/all/category/add', 'registerCategory')->name('register.category');
  Route::get('/all/category/edit/{id}', 'editCategory')->name('edit.category');
  Route::post('/all/category/update', 'updateCategory')->name('update.category');
  Route::get('/all/category/delete/{id}', 'deleteCategory')->name('delete.category');  
}); 

//SubCategory All Route
Route::controller(SubCategoryController::class)->group(function(){
  Route::get('/all/subcategory', 'allSubCategory')->name('all.subcategory');
  Route::get('/all/subcategory/add', 'addSubCategory')->name('add.subcategory');
  Route::post('/all/subcategory/add', 'registerSubCategory')->name('register.subcategory');
  Route::get('/all/subcategory/edit/{id}', 'editSubCategory')->name('edit.subcategory');
  Route::post('/all/subcategory/update', 'updateSubCategory')->name('update.subcategory');
  Route::get('/all/subcategory/delete/{id}', 'deleteSubCategory')->name('delete.subcategory');  
}); 


