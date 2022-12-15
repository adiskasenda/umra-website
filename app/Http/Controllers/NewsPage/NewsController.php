<?php

namespace App\Http\Controllers\NewsPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        return view('pages.news.news');
    }

    public function show()
    {
        return view('pages.news.detailNews');
    }

}
