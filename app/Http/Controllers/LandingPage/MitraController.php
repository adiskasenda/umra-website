<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        // Mitra
        $mitras = [
            [
                "name" => "PT. Berkah Umroh sentosa",
                "address" => "Jl. Sudirman Gang II, Kec. Jajaringan, Kab. Brebes, Indonesia 2930",
            ],
            [
                "name" => "PT. Berkah Umroh sentosa",
                "address" => "Jl. Sudirman Gang II, Kec. Jajaringan, Kab. Brebes, Indonesia 2930",
            ],
            [
                "name" => "Pt. Berkah Umroh sentosa",
                "address" => "Jl. Sudirman Gang II, Kec. Jajaringan, Kab. Brebes, Indonesia 2930",
            ]
        ];

        return view('pages.landingPage.locationMe', [
            'mitras' => $mitras
        ]);
    }
}
