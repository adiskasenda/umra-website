<?php

namespace App\Http\Controllers\PackageProduct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class PackageProductController extends Controller
{
    private $header;
    private $url;
    private $otherMenus;

    public function __construct()
    {
        $this->header = [
            'ax-request-id' => Uuid::uuid4()->toString(),
            'ax-request-at' => Carbon::now()->toIso8601String(),
            'ax-channel-in' => 'UMRA-WEB'
        ];

        $this->url = env('APP_URL_API');

        $this->otherMenus = [
            [ 
                 'icon' => asset('/assets-web/img/icon/package-umroh.png'),
                 'title' => 'Paket Umroh',
                 'description' => 'Perjalanan ibadah umroh dengan nyaman & fasilitas lengkap dari keberangkatan',
                 'url' => url('/package/umroh')
            ],
            [ 
                'icon' => asset('/assets-web/img/icon/package-umroh-plus.png'),
                'title' => 'Paket Umroh Plus+',
                'description' => 'Ibadah umroh dengan fasilitas terbaik agar ibadah anda lebih kusyu.',
                'url' => url('/package/umroh-plus')
            ],
            [ 
                 'icon' => asset('/assets-web/img/icon/package-wisata-halal.png'),
                 'title' => 'Wisata Halal',
                 'description' => 'Berlibur & mengungjungi negara, kota, serta destinasi halal bersama UMRA.',
                 'url' => url('/package/wisata-halal')
            ],
         ];
    }

    public function search(Request $request)
    {
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/searching/'.$request->layanan.'/'.date('Y-m-d', strtotime($request->departure_date)).'/'.date('Y-m-d', strtotime($request->return_date)));
        $package_products = json_decode($response->getBody(), true);

        // remove array otherMenus
        unset($this->otherMenus[0]);

        // Banner Header
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/banner/location/APPS_HOME_HEADER_1');
        $banner_headers = json_decode($response->getBody(), true);

        // Banner
        $banner = asset('assets-web/img/banner/banner-fasilitas.png');

        return view('pages.packageProducts.search', [
            'package_products' => $package_products['data'],
            'otherMenus' => $this->otherMenus,
            'banner_headers' => $banner_headers['data'],
            'banner' => $banner
        ]);
    }

    public function umroh()
    {
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        // Pakage Umroh
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/home/umroh');
        $package_products = json_decode($response->getBody(), true);

        // remove array otherMenus
        unset($this->otherMenus[0]);

        // Banner Header
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/banner/location/APPS_HOME_HEADER_1');
        $banner_headers = json_decode($response->getBody(), true);

        // Banner
        $banner = asset('assets-web/img/banner/banner-fasilitas.png');

        return view('pages.packageProducts.umroh', [
            'package_products' => $package_products['data'],
            'otherMenus' => $this->otherMenus,
            'banner_headers' => $banner_headers['data'],
            'banner' => $banner
        ]);
    }

    public function umrohPlus()
    {
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        // Package Umroh Plus
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/home/umrohplus');
        $package_products = json_decode($response->getBody(), true);
        
        // remove array otherMenus
        unset($this->otherMenus[1]);

        // Banner
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/banner/location/APPS_HOME_HEADER_1');
        $banner_headers = json_decode($response->getBody(), true);

        // Banner
        $banner = asset('assets-web/img/banner/banner-fasilitas.png');

        return view('pages.packageProducts.umrohPlush',[
            'package_products' => $package_products['data'],
            'otherMenus' => $this->otherMenus,
            'banner_headers' => $banner_headers['data'],
            'banner' => $banner
        ]);
    }

    public function wisataHalal()
    {
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        // Package Wisata Halal
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/home/wisatahalal');
        $package_products = json_decode($response->getBody(), true);

        // remove array otherMenus
        unset($this->otherMenus[2]);

        // Banner
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/banner/location/APPS_HOME_HEADER_1');
        $banner_headers = json_decode($response->getBody(), true);

        // Banner
        $banner = asset('assets-web/img/banner/banner-fasilitas.png');

        return view('pages.packageProducts.wisataHalal', [
            'package_products' => $package_products['data'],
            'otherMenus' => $this->otherMenus,
            'banner_headers' => $banner_headers['data'],
            'banner' => $banner
        ]);
    }

    public function diy()
    {
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        return view('pages.packageProducts.diy');
    }

    public function show($id)
    {
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/'.$id);
        $package_product = json_decode($response->getBody(), true);

        // Package Lain
        switch ($package_product['data']['flag_umroh']) {
            case '0':
                $flag_umroh = 'umroh';
                break;
            case '1':
                $flag_umroh = 'umroh_plush';
                break;
            default:
                $flag_umroh = 'wisata_halal';
        }

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/'.$flag_umroh.'/pagination/0/4/date_start/asc');
        $other_packages = json_decode($response->getBody(), true);

        return view('pages.packageProducts.detailUmroh', [
            'package_product' => $package_product['data'],
            'other_packages' => $other_packages['data']['content']
        ]);
    }

}
