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

Route::get('/admin', function () {
    return ('hello admin');
})->name("khaled");


Route::namespace("Front")->group(function(){

    Route::prefix("user")->group(function(){

        Route::get("show" , "usercontroller@adminname");

    });
    
    
    });

