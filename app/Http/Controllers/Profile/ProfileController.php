<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class ProfileController extends Controller
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

    public function profile()
    {
        return view('pages.profile.profile');
    }

    public function updateProfile(Request $request)
    {
        $body = [
            "title" => "Bapak",
            "firstname" => "Hanif",
            "lastname" => "Al Baaits",
            "address" => "Bekasi, Pondok Ungu",
            "nation" => "Indonesia",
            "birthday" => "2025-11-08",
            "gender" => 1,
            "no_nik" => "3275030506960033",
            "passport_expired" => "",
            "passport_no" => "",
            "url_photo" => "",
        ];

        $this->header['ax-request-by'] = Session::get('user')['email'];
        $this->header['Authorization'] = 'Bearer '.Session::get('token');

        $response = Http::withHeaders($this->header)->put($this->url.'/core-umra/customer/'.Session::get('user')['user_id'], $body);
        $customer = json_decode($response->getBody(), true);

        return redirect()->back()
                        ->withSuccess('Data Customer Berhasil Di Update');
    }

    public function profilePassword()
    {
        return view('pages.profile.profilePassword');
    }

    public function updatePassword()
    {
        return ;
    }

    public function profilePIN()
    {
        return view('pages.profile.profilePIN');
    }

    public function updatePIN()
    {
        return ;
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
        return view('pages.profile.listTransaction', [
            "histories" => $histories
        ]);
    }


}

