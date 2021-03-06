<?php

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

Route::get("/", function(){
  if(!session("role")){
    return view("login.index");
  
    }elseif(session('role') == 1){
      return view("panel.admin.index");
    }else {
      return view("panel.user.index");
    }
})->name("loginIndex");


Route::post('process', "LoginProcess")->name("processForm");


Route::resource('user', 'UsersController');