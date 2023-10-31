<?php

namespace App\Http\Controllers;

use App\Models\Biography;
use Illuminate\Http\Request;

class BiographyController extends Controller
{
    //
    private $biography, $biographies;

    public function index()
    {
        return view('admin.biography.index');
    }

    public function create(Request $request)
    {
        Biography::newBiography($request);
        return redirect('/biography/add')->with('message', 'Biography info create successfully.');
    }

    public function manage()
    {
        $this->biographies = Biography::all();
        return view('admin.biography.manage', ['biographies' => $this->biographies]);
    }

    public function edit($id)
    {
        $this->biography = Biography::find($id);
        return view('admin.biography.edit', ['biography' => $this->biography]);
    }

    public function update(Request $request, $id)
    {
        Biography::updateBiography($request, $id);
        return redirect('/biography/manage')->with('message', 'Biography info update successfully.');
    }

    public function delete($id)
    {
        Biography::deleteBiography($id);
        return redirect('/biography/manage')->with('message', 'Biography info delete successfully.');
    }
}
