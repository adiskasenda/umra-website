<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class LandingPageController extends Controller
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

    public function index(Request $request)
    {

        $banners = [
            [
                "url" => "https://ihram.s3.amazonaws.com/ihram/upload/banner/ihram_asia_banner_promosi_9daf763a4fb38ae88595979c5f7d987a.jpg"
            ],
            [
                "url" => "https://ihram.s3.amazonaws.com/ihram/upload/banner/ihram_asia_banner_promosi_0e41943a87b47d33081cca56c69bf180.jpg"
            ],
            [
                "url" => "https://ihram.s3.amazonaws.com/ihram/upload/banner/ihram_asia_banner_promosi_c610ae0834348a63912c2bbfeb9ea5ce.jpg"
            ],
        ];

        return view('pages.landingPage.landingPage', [
            'banners' => $banners
        ]);
    }
}
