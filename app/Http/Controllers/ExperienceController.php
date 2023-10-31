<?php

namespace App\Http\Controllers;

use App\Models\Biography;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    //
    private $experience, $experiences;

    public function index()
    {
        return view('admin.experience.index');
    }

    public function create(Request $request)
    {
        Experience::newExperience($request);
        return redirect('/experience/add')->with('message', 'Experience info create successfully.');
    }

    public function manage()
    {
        $this->experiences = Experience::all();
        return view('admin.experience.manage', ['experiences' => $this->experiences]);
    }

    public function edit($id)
    {
        $this->experience = Experience::find($id);
        return view('admin.experience.edit', ['biography' => $this->experience]);
    }

    public function update(Request $request, $id)
    {
        Experience::updateExperience($request, $id);
        return redirect('/experience/manage')->with('message', 'Experience info update successfully.');
    }

    public function delete($id)
    {
        Biography::deleteExperience($id);
        return redirect('/experience/manage')->with('message', 'Experience info delete successfully.');
    }
}
