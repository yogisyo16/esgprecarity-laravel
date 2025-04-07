<!DOCTYPE html>
<html>
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="3">
                    
                </th>
                <th class="bg-blue-400" colspan="7">
                    Cognitive Deep State (Q1-Q7)
                </th>
                <th class="bg-blue-400" colspan="14">
                    Environmentalism (Q8-Q21)
                </th>
                <th class="bg-blue-400" colspan="2">
                    Precariat
                </th>
            </tr>
            <tr>
                <th></th>
                <th>{{ __('messages.email') }}</th>
                <th>{{ __('messages.name') }}</th>
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
        <tbody>
            @foreach ($respondens as $no => $repon)
                <tr class="items-center">
                    <td>{{ $no+1 }}</td>
                    <td>{{ $repon->email_responden }}</td>
                    <td>{{ $repon->name_responden }}</td>
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
            @endforeach
        </tbody>
    </table>
</body>
</html>