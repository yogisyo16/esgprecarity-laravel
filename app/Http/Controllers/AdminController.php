<?php

namespace App\Http\Controllers;

use App\Models\DataFirst;
use App\Models\DataSecond;
use App\Models\Responden;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminLoginShow()
    {
        return view('pages.admin.admin-login');
    }

    public function adminLoginAuth(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('adminDashboardShow'));
        }

        return back()->withErrors([
            'name' => 'The provided credentials do not match any records.',
        ]);
    }
    
    public function adminLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('adminLoginShow');
    }

    public function adminDashboardShow(User $user, Responden $responden, DataFirst $dataFirst, DataSecond $dataSecond)
    {
        $responden = Responden::all();
        $dataFirst = DataFirst::get()->groupBy('responden_id');
        $dataSecond = DataSecond::all();

        dump($dataFirst);

        return view('pages.admin.admin-dashboard', compact('user', 'responden', 'dataFirst', 'dataSecond'));
    }
}
