<?php

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
//--------- E 19 S01 Laravel Samenta.ir ---------------------------------------
//    return view('welcome');
//    if(Auth::check())
//    {
//        return 'user is logged in ';
//
//    }else
//    {
//        return 'user is NOT logged in ';
//    }

// - ----------------------------------------------------------
//    $email = 'info@samenta.ir';
//    $password = '123456789';
//    if(Auth::attempt(['email'=>$email , 'password'=>$password])){
//        return 'true';
//    }

//    Auth::logout(); // exit

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

//
Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

//lesson 20
Route::get('/user/panel',['middleware'=>'Role',function (){

    return 'user panel';
}]);


Route::get('/middleware', ['middleware'=>'Role',function () {
    echo 'hi';
}]);

Route::get('/admin','AdminController@index');
// lesson 21
Route::resource('/post','PostController');