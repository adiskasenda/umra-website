<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function index()
    {
        // Activity
        $activity_me = [
            [
                "url_banner" => ""
            ]
        ];

        // Partner
        $partners = [
            [
                "url" => asset('assets-web/img/partner/partner-1.png')
            ],
            [
                "url" => asset('assets-web/img/partner/partner-2.png')
            ]
        ];

        return view('pages.landingPage.abountMe', [
            'activity_me' => $activity_me,
            'partners' => $partners
        ]);
    }
}
