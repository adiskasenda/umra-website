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
                 'icon' => asset('/assets-web/img/icon/umroh.png'),
                 'title' => 'Paket Umroh',
                 'description' => 'Perjalanan ibadah umroh dengan nyaman & fasilitas lengkap dari keberangkatan',
                 'url' => url('/package/umroh')
            ],
            [ 
                'icon' => asset('/assets-web/img/icon/umroh-plus.png'),
                'title' => 'Paket Umroh Plus+',
                'description' => 'Ibadah umroh dengan fasilitas terbaik agar ibadah anda lebih kusyu.',
                'url' => url('/package/umroh-plus')
            ],
            [ 
                 'icon' => asset('/assets-web/img/icon/wisata-halal.png'),
                 'title' => 'Wisata Halal',
                 'description' => 'Berlibur & mengungjungi negara, kota, serta destinasi halal bersama UMRA.',
                 'url' => url('/package/wisata-halal')
            ],
         ];
    }

    public function umroh()
    {
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/umroh/pagination/0/3/date_start/asc');
        $package_products = json_decode($response->getBody(), true);

        // remove array otherMenus
        unset($this->otherMenus[0]);

        // Banner
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/banner/location/APPS_HOME_HEADER_1');
        $banners = json_decode($response->getBody(), true);

        return view('pages.packageProducts.umroh', [
            'package_products' => $package_products['data']['content'],
            'otherMenus' => $this->otherMenus,
            'banners' => $banners['data'],
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

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/umroh_plush/pagination/0/3/date_start/asc');
        $package_products = json_decode($response->getBody(), true);

        // remove array otherMenus
        unset($this->otherMenus[1]);

        return view('pages.packageProducts.umrohPlush',[
            'package_products' => $package_products,
            'otherMenus' => $this->otherMenus
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

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/wisata_halal/pagination/0/3/date_start/asc');
        $package_products = json_decode($response->getBody(), true);

        // remove array otherMenus
        unset($this->otherMenus[3]);

        return view('pages.packageProducts.wisataHalal', [
            'package_products' => $package_products,
            'otherMenus' => $this->otherMenus
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
        $other_package = [];

        return view('pages.packageProducts.detailUmroh', [
            'package_product' => $package_product['data'],
            'other_package' => $other_package
        ]);
    }

}
