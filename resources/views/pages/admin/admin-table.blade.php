@extends('layouts.admin.layout-admin-dashboard')

@section('title-name')
    Hello {{ Auth::user()->name }}
@endsection

@push('logout-user')
    
@endpush

@push('side-menu')
    <a href="{{ route('adminDashboardShow') }}">
        <span class="hidden font-arvo md:block">
            {{ __('messages.dashboard') }}
        </span>
        <span class="material-symbols-outlined">
            home
        </span>
    </a>
@endpush

@push('logout-user-side-menu')
    <form method="POST" action="{{ route('adminLogout') }}" class="flex flex-col mr-4 cursor-pointer">
        <details class="relative">
            <summary class="btn btn-outline mr-2">Language: {{ __('messages.language') }}</summary>
            <ul class="menu absolute bg-base-100 rounded-box z-50 w-52 p-2 shadow-sm mt-1">
                <li><a href="{{ route('set.language', 'en') }}">English</a></li>
                <li><a href="{{ route('set.language', 'id') }}">Indonesia</a></li>
            </ul>
        </details>
        @csrf
        <button type="submit" class="btn btn-outline btn-error">Logout</button>
    </form>
@endpush

@push('header_link_styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
@endpush

@section('content')
    <div class="flex flex-col gap-6 transition-opacity opacity-100 duration-750 starting:opacity-0 md:gap-5">
        <div class="flex flex-col text-center gap-2 md:justify-center">
            <h1 class="font-arvo font-bold text-3xl">
                {{ __('messages.menu_table') }}
            </h1>
        </div>
        <div class="flex flex-col items-center gap-2 md:gap-4">
            <div>
                <h1 class="font-arvo font-bold text-2xl">{{ __('messages.dashboard_table') }}</h1>
                <table id="myTable" class="display font-arvo bg-green-800 border-black border-2">
                    <thead>
                        <tr>
                            <th colspan="3">
                                
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
                        @foreach ($responden as $no => $repon)
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
                <div class="flex flex-row justify-start gap-2">
                    <a href="{{ route('exportExcel') }}" class="btn btn-soft btn-accent">
                        Excel
                    </a>
                    <a href="{{ route('exportPdf') }}" class="btn btn-soft btn-accent">
                        PDF
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite(['resources/js/datatable.js'])
@endpush