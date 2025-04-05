<?php

namespace App\Http\Controllers;

use App\Models\DataFirst;
use App\Models\DataSecond;
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
        // dump($formData);
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

    public function savedQuestionPage2(Request $request)
    {
        $formData = $request->session()->get('formData');

        $validated = $request->validate([
            'data_que_eight' => 'required',
            'data_que_nine' => 'required',
            'data_que_ten' => 'required',
            'data_que_eleven' => 'required',
            'data_que_twelve' => 'required',
            'data_que_thirteen' => 'required',
            'data_que_fourteen' => 'required',
            'data_que_fifteen' => 'required',
            'data_que_sixteen' => 'required',
            'data_que_seventeen' => 'required',
            'data_que_eighteen' => 'required',
            'data_que_nineteen' => 'required',
            'data_que_twenty' => 'required',
            'data_que_twentyone' => 'required',
        ]);

        $formData = array_merge(
            $request->session()->get('formData', []),
            $validated
        );

        $request->session()->put('formData', $formData);

        $look_data = DataFirst::create($formData);

        // dd([
        //     $look_data,
        //     'formData' => $formData
        // ]);

        return redirect()->route('page7ShowData');
    }

    public function page7ShowData()
    {
        // dump(session()->get('formData'));
        return view('pages.responden.responden-page7');
    }

    public function page8ShowData()
    {
        return view('pages.responden.responden-page8');
    }

    public function page9ShowData()
    {
        return view('pages.responden.responden-page9');
    }

    public function page10ShowData()
    {
        return view('pages.responden.responden-image-1');
    }

    public function page11ShowData()
    {
        return view('pages.responden.responden-image-2');
    }

    public function pageActData()
    {
        return view('pages.responden.responden-act-question');
    }

    public function pageNoInvestmentData()
    {
        // dump(session()->get('formData'));
        return view('pages.responden.responden-last-question-no');
    }

    public function saveNoInvestmentData(Request $request)
    {

        $responden_id = $request->session()->get('formData')["responden_id"];

        // Validate the request
        $validated = $request->validate([
            'nominal_answer' => 'required',
        ]);

        // Merge all data including manual fields
        $dataToSave = array_merge(
            $validated, // validated input data first
            [
                'responden_id' => $responden_id,
                'value_answer' => 'no'
            ]
        );
        
        DataSecond::create($dataToSave);

        return redirect()->route('respondenShowData');
    }

    public function pageYesInvestmentData()
    {
        return view('pages.responden.responden-last-question-yes');
    }

    public function saveYesInvestmentData(Request $request)
    {
        $responden_id = $request->session()->get('formData')["responden_id"];

        // Validate the request
        $validated = $request->validate([
            'nominal_answer' => 'required',
        ]);

        // Merge all data including manual fields
        $dataToSave = array_merge(
            $validated, // validated input data first
            [
                'responden_id' => $responden_id,
                'value_answer' => 'yes'
            ]
        );

        DataSecond::create($dataToSave);

        return redirect()->route('respondenShowData');
    }

    public function pageEndQuestionnaire()
    {
        session()->forget('formData');
        return view('pages.responden.responden-end-questionnaire');
    }
}