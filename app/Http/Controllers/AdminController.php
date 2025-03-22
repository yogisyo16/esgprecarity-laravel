<?php

namespace App\Http\Controllers;

use App\Models\DataFirst;
use App\Models\DataSecond;
use App\Models\DataThird;
use App\Models\Responden;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboardShow(User $user, Responden $responden, DataFirst $dataFirst, DataSecond $dataSecond, DataThird $dataThird)
    {
        $user = User::get();
    }
}
