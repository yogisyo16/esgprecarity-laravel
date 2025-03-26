<?php

namespace App\Http\Controllers;

use App\Models\Responden;
use Illuminate\Http\Request;

class RespondenController extends Controller
{
    public function respondenShowData()
    {
        session()->forget('formData');
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

    public function showRespondenDataCollection(Request $request)
    {
        return view('pages.responden.responden-data', ['data' => $request->session()->get('formData')]);
    }

    public function getRespondenDataCollection(Request $request)
    {
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
        
        $id_responden = Responden::get()->last()->id;

        $existingData = $request->session()->get('formData', []);

        $mergedData = array_merge(
            $existingData,
            ['responden_id' => $id_responden]
        );

        $request->session()->put('formData', $mergedData);
        
        return redirect()->route('showQuestionnaireInformation');
    }

    public function showQuestionnaireInformation(Request $request)
    {
        return view('pages.responden.responden-questionnaire-information');
    }

    public function showQuestionPage1(Request $request)
    {
        $formData = $request->session()->get('formData');
        return view('pages.responden.responden-questionnaire-page-1', compact('formData'));
    }

    public function showQuestionPage2(Request $request)
    {
        $formData = $request->session()->get('formData');
        dump($formData);
        return view('pages.responden.responden-questionnaire-page-2', compact('formData'));
    }

    public function savedQuestionPage1(Request $request)
    {
        $validated = $request->validate([
            'data_que_one' => 'required',
            'data_que_two' => 'required',
            'data_que_three'=> 'required',
            'data_que_four'=> 'required',
            'data_que_five'=> 'required',
            'data_que_six' => 'required',
            'data_que_seven' => 'required',
        ]);

        $formData = array_merge(
            $request->session()->get('formData', []),
            $validated
        );

        $request->session()->put('formData', $formData);

        return redirect()->route('showQuestionPage2');
    }
}
