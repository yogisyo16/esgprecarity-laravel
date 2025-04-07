<?php

namespace App\Http\Controllers;

use App\Exports\RespondenExport;
use App\Exports\RespondenViewExport;
use App\Models\DataFirst;
use App\Models\DataSecond;
use App\Models\Responden;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

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
        $responden = Responden::with('DataFirst', 'DataSecond')->get();
        $dataFirst = DataFirst::get();
        $dataSecond = DataSecond::get();

        $countResponden = Responden::count();

        $countSecondAnswerNo = DataSecond::where('value_answer', 'no')->count();
        $countSecondAnswerYes = DataSecond::where('value_answer', 'yes')->count();

        //this for chart
        $chartData = Responden::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();
        
        $chartPieAnswerData = DataFirst::selectRaw('responden_id, COUNT(*) as count')
            ->groupBy('responden_id')
            ->get();

        return view('pages.admin.admin-dashboard', compact('user', 'responden', 'dataFirst', 'dataSecond', 'countResponden', 'chartData', 'countSecondAnswerYes', 'countSecondAnswerNo'));
    }

    public function adminShowTable(Responden $responden, DataFirst $dataFirst, DataSecond $dataSecond)
    {
        $responden = Responden::with('DataFirst', 'DataSecond')->get();
        $dataFirst = DataFirst::get();
        $dataSecond = DataSecond::get();

        return view('pages.admin.admin-table', compact('responden', 'dataFirst', 'dataSecond'));
    }

    public function exportExcel()
    {
        return Excel::download(new RespondenExport, 'responden_data.xlsx');
    }

    public function exportPdf()
    {
        $responden = Responden::with(['DataFirst', 'DataSecond'])->get();
        $pdf = PDF::loadView('pages.admin.export-file.table-pdf', compact('responden'))
            ->setPaper('a4', 'landscape')
            ->setOption([
                'isPhpEnabled' => true,
                'isHtml5ParserEnabled' => true,
                'isRemoteEnabled' => true,
                'margin-top' => 0,
                'margin-bottom' => 0,
                'margin-left' => 0,
                'margin-right' => 0
            ]);

        return $pdf->download('responden_data.pdf');
    }
}
