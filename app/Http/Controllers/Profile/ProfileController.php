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

    public function index()
    {
        return view('pages.profile.profile');
    }

    public function update(Request $request)
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

    public function updatePassword()
    {
        return ;
    }

    public function listTransaction()
    {
        return ;
    }

   
}
