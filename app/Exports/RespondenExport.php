<?php

namespace App\Exports;

use App\Models\Responden;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;

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
            // Answer 1
            $dataSecond->value_answer == 'yes' ? $dataSecond->nominal_answer : '-',
            $dataSecond->value_answer == 'no' ? $dataSecond->nominal_answer : '-',
            // Answer 2 (Added)
            $dataSecond->value_answer_second == 'yes' ? $dataSecond->nominal_answer_second : '-',
            $dataSecond->value_answer_second == 'no' ? $dataSecond->nominal_answer_second : '-'
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
            'Q1', 'Q2', 'Q3', 'Q4', 'Q5', 'Q6', 'Q7',
            'Q8', 'Q9', 'Q10', 'Q11', 'Q12', 'Q13', 'Q14', 
            'Q15', 'Q16', 'Q17', 'Q18', 'Q19', 'Q20', 'Q21',
            'Yes (1)', // Renamed for clarity
            'No (1)',
            'Yes (2)', // Added
            'No (2)'   // Added
        ];
    }

    public function startCell(): string
    {
        return 'A2'; // Data starts below the merged headers
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                // 1. Define the range of columns (A to AG)
                $columns = range('A', 'Z');
                foreach(range('A', 'G') as $col) { 
                    $columns[] = 'A' . $col; 
                } // This generates AA to AG manually if needed, or just let autosize handle it by range.
                
                // Simpler AutoSize method for the whole range
                foreach (range('A', 'Z') as $col) {
                    $event->sheet->getColumnDimension($col)->setAutoSize(true);
                }
                foreach (['AA', 'AB', 'AC', 'AD', 'AE', 'AF', 'AG'] as $col) {
                     $event->sheet->getColumnDimension($col)->setAutoSize(true);
                }

                // 2. Set the top-level merged Headers
                // Q1-Q7 (I to O)
                $event->sheet->mergeCells('I1:O1')->setCellValue('I1', 'Cognitive Deep State (Q1-Q7)');
                
                // Q8-Q21 (P to AC)
                $event->sheet->mergeCells('P1:AC1')->setCellValue('P1', 'Environmentalism (Q8-Q21)');
                
                // Precariat (AD to AG) - NOW COVERS 4 COLUMNS
                $event->sheet->mergeCells('AD1:AG1')->setCellValue('AD1', 'Precariat');

                // 3. Styling
                // Style for the top headers (Blue background)
                $event->sheet->getStyle('I1:AG1')->applyFromArray([
                    'font' => [
                        'color' => ['rgb' => 'FFFFFF'], 
                        'bold' => true
                    ],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID, 
                        'color' => ['rgb' => '4472C4']
                    ],
                    'alignment' => [
                        'horizontal' => Alignment::HORIZONTAL_CENTER
                    ]
                ]);

                // Style for the sub-headers (Row 2, Grey background)
                $event->sheet->getStyle('A2:AG2')->applyFromArray([
                    'font' => ['bold' => true],
                    'fill' => [
                        'fillType' => Fill::FILL_SOLID,
                        'color' => ['rgb' => 'D9E1F2']
                    ]
                ]);
            }
        ];
    }
}