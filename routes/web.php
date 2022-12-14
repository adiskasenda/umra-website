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

Route::get('/login', function () {
    return view('pages.authentication.login');
});

Route::get('/', function () {
    return view('pages.landingPage.landingPage');
});



Route::group([ 'prefix' =>'/template' ], function() {
    Route::get('/landing', function() {
        return view('template-website/landing');
    });
    Route::get('/profile', function() {
        return view('template-website/profile');
    });
    Route::get('/package-product', function() {
        return view('template-website/package');
    });
    Route::get('/login', function() {
        return view('template-website/login');
    });
});