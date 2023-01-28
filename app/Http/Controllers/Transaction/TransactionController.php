<?php

namespace App\Http\Controllers\Transaction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class TransactionController extends Controller
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

    public function jamaah($id)
    {
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/'.$id);
        $package_product = json_decode($response->getBody(), true);
        if ( empty($package_product['data']) ) {
            return abort(404);
        }

        return view('pages.transaction.jamaah', [
            'package_product' => $package_product['data'],
        ]);
    }

    public function biodata($id)
    {
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/package_product/'.$id);
        $package_product = json_decode($response->getBody(), true);
        
        if ( empty($package_product['data']) ) {
            return abort(404);
        }

        return view('pages.transaction.biodata', [
            'package_product' => $package_product['data'],
        ]);
    }

    public function checkout()
    {
        return view('pages.transaction.checkout');
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
        
        return view('pages.transaction.detailTrasaction',[
            'package_product' => $package_product['data']
        ]);
    }

    public function storeCheckout()
    {
        return 'checkout';
    }
}
