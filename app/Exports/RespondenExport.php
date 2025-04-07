<?php

namespace App\Exports;

use App\Models\Responden;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;

class RespondenExport implements FromCollection, WithHeadings, WithMapping, WithEvents, WithCustomStartCell
{
    public function collection()
    {
        return Responden::with(['DataFirst', 'DataSecond'])->get();
    }

    public function map($responden): array
    {
        $dataFirst = $responden->DataFirst->first();
        $dataSecond = $responden->DataSecond->first();

        return [
            $responden->id,
            $responden->email_responden,
            $responden->name_responden,
            $responden->gender_responden,
            $responden->age_responden,
            $responden->affiliation_responden,
            $responden->job_responden,
            $responden->education_responden,
            $dataFirst->data_que_one ?? 'N/A',
            $dataFirst->data_que_two ?? 'N/A',
            $dataFirst->data_que_three ?? 'N/A',
            $dataFirst->data_que_four ?? 'N/A',
            $dataFirst->data_que_five ?? 'N/A',
            $dataFirst->data_que_six ?? 'N/A',
            $dataFirst->data_que_seven ?? 'N/A',
            $dataFirst->data_que_eight ?? 'N/A',
            $dataFirst->data_que_nine ?? 'N/A',
            $dataFirst->data_que_ten ?? 'N/A',
            $dataFirst->data_que_eleven ?? 'N/A',
            $dataFirst->data_que_twelve ?? 'N/A',
            $dataFirst->data_que_thirteen ?? 'N/A',
            $dataFirst->data_que_fourteen ?? 'N/A',
            $dataFirst->data_que_fifteen ?? 'N/A',
            $dataFirst->data_que_sixteen ?? 'N/A',
            $dataFirst->data_que_seventeen ?? 'N/A',
            $dataFirst->data_que_eighteen ?? 'N/A',
            $dataFirst->data_que_nineteen ?? 'N/A',
            $dataFirst->data_que_twenty ?? 'N/A',
            $dataFirst->data_que_twentyone ?? 'N/A',
            $dataSecond->value_answer == 'yes' ? $dataSecond->nominal_answer : '-',
            $dataSecond->value_answer == 'no' ? $dataSecond->nominal_answer : '-',
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Email',
            'Nama',
            'Jenis Kelamin',
            'Usia',
            'Bidang',
            'Pekerjaan',
            'Pendidikan Terakhir',
            'Q1',
            'Q2',
            'Q3',
            'Q4',
            'Q5',
            'Q6',
            'Q7',
            'Q8',
            'Q9',
            'Q10',
            'Q11',
            'Q12',
            'Q13',
            'Q14',
            'Q15',
            'Q16',
            'Q17',
            'Q18',
            'Q19',
            'Q20',
            'Q21',
            'Yes',
            'No'
        ];
    }

    public function startCell(): string
    {
        return 'A2'; // Data starts below headers
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $columns = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'AA', 'AB', 'AC', 'AD', 'AE'];
                // Auto-size columns
                foreach ($columns as $col) {
                    $event->sheet->getColumnDimension($col)->setAutoSize(true);
                }

                // Bold headers
                $event->sheet->getStyle('A1:AE1')->applyFromArray([
                    'font' => ['bold' => true],
                    'fill' => [
                        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                        'color' => ['rgb' => 'D9E1F2']
                    ]
                ]);

                $event->sheet->mergeCells('I1:O1')->setCellValue('I1', 'Cognitive Deep State (Q1-Q7)');
                $event->sheet->mergeCells('P1:AC1')->setCellValue('P1', 'Environmentalism (Q8-Q21)');
                $event->sheet->mergeCells('AD1:AE1')->setCellValue('AD1', 'Precariat');

                // Style section headers
                $event->sheet->getStyle('I1:AC1')->applyFromArray(
                    [
                        'font' => ['color' => ['rgb' => 'FFFFFF'], 'bold' => true],
                        'fill' => ['fillType' => 'solid', 'color' => ['rgb' => '4472C4']]
                    ]
                );
            }
        ];
    }
}