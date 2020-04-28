<?php

use App\Http\Controllers\UserController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
//use Session;
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
    //$request->session()->put('token', $value);
    //return Http::get('http://restschool.hridham.com/api/getAllAlbums')->json();
})->name('home');
Route::post('/login', 'UserController@login');
Route::resource('albums', 'AlbumController');
Route::resource('albums.photo', 'PhotoController');
Route::resource('testimonials', 'TestimonialsController');

// Route::get('users/{id}', function ($id) {

// });

// Route::post('/login', function () {
// $respose=Http::post('http://restschool.hridham.com/api/login',[
//     "username"=>"admin",
//     "password"=>"12345678"
// ]);

// //Session::put('token',$respose->json()['token']);
// session()->put('token', $respose->json()['token']);
//   return dd(session()->get('token'));
// });
Route::get('getuser', function () {
    return 1;
});

