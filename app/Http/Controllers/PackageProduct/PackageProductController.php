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

        // $this->header['ax-request-by'] = Session::get('user')['email'];
        // $this->header['Authorization'] = 'Bearer '.Session::get('token');
        
        // $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/umroh/');
        $package_products = '';

        // remove array otherMenus
        unset($this->otherMenus[1]);

        return view('pages.packageProducts.umroh', [
            'package_products' => $package_products,
            'otherMenus' => $this->otherMenus
        ]);
    }

    public function umrohPlus()
    {
        return view('pages.packageProducts.umrohPlush',[

        ]);
    }

    public function wisataHalal()
    {
        return view('pages.packageProducts.wisataHalal', [

        ]);
    }

    public function diy()
    {
        return view('pages.packageProducts.diy');
    }

    public function show($id)
    {

        if ( false ) {
            return redirect()->back();
        }

        return view('pages.packageProducts.detailUmroh');
    }

}
