<?php

namespace App\Http\Controllers;

use App\Models\Responden;
use Illuminate\Http\Request;

class RespondenController extends Controller
{
    public function respondenShowData()
    {
        return view('pages.responden.responden-landing');
    }

    public function page1ShowData()
    {
        return view('pages.responden.responden-page1');
    }

    public function page2ShowData()
    {
        return view('pages.responden.responden-page2');
    }

    public function noShowData()
    {
        return view('pages.responden.responden-no');
    }

    public function showRespondenDataCollection()
    {
        return view('pages.responden.responden-data');
    }

    public function getRespondenDataCollection(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'email_responden' => 'required|email',
            'name_responden' => 'required',
            'gender_responden' => 'required|in:laki-laki,perempuan',
            'age_responden' => 'required',
            'affiliation_responden' => 'required',
            'job_responden' => 'required',
            'education_responden' => 'required',
        ]);

        Responden::create($validated);

        return redirect()->route('respondenShowData');
    }

    public function showQuestionnaireInformation()
    {
        return view('pages.responden.responden-questionnaire-information');
    }
}
