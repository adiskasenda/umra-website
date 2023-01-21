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

    public function index(Request $request)
    {
        if ( !empty(Session::get('user')) ) {
            $this->header['ax-request-by'] = Session::get('user')['email'];
            $this->header['Authorization'] = 'Bearer '.Session::get('token');
        } else {
            $this->header['ax-request-by'] = '';
        }

        // News Banner
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/news/pagination/0/2/id_blog/asc');
        $news_banners = json_decode($response->getBody(), true);

        if ( $request->search ) {
            $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/news/searching?name='.$request->search);
            $news = json_decode($response->getBody(), true);
            $news = $news['data'];
        } else {
            $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/news/pagination/0/8/id_blog/desc');
            $news = json_decode($response->getBody(), true);
            $news = $news['data']['content'];
        }

        return view('pages.news.news', [
            'news_banners' => $news_banners['data']['content'],
            'news' => $news,
            'search' => $request->search
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
        
        // Artikel Lain
        $response = Http::withHeaders($this->header)->get($this->url.'/core-umra/news/pagination/0/2/id_blog/desc');
        $other_news = json_decode($response->getBody(), true);

        return view('pages.news.detailNews', [
            'new' => $new['data'],
            'other_news' => $other_news['data']['content']
        ]);
    }

}
