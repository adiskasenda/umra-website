<?php

use Illuminate\Support\Facades\Route;

// Route Controller
use App\Http\Controllers\{
    Auth\LoginController,
    
    Auth\LoginEmailController,
    Auth\LoginGoogleController,
    Auth\LoginPhoneController,
    Auth\RegisterController,
    Auth\ForgotPasswordController,

    LandingPage\LandingPageController,
    LandingPage\AboutMeController,
    LandingPage\ContactMeController,
    LandingPage\LocationMeController,
    LandingPage\FaqController,
    LandingPage\MitraController,

    NewsPage\NewsController,
    Transaction\TransactionController,

    PackageProduct\PackageProductController,
    Profile\ProfileController,
    Profile\ProfileTransactionController,
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

// Login & Register
Route::group([ 'middleware' =>'tokenNotFound'], function(){

    // Login 
    Route::get('/login', [ LoginController::class, 'index' ]);

    Route::group([ 'prefix' =>'/login-email' ], function() {
        Route::post('/', [ LoginEmailController::class, 'loginEmail' ]);
        Route::get('/validate-otp', [ LoginEmailController::class, 'viewOtp' ]);
        Route::get('/check-otp', [ LoginEmailController::class, 'checkOtp' ]);
        Route::post('/validate-otp', [ LoginEmailController::class, 'loginOtp' ]);
    });
    Route::group([ 'prefix' =>'/login-phone' ], function() {
        Route::post('/', [ LoginPhoneController::class, 'loginPhone' ]);
        Route::get('/validate-otp', [ LoginPhoneController::class, 'viewOtp' ]);
        Route::get('/check-otp', [ LoginPhoneController::class, 'checkOtp' ]);
        Route::post('/validate-otp', [ LoginPhoneController::class, 'loginOtp' ]);
    });

    Route::group([ 'prefix' =>'/login-gmail' ], function() {
        Route::get('/', [ LoginGoogleController::class, 'google']);
        Route::get('/callback', [ LoginGoogleController::class, 'googleCallback']);
    });

    // Register
    Route::get('/register', [ RegisterController::class, 'index' ]);
    Route::post('/register-email', [ RegisterController::class, 'registerEmail' ]);
    Route::post('/register-phone', [ RegisterController::class, 'registerPhone' ]);

    // Reset Password Email & PIN
    Route::get('/reset-password', [ ForgotPasswordController::class, 'email']);

});

// Logout 
Route::get('/logout', [ LoginController::class, 'logout' ]);

// Landing Page
Route::get('/', [ LandingPageController::class, 'index' ]);

// About Me
Route::get('/about-me', [ AboutMeController::class, 'index' ]);

// Contact Me
Route::get('/contact-me', [ ContactMeController::class, 'index' ]);

// Location Me
Route::get('/location-me', [ LocationMeController::class, 'index' ]);

// Mitra
Route::get('/mitra', [ MitraController::class, 'index' ]);

// Faq
Route::get('/faq', [ FaqController::class, 'index' ]);

// Package Product
Route::group([ 'prefix' =>'/package' ], function() {
    Route::get('/search', [ PackageProductController::class, 'search' ]);
    Route::get('/umroh', [ PackageProductController::class, 'umroh' ]);
    Route::get('/umroh-plus', [ PackageProductController::class, 'umrohPlus' ]);
    Route::get('/wisata-halal', [ PackageProductController::class, 'wisataHalal' ]);
    Route::get('/diy', [ PackageProductController::class, 'diy' ]);
    Route::get('/{id}', [ PackageProductController::class, 'show' ]);
});

// news
Route::group([ 'prefix' =>'/news' ], function() {
    Route::get('/', [ NewsController::class, 'index' ]);
    Route::get('/{id}', [ NewsController::class, 'show' ]);
});


Route::group([ 'middleware' =>'tokenNotFound'], function(){

    // Transaction
    Route::group([ 'prefix' =>'/transaction' ], function() {
        Route::get('/jamaah', [ TransactionController::class, 'jamaah' ]);
        Route::get('/biodata', [ TransactionController::class, 'biodata' ]);
        Route::get('/checkout', [ TransactionController::class, 'checkout' ]);
        Route::post('/checkout', [ TransactionController::class, 'storeCheckout' ]);
       
        // Detail Trasaction
        Route::get('/{id}/detail', [ TransactionController::class, 'show' ]);
    });

    // Profile
    Route::group([ 'prefix' =>'/profile' ], function() {
        // account & security
        Route::get('/', [ ProfileController::class, 'profile' ]);
        Route::patch('/', [ ProfileController::class, 'updateProfile' ]);
        Route::get('/password', [ ProfileController::class, 'profilePassword' ]);
        Route::patch('/update-password', [ ProfileController::class, 'updatePassword' ]);
        Route::get('/pin', [ ProfileController::class, 'profilePIN' ]);
        Route::patch('/update-pin', [ ProfileController::class, 'updatePIN' ]);

        // Activity
        Route::get('/list-transaction', [ ProfileTransactionController::class, 'listTransaction' ]);

        // Help

    });

});

Route::get('testing', function() {
    return view('pages.testing');
});