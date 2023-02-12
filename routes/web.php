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
    Auth\ForgotPINController,

    LandingPage\LandingPageController,
    LandingPage\AboutMeController,
    LandingPage\ContactMeController,
    LandingPage\LocationMeController,
    LandingPage\FaqController,
    LandingPage\MitraController,

    Feedback\FeedBackController,

    NewsPage\NewsController,
    Transaction\TransactionController,
    Transaction\TransactionPaymentController,

    PackageProduct\PackageProductController,
    Profile\ProfileController,
    Profile\ProfileTransactionController,
    Profile\ProfileActivityController,
    PIN\PINController,
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
        // Route::get('/validate-otp', [ LoginEmailController::class, 'viewOtp' ]);
        // Route::get('/check-otp', [ LoginEmailController::class, 'checkOtp' ]);
        // Route::post('/validate-otp', [ LoginEmailController::class, 'loginOtp' ]);
    });

    Route::group([ 'prefix' =>'/login-phone' ], function() {
        Route::get('/', function(){
            return redirect(url('/login'));
        });
        Route::post('/', [ LoginPhoneController::class, 'loginPhone' ]);
        // Route::get('/validate-otp', [ LoginPhoneController::class, 'viewOtp' ]);

        // Route::get('/check-otp', [ LoginPhoneController::class, 'checkOtp' ]);
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

    // Reset Password Email
    Route::group([ 'prefix' =>'/reset-password' ], function() {
        Route::post('/send-email', [ ForgotPasswordController::class, 'sendEmailResetPassword']);
    });

    // Route::group([ 'prefix' => '/reset-pin' ], function() {
    //     Route::get('/', [ ForgotPINController::class, 'resetPIN']);
    //     Route::post('/', [ ForgotPINController::class, 'updatePIN']);
    // });

});

// FeedBack
Route::group([ 'prefix' =>'/redirect-feedback' ], function() {
    Route::get('/emailVerification', [ FeedBackController::class, 'emailVerification' ]);
    Route::get('/reset-password', [ FeedBackController::class, 'resetPassword' ]);
    Route::patch('/reset-password', [ FeedBackController::class, 'updatePassword']);
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


Route::group([ 'middleware' =>'token'], function(){

    // Transaction
    Route::group([ 'prefix' =>'/transaction' ], function() {
        Route::get('/jamaah/{id}', [ TransactionController::class, 'jamaah' ]);
        Route::get('/biodata/{id}', [ TransactionController::class, 'biodata' ]);
        Route::get('/checkout/{id}', [ TransactionController::class, 'checkout' ]);
        Route::get('/payment/{id}', [ TransactionController::class, 'payment' ]);
        Route::get('/payment-option/{id}', [ TransactionController::class, 'paymentOption' ]);
        Route::post('/checkout', [ TransactionController::class, 'storeCheckout' ]);
        Route::get('/payment-status/{id}', [ TransactionController::class, 'paymentStatus' ]);
        
        Route::get('/payment-need-pay/{id}', [ TransactionPaymentController::class, 'paymentNeedPay' ]);
        Route::get('/payment-option-need-pay/{id}', [ TransactionPaymentController::class, 'paymentOptionNeedPay' ]);
        Route::post('/payment-need-pay', [ TransactionPaymentController::class, 'needPay' ]);

        // Detail Trasaction
        Route::get('/{id}/detail', [ TransactionController::class, 'show' ]);
    });

    // Profile
    Route::group([ 'prefix' =>'/profile' ], function() {
        // account & security
        Route::get('/', [ ProfileController::class, 'profile' ]);
        Route::get('/edit', [ ProfileController::class, 'editProfile' ]);
        Route::patch('/', [ ProfileController::class, 'updateProfile' ]);
            // Update & Verification
            Route::patch('/update-email', [ ProfileController::class, 'updateEmail' ]);
            Route::patch('/update-phone', [ ProfileController::class, 'updatePhone' ]);
        Route::get('/password', [ ProfileController::class, 'profilePassword' ]);
            Route::patch('/update-password', [ ProfileController::class, 'updatePassword' ]);
        
        Route::get('/pin', [ ProfileController::class, 'profilePIN' ]);
            // New PIN
            Route::patch('/new-pin', [ ProfileController::class, 'newPin' ]);
            // Update PIN
            Route::post('/send-email-pin', [ ProfileController::class, 'sendEmailPIN' ]);
            Route::post('/validate-otp-pin', [ ProfileController::class, 'validateOTPEmailPIN' ]);

        // Activity
        Route::get('/list-transaction', [ ProfileTransactionController::class, 'listTransaction' ]);
        Route::get('/activity', [ ProfileActivityController::class, 'activity' ]);
    });

    Route::group([ 'prefix' =>'/validate-otp' ], function() {
        Route::post('/', [ PINController::class, 'validateOtp']);
        Route::post('/send-email', [ PINController::class, 'sendEmail']);
        Route::post('/email', [ PINController::class, 'validateOtpEmail']);
    });

});
