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
        $layanan = [
            ['value' => 'umroh', 'text' => 'Paket Umroh'],
            ['value' => 'umroh_plush', 'text' => 'Paket Umroh Plus'],
            ['value' => 'wisata_halal', 'text' => 'Wisata Halal'],
        ];

        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        // Banner
        $banners = [
            [
                "url" => asset('assets-web/img/banner/banner-landing.png')
            ],
        ];

        // Banner 2
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/banner/location/APPS_HOME_HEADER_1');
        $banners2 = json_decode($response->getBody(), true);

        // Package Umrah
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/home/umroh');
        $package_product_umrah = json_decode($response->getBody(), true);

        // Package Umrah Plus
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/home/umrohplus');
        $package_product_umrah_plus = json_decode($response->getBody(), true);

        // Package Wisata Halal
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/home/wisatahalal');
        $package_product_wisata_halal = json_decode($response->getBody(), true);

        // configuration
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/configuration_system/grup/PURCHASE_PACKET');
        $configuration = json_decode($response->getBody(), true);

        // Banner 3
        $banner3 = asset('assets-web/img/banner/banner-fasilitas.png');

        // Experience
        $experience = [
            [
                'image' => asset('assets-web/img/image/experience-1.png'),
                'title' => 'Keluarga Bapak Dr. Ramadhan',
                'description' => 'Cibubur, Jakarta Barat',
            ],
            [
                'image' => asset('assets-web/img/image/experience-2.png'),
                'title' => 'Keluarga Bapak Dr. Ramadhan',
                'description' => 'Cibubur, Jakarta Barat',
            ],
            [
                'image' => asset('assets-web/img/image/experience-3.png'),
                'title' => 'Keluarga Bapak Dr. Ramadhan',
                'description' => 'Cibubur, Jakarta Barat',
            ]
        ];

        // Experience 2
        $experience2 = [
            [
                'title' => 'Ragu jadi Seru!',
                'description' => 'Tadinya takut umroh sendiri, lalu coba UMRA.ID umroh jadi seru dan berkesan',
                'name' => 'Husain',
                'username' => 'Jamaah UMRAID 2020',
                
            ],
            [
                'title' => 'Mudahnya Umroh Privat',
                'description' => 'Lebih fleksibel mengatur umroh bersama keluarga pakai UMRA.ID',
                'name' => 'Dr. Nurul',
                'username' => 'Jamaah UMRAID 2020',
            ]
        ];

        // Mitra
        $mitras = [
            [
                "name" => "PT. Berkah Umroh sentosa",
                "address" => "Jl. Sudirman Gang II, Kec. Jajaringan, Kab. Brebes, Indonesia 2930",
            ],
            [
                "name" => "PT. Berkah Umroh sentosa",
                "address" => "Jl. Sudirman Gang II, Kec. Jajaringan, Kab. Brebes, Indonesia 2930",
            ],
            [
                "name" => "Pt. Berkah Umroh sentosa",
                "address" => "Jl. Sudirman Gang II, Kec. Jajaringan, Kab. Brebes, Indonesia 2930",
            ]
        ];

        // Partner
        $partners = [
            [
                "url" => asset('assets-web/img/partner/partner-1.png')
            ],
            [
                "url" => asset('assets-web/img/partner/partner-2.png')
            ],
            [
                "url" => asset('assets-web/img/partner/partner-3.png')
            ],
            [
                "url" => asset('assets-web/img/partner/partner-4.png')
            ]
        ];

        // Artikel
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/news/pagination/0/5/id_blog/desc');
        $news = json_decode($response->getBody(), true);
        $new = $news['data']['content'][0];
        unset($news['data']['content'][0]);

        return view('pages.landingPage.landingPage', [
            'layanan' => $layanan,
            'banners' => $banners,
            'banners2' => $banners2['data'],
            'package_product_umrah' => array_slice($package_product_umrah['data'], 0, 2),
            'package_product_umrah_plus' => array_slice($package_product_umrah_plus['data'], 0, 2),
            'package_product_wisata_halal' => array_slice($package_product_wisata_halal['data'], 0, 2),
            'configuration' => $configuration,
            'banner3' => $banner3,
            'experience' => $experience,
            'experience2' => $experience2,
            'mitras' => $mitras,
            'partners' => $partners,
            'new' => $new,
            'news' => $news['data']['content'],
        ]);
    }
}
