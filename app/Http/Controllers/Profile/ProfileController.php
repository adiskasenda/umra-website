<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
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
}
