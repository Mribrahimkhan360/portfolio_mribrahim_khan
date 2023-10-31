<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Biography;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $banners,$biographies;

    public function index()
    {
        $this->banners           = Banner::where('status', 1)->orderBy('id', 'desc')->take(1)->get();
        $this->biographies       = Biography::where('status', 1)->orderBy('id', 'desc')->take(1)->get();
        return view('website.home.index', [
            'banners'             => $this->banners,
            'biographies'         => $this->biographies
        ]);
    }
}
