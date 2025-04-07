<?php

namespace App\Exports;

use App\Models\Responden;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class RespondenViewExport implements FromView
{
    public function view(): View
    {
        // $responden = Responden::with('DataFirst', 'DataSecond')->get();
        $data = [
            'respondens' => Responden::with(['DataFirst', 'DataSecond'])->get()
        ];

        return view('pages.admin.export-file.table-excel', $data);
    }
}