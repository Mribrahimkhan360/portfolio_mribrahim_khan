<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.banner.index');
    }
    public function manage()
    {
        return view('admin.banner.manage');
    }
}
