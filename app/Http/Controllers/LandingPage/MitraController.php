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
                "link" => "https://www.google.co.id/maps/place/National+Monument/@-6.1996895,106.8463079,14z/data=!4m5!3m4!1s0x2e69f5d2e764b12d:0x3d2ad6e1e0e9bcc8!8m2!3d-6.1753924!4d106.8271528",
            ],
            [
                "name" => "PT. Berkah Umroh sentosa",
                "address" => "Jl. Sudirman Gang II, Kec. Jajaringan, Kab. Brebes, Indonesia 2930",
                "link" => "https://www.google.co.id/maps/place/National+Monument/@-6.1996895,106.8463079,14z/data=!4m5!3m4!1s0x2e69f5d2e764b12d:0x3d2ad6e1e0e9bcc8!8m2!3d-6.1753924!4d106.8271528",
            ],
            [
                "name" => "Pt. Berkah Umroh sentosa",
                "address" => "Jl. Sudirman Gang II, Kec. Jajaringan, Kab. Brebes, Indonesia 2930",
                "link" => "https://www.google.co.id/maps/place/National+Monument/@-6.1996895,106.8463079,14z/data=!4m5!3m4!1s0x2e69f5d2e764b12d:0x3d2ad6e1e0e9bcc8!8m2!3d-6.1753924!4d106.8271528",
            ]
        ];

        return view('pages.landingPage.locationMe', [
            'mitras' => $mitras
        ]);
    }
}
