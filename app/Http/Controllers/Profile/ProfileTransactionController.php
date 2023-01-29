<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class ProfileTransactionController extends Controller
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

    public function listTransaction()
    {
        // Riwayat Transaksi
        $histories = [
            [
                "type" => "Umroh Reguler",
                "service" => "Umroh Hemat Bonus Tour Thoif",
                "departure" => "14 Maret 2023",
                "duration" => "9",
                "payment_type" => "Cicilan 2x",
                "payment_status" => "Belum Lunas",
                "nominal" => "Rp.40.500.000",
                "jamaah_count" => "3",
                "duedate_payment" => "14 Jan 2024 18:31",
            ],
            [
                "type" => "Umroh Reguler",
                "service" => "Umroh Hemat Bonus Tour Thoif",
                "departure" => "14 Maret 2023",
                "duration" => "9",
                "payment_type" => "Cash",
                "payment_status" => "Lunas",
                "nominal" => "Rp.40.500.000",
                "jamaah_count" => "3",
                "duedate_payment" => "14 Jan 2024 18:31",
            ],
            [
                "type" => "Umroh Reguler",
                "service" => "Umroh Hemat Bonus Tour Thoif",
                "departure" => "14 Maret 2023",
                "duration" => "9",
                "payment_type" => "Cicilan 2x",
                "payment_status" => "Dibatalkan",
                "nominal" => "Rp.40.500.000",
                "jamaah_count" => "3",
                "duedate_payment" => "14 Jan 2024 18:31",
            ]
        ];

        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->get($this->url.'/order_customer/customer/'. Session::get('user')['user_id']);
        $order_customer = json_decode($response->getBody(), true);
        
        return view('pages.profile.listTransaction', [
            "histories" => $histories
        ]);
    }
}
