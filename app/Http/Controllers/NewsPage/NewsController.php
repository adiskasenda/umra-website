<?php

namespace App\Http\Controllers\NewsPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Uuid;

class NewsController extends Controller
{
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
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/news/pagination/0/10/id_blog/desc');
        $news = json_decode($response->getBody(), true);
        
        $banners = [
            [
                "url" => asset('assets-web/img/banner/banner-news.png')
            ],
        ];

        return view('pages.news.news', [
            'news' => $news['data']['content'],
            'banners' => $banners
        ]);
    }

    public function show($id)
    {
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }
        
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/news/'.$id);
        $new = json_decode($response->getBody(), true);
        
        return view('pages.news.detailNews', [
            'new' => $new['data']
        ]);
    }

}
