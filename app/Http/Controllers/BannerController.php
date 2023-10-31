<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //
    private $banner, $banners;

    public function index()
    {
        return view('admin.banner.index');
    }

    public function create(Request $request)
    {
        Banner::newBanner($request);
        return redirect('/banner/add')->with('message', 'Banner info create successfully.');
    }

    public function manage()
    {
        $this->banners = Banner::all();
        return view('admin.banner.manage', ['banners' => $this->banners]);
    }

    public function edit($id)
    {
        $this->banner = Banner::find($id);
        return view('admin.banner.edit', ['banner' => $this->banner]);
    }

    public function update(Request $request, $id)
    {
        Banner::updateBanner($request, $id);
        return redirect('/banner/manage')->with('message', 'Banner info update successfully.');
    }

    public function delete($id)
    {
        Banner::deleteBanner($id);
        return redirect('/banner/manage')->with('message', 'Banner info delete successfully.');
    }
}
