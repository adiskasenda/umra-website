<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function index()
    {
        return view('pages.authentication.login');
    }

    public function login()
    {
        return ;
    }

    public function logout()
    {
        return redirect()->back();
    }

}
