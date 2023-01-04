<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LocationMeController extends Controller
{
    public function index()
    {
        return view('pages.landingPage.locationMe');
    }
}
