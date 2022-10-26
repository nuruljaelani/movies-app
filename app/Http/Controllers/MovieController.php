<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MovieController extends Controller
{
    public $api_url = 'https://api.themoviedb.org/3/movie/';
    public $api_key = '288cd87cb3c9d1558eeb0bd21567067e';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get($this->api_url . 'popular', [
            'api_key' => $this->api_key
        ]);
        $data = $response->json();
        $img_path = 'https://image.tmdb.org/t/p/w500';
        // dd($data['results']);
        return view('pages.index', compact('data', 'img_path'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = Http::get($this->api_url . $id, [
            'api_key' => $this->api_key
        ]);
        $data = $response->json();
        $img_path = 'https://image.tmdb.org/t/p/original';
        return view('pages.detail', compact('data', 'img_path'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function latestMovie()
    {
        $response = Http::get($this->api_url . 'latest', [
            'api_key' => $this->api_key
        ]);
        $data = $response->json();
        $img_path = 'https://image.tmdb.org/t/p/original';
        // dd($data);
        return view('pages.latest', compact('data', 'img_path'));
    }

    public function category($category)
    {
        $response = Http::get($this->api_url . $category, [
            'api_key' => $this->api_key
        ]);
        $data = $response->json();
        $img_path = 'https://image.tmdb.org/t/p/original';
        $str = str_replace("_"," ", $category);
        $categoryName = ucwords($str);
        // dd($data);
        return view('pages.category', compact('data', 'img_path', 'categoryName'));
    }
}
