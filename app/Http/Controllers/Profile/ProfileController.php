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

    public function update()
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
        
        return redirect()->back();
    }
}
