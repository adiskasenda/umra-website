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
                'image' => asset('assets-web/img/image/kegiatan-1.png')
            ],
            [
                'image' => asset('assets-web/img/image/kegiatan-2.png')
            ],
            [
                'image' => asset('assets-web/img/image/kegiatan-3.png')
            ]
        ];

        // Partner
        // $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/partner');
        // $partners = json_decode($response->getBody(), true);
        $partners = [
            [
                "url_logo" => asset('assets-web/img/partner/partner-1.png')
            ],
            [
                "url_logo" => asset('assets-web/img/partner/partner-2.png')
            ],
            [
                "url_logo" => asset('assets-web/img/partner/partner-3.png')
            ],
            [
                "url_logo" => asset('assets-web/img/partner/partner-4.png')
            ]
        ];

        return view('pages.landingPage.abountMe', [
            'activity_me' => $activity_me,
            'partners' => $partners
        ]);
    }
}

