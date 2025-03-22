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
        //show data to be collected
    }

    public function getRespondenDataCollection(Request $request)
    {
        //get data to be collected
    }
}
