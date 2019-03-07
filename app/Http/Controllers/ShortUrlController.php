<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShortUrlRequest;
use App\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ShortUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $short = ShortUrl::orderBy('counter', 'DESC')->take(100)->get();

        return response()->json([
            'urls' => $short,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ShortUrlRequest $request)
    {
        $shortUrl = new ShortUrl();
        $shortUrl->url = $request->get('url');
        $shortUrl->generateShortUrl();
        $shortUrl->save();
        return response()->json($shortUrl, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {

        $urlTwo = ShortUrl::whereCode($code)->first();
        if ($urlTwo) {
            $urlTwo->increment('counter');
            return redirect()->away($urlTwo->url);
        }

        return response()->json([
            'short_url' => 'not found'
        ]);

    }

}
