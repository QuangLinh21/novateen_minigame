<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListImagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);
Route::post('student_store',[HomeController::class,'student_store'])->name('student_store');
// Route::post('update_info',[HomeController::class,'update_info'])->name('update_info');
Route::post('update_info','App\Http\Controllers\HomeController@update_info')->name('update_info');
Route::get('show_img/{stu_id}',function (){
    return view('frontend.page.home.show_image',compact('stu_id'));
});
Route::get('danh-sach-anh',[ListImagesController::class,'list_images']);
Route::get('chi-tiet-anh/{stu_id}',[ListImagesController::class,'detail_images']);