<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class AboutMeController extends Controller
{
    private $header;
    private $url;

    public function __construct()
    {
        $this->header = [
            'ax-request-id' => Uuid::uuid4()->toString(),
            'ax-request-at' => Carbon::now()->toIso8601String(),
            'ax-channel-in' => 'UMRA-WEB'
        ];

        $this->url = env('APP_URL_API');
    }

    public function index()
    {
        
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        // Activity
        // $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/banner_activity');
        // $activity_me = json_decode($response->getBody(), true);
        $activity_me = [
            [
                'image' => asset('assets-web/img/image/kegiatan-1.png'),
                'title' => "Launching UMRA.ID di Hall Bank Syariah Indonesia (Bank Syariah Mandiri)"
            ],
            [
                'image' => asset('assets-web/img/image/kegiatan-2.png'),
                'title' => "Launching UMRA.ID di Hall Bank Syariah Indonesia (Bank Syariah Mandiri)"
            ],
            [
                'image' => asset('assets-web/img/image/kegiatan-3.png'),
                'title' => 'Launching UMRA ID di Hall Bank Syariah Indonesia (Bank Syariah Mandiri)'
            ]
        ];

        // Partner
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/partner');
        $partners = json_decode($response->getBody(), true);
        

        return view('pages.landingPage.abountMe', [
            'activity_me' => $activity_me,
            'partners' => $partners['data']
        ]);
    }
}

