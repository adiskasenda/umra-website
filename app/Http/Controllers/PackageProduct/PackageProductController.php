<?php

namespace App\Http\Controllers\PackageProduct;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageProductController extends Controller
{

    public function umroh()
    {
        $package = [
           [ 
                'icon' => '',
                'title' => 'Paket Umroh',
                'description' => 'Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.',
                'url' => ''
           ],
           [ 
                'icon' => '',
                'title' => 'Wisata Halal',
                'description' => 'Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.',
                'url' => ''
            ],
            [ 
                'icon' => '',
                'title' => 'Paket Umroh Plus+',
                'description' => 'Perjalanan umroh lengkap dengan paket hotel berbintang, penerbangan & VISA.',
                'url' => ''
           ],
        ];

        return view('pages.packageProducts.umroh');
    }

    public function umrohPlus()
    {
        return view('pages.packageProducts.umrohPlush');
    }

    public function wisataHalal()
    {
        return view('pages.packageProducts.wisataHalal');
    }

    public function diy()
    {
        return view('pages.packageProducts.diy');
    }

    public function show()
    {
        return view('pages.packageProducts.detailUmroh');
    }

}
