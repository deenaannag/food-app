<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Controller;
use App\Http\Controllers\MessController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::view('/','index');
Route::view('login','studentlogin');
Route::view('admin','admin');
// Route::view('addfood','admin');
Route::view('student','student');
//Route::view('student','student');
//Route::view('studentorder','studentorder');
//Route::view('adminorder','adminorder');
//Route::view('order','order');
Route::view('register','signup');
Route::post('login',[MessController::class,'login']);
Route::view('signup','signup');
Route::post('signup',[MessController::class,'register']);
Route::post('/addfood',[MessController::class,'food'])->name('addfood');
Route::get('/', [MessController::class,'index']);


Route::get('addfoodview',[MessController::class,'addfoodview']);
//Route::get('addfoodview','MessController@addfoodview');
Route::get('deletefood/{id}',[MessController::class,'deletefood']);
Route::get('editfood/{id}',[MessController::class,'editfood']);
Route::post('editfood',[MessController::class,'update']);
Route::get('student',[MessController::class,'student']);
Route::get('orderno/{id}',[MessController::class,'order_food']);
Route::get('studentorder',[MessController::class,'studentorders']);
Route::get('adminorder',[MessController::class,'adminorderlist']);
