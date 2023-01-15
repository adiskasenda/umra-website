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

    public function jamaah()
    {
        return view('pages.transaction.jamaah');
    }

    public function biodata()
    {
        return view('pages.transaction.biodata');
    }

    public function checkout()
    {
        return view('pages.transaction.checkout');
    }

    public function show()
    {
        return view('pages.transaction.detailTrasaction');
    }

    public function storeCheckout()
    {
        return ;
    }
}
