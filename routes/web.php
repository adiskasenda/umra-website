<?php

use Illuminate\Support\Facades\Route;

// Route Controller
use App\Http\Controllers\{
    Auth\LoginController,
    Auth\RegisterController,
    LandingPage\LandingPageController,
    NewsPage\NewsController,
    PackageProduct\PackageProductController,
    Profile\ProfileController,
};

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

// Login
Route::get('/login', [ LoginController::class, 'index' ]);
Route::group([ 'prefix' =>'/login-email' ], function() {
    Route::post('/', [ LoginController::class, 'loginEmail' ]);
    Route::get('/validate-otp', [ LoginController::class, 'viewEmailOtp' ]);
    Route::post('/validate-otp', [ LoginController::class, 'loginEmailOtp' ]);
});
Route::group([ 'prefix' =>'/login-phone' ], function() {
    Route::post('/', [ LoginController::class, 'loginPhone' ]);
    Route::get('/validate-otp', [ LoginController::class, 'viewPhoneOtp' ]);
    Route::post('/validate-otp', [ LoginController::class, 'loginPhoneOtp' ]);
});

// Register
Route::get('/register', [ RegisterController::class, 'index' ]);
Route::post('/register-email', [ RegisterController::class, 'registerEmail' ]);
Route::post('/register-phone', [ RegisterController::class, 'registerPhone' ]);

// Logout 
Route::get('/logout', [ LogoutController::class, 'logout' ]);

// Landing Page
Route::get('/', [ LandingPageController::class, 'index' ]);

// Package Product
Route::group([ 'prefix' =>'/package' ], function() {
    Route::get('/umroh', [ PackageProductController::class, 'umroh' ]);
    Route::get('/umroh-plus', [ PackageProductController::class, 'umrohPlus' ]);
    Route::get('/wisata-halal', [ PackageProductController::class, 'wisataHalal' ]);
    Route::get('/diy', [ PackageProductController::class, 'diy' ]);
    Route::get('/umroh/{id}', [ PackageProductController::class, 'show' ]);
});

// news
Route::group([ 'prefix' =>'/news' ], function() {
    Route::get('/', [ NewsController::class, 'index' ]);
    Route::get('/{id}', [ NewsController::class, 'show' ]);
});

// Profile
Route::get('/profile', [ ProfileController::class, 'index' ]);





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
    Route::get('/package-product', function() {
        return view('template-website/package');
    });
    Route::get('/login', function() {
        return view('template-website/login');
    });
});