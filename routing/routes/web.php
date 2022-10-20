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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('about');
});
Route::get('/store', function () {
    return '<h1>store</h1>';
});
Route::get('/index/{id}',function($age){ 
    return "Mon age est :  $age ans"; }); 
    

Route::get('/index/{id}/{name}',function($id,$name){ 
     return "ID : $id <br> Name : $name"; });
