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

// use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('layouts.app');
});

// Start Home Routes

// Route::get('/home', function () {
//     return view('home');
// });

Route::resource('home', 'SettingController');
// Route::resource('home', 'PageController');
// Route::resource('home', 'ServiceController');
// Route::resource('home', 'ProjectController');


// End Home Routes

//Start Article Details Routes

// Route::get('/article-details', function () {
//     return view('article-details');
// });

Route::resource('article-details', 'SettingController');
// End Article Details Routes

Route::get('/our-articles', function () {
    return view('our-articles');
});

Route::get('/our-work', function () {
    return view('our-work');
});

Route::get('/project-details', function () {
    return view('project-details');
});