@extends('layouts.responden.layout-responden')

@section('title-name')
    Esgprecarity
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-2 md:items-center">
            <ul class="font-arvo mt-4 mx-6 md:mx-44">
                <li class="list-disc list-outside text-xl py-4">{{ __('messages.essay_question_1_second') }}</li>
                <li class="list-disc list-outside text-xl py-4">{{ __('messages.essay_question_2_second') }}</li>
                <li class="list-disc list-outside text-xl py-4">{{ __('messages.essay_question_3_second') }}</li>
            </ul>
        </div>
        <div class="font-arvo flex mt-8 gap-12">
            <a href="{{ route('pageNoInvestmentDataSecond') }}" class="btn btn-error">{{ __('messages.no') }}</a>
            <a href="{{ route('pageYesInvestmentDataSecond') }}" class="btn btn-success">{{ __('messages.yes') }}</a>
        </div>
    </div>
@endsection