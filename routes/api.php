<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route Controller
use App\Http\Controllers\{
    Configuration\ConfigurationController
};



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Configuration
Route::get('/configuration/{group}', [ ConfigurationController::class, 'index']);
