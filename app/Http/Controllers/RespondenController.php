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

        $responden = Responden::create($validated);
        
        $id_responden = $responden->id;

        DataFirst::create([
            'responden_id' => $id_responden
        ]);

        DataSecond::create([
            'responden_id' => $id_responden
        ]);

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

    public function savedQuestionBackPage1(Request $request)
    {
        $formData = array_merge(
            $request->session()->get('formData', []),
            $request->all()
        );

        $request->session()->put('formData', $formData);

        return redirect()->route('showQuestionPage1');
    }

    public function savedQuestionPage2(Request $request)
    {
        $action = $request->input('button_action');

        if($action == 'back') {

            $formData = array_merge(
                $request->session()->get('formData', []),
                $request->all()
            );

            $request->session()->put('formData', $formData);

            return redirect()->route('showQuestionPage1');

        } elseif ($action == 'next') {
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


            $id_responden = $request->session()->get('formData.responden_id');

            DataFirst::where('responden_id', $id_responden)
                ->update([
                    'data_que_one' => $formData['data_que_one'],
                    'data_que_two' => $formData['data_que_two'],
                    'data_que_three' => $formData['data_que_three'],
                    'data_que_four' => $formData['data_que_four'],
                    'data_que_five' => $formData['data_que_five'],
                    'data_que_six' => $formData['data_que_six'],
                    'data_que_seven' => $formData['data_que_seven'],
                    'data_que_eight' => $formData['data_que_eight'],
                    'data_que_nine' => $formData['data_que_nine'],
                    'data_que_ten' => $formData['data_que_ten'],
                    'data_que_eleven' => $formData['data_que_eleven'],
                    'data_que_twelve' => $formData['data_que_twelve'],
                    'data_que_thirteen' => $formData['data_que_thirteen'],
                    'data_que_fourteen' => $formData['data_que_fourteen'],
                    'data_que_fifteen' => $formData['data_que_fifteen'],
                    'data_que_sixteen' => $formData['data_que_sixteen'],
                    'data_que_seventeen' => $formData['data_que_seventeen'],
                    'data_que_eighteen' => $formData['data_que_eighteen'],
                    'data_que_nineteen' => $formData['data_que_nineteen'],
                    'data_que_twenty' => $formData['data_que_twenty'],
                    'data_que_twentyone' => $formData['data_que_twentyone'],
                ]);

            // dd([
            //     $look_data,
            //     'formData' => $formData
            // ]);

            return redirect()->route('page7ShowData');
        }
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
        
        DataSecond::where('responden_id', $responden_id)
            ->update(
                [
                    'nominal_answer' => $dataToSave['nominal_answer'],
                    'value_answer' => $dataToSave['value_answer']
                ]
            );

        return redirect()->route('pageSecondQuestion');
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

        DataSecond::where('responden_id', $responden_id)
            ->update(
                [
                    'nominal_answer' => $dataToSave['nominal_answer'],
                    'value_answer' => $dataToSave['value_answer']
                ]
            );

        return redirect()->route('pageSecondQuestion');
    }

    public function pageSecondQuestion()
    {
        return view('pages.responden.responden-act-question-second');
    }

    public function pageNoInvestmentDataSecond()
    {
        return view('pages.responden.responden-last-question-no-second');
    }

    public function saveNoInvestmentDataSecond(Request $request)
    {
        $responden_id = $request->session()->get('formData')["responden_id"];

        // Validate the request
        $validated = $request->validate([
            'nominal_answer_second' => 'required',
        ]);

        $dataToSave = array_merge(
            $validated, // validated input data first
            [
                'responden_id' => $responden_id,
                'value_answer_second' => 'no'
            ]
        );

        DataSecond::where('responden_id', $responden_id)
            ->update(
                [
                    'nominal_answer_second' => $dataToSave['nominal_answer_second'],
                    'value_answer_second' => $dataToSave['value_answer_second']
                ]
            );

        return redirect()->route('pageEndQuestionnaire');
    }

    public function pageYesInvestmentDataSecond()
    {
        return view('pages.responden.responden-last-question-yes-second');
    }

    public function saveYesInvestmentDataSecond(Request $request)
    {
        $responden_id = $request->session()->get('formData')["responden_id"];

        // Validate the request
        $validated = $request->validate([
            'nominal_answer_second' => 'required',
        ]);

        $dataToSave = array_merge(
            $validated, // validated input data first
            [
                'responden_id' => $responden_id,
                'value_answer_second' => 'yes'
            ]
        );

        DataSecond::where('responden_id', $responden_id)
            ->update(
                [
                    'nominal_answer_second' => $dataToSave['nominal_answer_second'],
                    'value_answer_second' => $dataToSave['value_answer_second']
                ]
            );

        return redirect()->route('pageEndQuestionnaire');
    }

    public function pageEndQuestionnaire()
    {
        session()->forget('formData');
        return view('pages.responden.responden-end-questionnaire');
    }
}