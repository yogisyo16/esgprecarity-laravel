<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th colspan="3"></th>
                <th colspan="7" style="background-color: #4472C4; color: #ffffff;">Cognitive Deep State (Q1-Q7)</th>
                <th colspan="14" style="background-color: #4472C4; color: #ffffff;">Environmentalism (Q8-Q21)</th>
                <th colspan="4" style="background-color: #4472C4; color: #ffffff;">Precariat</th>
            </tr>
            <tr>
                <th>No</th>
                <th>{{ __('messages.email') }}</th>
                <th>{{ __('messages.name') }}</th>
                
                <th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th><th>Q5</th><th>Q6</th><th>Q7</th>
                <th>Q8</th><th>Q9</th><th>Q10</th><th>Q11</th><th>Q12</th><th>Q13</th><th>Q14</th>
                <th>Q15</th><th>Q16</th><th>Q17</th><th>Q18</th><th>Q19</th><th>Q20</th><th>Q21</th>

                <th>Yes (1)</th>
                <th>No (1)</th>
                <th>Yes (2)</th>
                <th>No (2)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($respondens as $no => $repon)
                <tr>
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
                        <td>{{ $secondData->value_answer == 'yes' ? $secondData->nominal_answer : '-' }}</td>
                        <td>{{ $secondData->value_answer == 'no' ? $secondData->nominal_answer : '-' }}</td>
                        
                        <td>{{ $secondData->value_answer_second == 'yes' ? $secondData->nominal_answer_second : '-' }}</td>
                        <td>{{ $secondData->value_answer_second == 'no' ? $secondData->nominal_answer_second : '-' }}</td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>