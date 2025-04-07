<!DOCTYPE html>
<html>
<head>
    <style>
        /* Base styling */
        body { 
            overflow-x: auto;
            width: 210mm; /* A4 width */
            font-family: Arial; 
            margin: 0;  /* Remove default margins */
            padding: 5mm;  /* Add safe print padding */
            font-size: 11px; /* Smaller font = more content fits */
        }
        
        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            page-break-inside: auto; /* Allow table to break across pages */
        }
        
        th, td {
            border: 1px solid #ddd;
            padding: 4.2px;
            text-align: left;
        }
        
        th {
            background-color: #4472C4;
            position: sticky;
            top: 0;
        }
        
        /* Force page breaks when needed */
        .page-break {
            page-break-after: always;
        }
        
        /* Shrink-to-fit for wide tables */
        @media print {
            body {
                margin: 0;
                padding: 0;
            }
            table {
                zoom: 100%; /* Scale down table if too wide */
            }
        }
    </style>
</head>
<body>
    @foreach($responden as $index => $repon)
        <!-- Add page break every 25 rows -->
        @if($index > 0 && $index % 25 == 0)
            <div style="page-break-after: always;"></div>
        @endif
        <h2 style="text-align: center; margin: 0 0 10px 0;">Responden Data Report</h2>
        <table id="myTable" class="display font-arvo bg-green-800 border-black border-2">
            @if($index % 25 == 0)
            <thead>
                <tr>
                    <th colspan="8">
                        
                    </th>
                    <th colspan="7">
                        Cognitive Deep State (Q1-Q7)
                    </th>
                    <th colspan="14">
                        Environmentalism (Q8-Q21)
                    </th>
                    <th colspan="2">
                        Precariat
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th>Email</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Usia</th>
                    <th>Bidang</th>
                    <th>Pekerjaan</th>
                    <th>Pendidikan Terakhir</th>
                    <th>{{ __('messages.admin_question_1') }}</th>
                    <th>{{ __('messages.admin_question_2') }}</th>
                    <th>{{ __('messages.admin_question_3') }}</th>
                    <th>{{ __('messages.admin_question_4') }}</th>
                    <th>{{ __('messages.admin_question_5') }}</th>
                    <th>{{ __('messages.admin_question_6') }}</th>
                    <th>{{ __('messages.admin_question_7') }}</th>
                    <th>{{ __('messages.admin_question_8') }}</th>
                    <th>{{ __('messages.admin_question_9') }}</th>
                    <th>{{ __('messages.admin_question_10') }}</th>
                    <th>{{ __('messages.admin_question_11') }}</th>
                    <th>{{ __('messages.admin_question_12') }}</th>
                    <th>{{ __('messages.admin_question_13') }}</th>
                    <th>{{ __('messages.admin_question_14') }}</th>
                    <th>{{ __('messages.admin_question_15') }}</th>
                    <th>{{ __('messages.admin_question_16') }}</th>
                    <th>{{ __('messages.admin_question_17') }}</th>
                    <th>{{ __('messages.admin_question_18') }}</th>
                    <th>{{ __('messages.admin_question_19') }}</th>
                    <th>{{ __('messages.admin_question_20') }}</th>
                    <th>{{ __('messages.admin_question_21') }}</th>
                    <th>Yes</th>
                    <th>No</th>
                </tr>
            </thead>
            @endif
            <tbody>
                <tr class="items-center">
                    <td>{{ $index+1 }}</td>
                    <td>{{ $repon->email_responden }}</td>
                    <td>{{ $repon->name_responden }}</td>
                    <td>{{ $repon->gender_responden }}</td>
                    <td>{{ $repon->age_responden }}</td>
                    <td>{{ $repon->affiliation_responden }}</td>
                    <td>{{ $repon->job_responden }}</td>
                    <td>{{ $repon->education_responden }}</td>
                    @foreach ($repon->DataFirst as $dataResponden)
                        <td>{{ $dataResponden->data_que_one}}</td>
                        <td>{{ $dataResponden->data_que_two}}</td>
                        <td>{{ $dataResponden->data_que_three}}</td>
                        <td>{{ $dataResponden->data_que_four}}</td>
                        <td>{{ $dataResponden->data_que_five}}</td>
                        <td>{{ $dataResponden->data_que_six}}</td>
                        <td>{{ $dataResponden->data_que_seven}}</td>
                        <td>{{ $dataResponden->data_que_eight}}</td>
                        <td>{{ $dataResponden->data_que_nine}}</td>
                        <td>{{ $dataResponden->data_que_ten}}</td>
                        <td>{{ $dataResponden->data_que_eleven}}</td>
                        <td>{{ $dataResponden->data_que_twelve}}</td>
                        <td>{{ $dataResponden->data_que_thirteen}}</td>
                        <td>{{ $dataResponden->data_que_fourteen}}</td>
                        <td>{{ $dataResponden->data_que_fifteen}}</td>
                        <td>{{ $dataResponden->data_que_sixteen}}</td>
                        <td>{{ $dataResponden->data_que_seventeen}}</td>
                        <td>{{ $dataResponden->data_que_eighteen}}</td>
                        <td>{{ $dataResponden->data_que_nineteen}}</td>
                        <td>{{ $dataResponden->data_que_twenty}}</td>
                        <td>{{ $dataResponden->data_que_twentyone}}</td>
                        @endforeach
                    @foreach ($repon->DataSecond as $secondData)
                        <td>
                        @if ($secondData->value_answer == 'yes')
                            {{ $secondData->nominal_answer }}
                        @else
                            -
                        @endif
                        </td>
                        <td>
                        @if ($secondData->value_answer == 'no')
                            {{ $secondData->nominal_answer }}
                        @else
                            -
                        @endif
                        </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    @endforeach
</body>