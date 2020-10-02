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



// pagination

 Route::get('userlist','Profile@index');

// Insert data
 Route::get('add','Companies@add');  
 Route::post('save','Companies@save');  

// Delete data

 Route::get('del','Companies@del');  //Delete data uncomment this


//Update Data
Route::post('update','Companies@update');
Route::get('edit','Companies@edit');


//login
Route::post('login_submit','Companies@login_submit');
Route::post('/','Companies@logout');

//search

Route::get('/Search','Profile@Search');













  





//registration
//Route::get('registration','Profile@registration');
//Route::post('registration_submit','Profile@registration_submit');


  // Route::get('change','Companies@change');   
  // Route::post('update','Companies@update');  //for updating data


  
















//Route::get('profile','Profile@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
