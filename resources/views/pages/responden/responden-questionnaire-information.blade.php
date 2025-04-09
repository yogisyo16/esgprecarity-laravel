@extends('layouts.responden.layout-responden')

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col justify-between items-between gap-4 md:flex-row ">
            <div class="flex flex-col justify-center items-center gap-2 m-6 md:items-start md:m-0 md:mx-46">
                <h1 class="font-arvo font-bold text-3xl">
                    {{ __('messages.survey_title') }}
                </h1>
                <ul class="font-arvo mt-4 mx-6 ">
                    <li class="list-disc list-inside">{{ __('messages.survey_condition_1') }}</li>
                    <li class="list-disc list-inside">{{ __('messages.survey_condition_2') }}</li>
                    <li class="list-disc list-inside">{{ __('messages.survey_condition_3') }}</li>
                    <li class="list-disc list-inside">{{ __('messages.survey_condition_4') }}</li>
                </ul>
            </div>
            <div class="hidden items-center gap-2 md:items-center md:flex">
                <img src="/images/rethink-image.png" alt="{{ __('messages.survey_title') }}">
            </div>
        </div>
        <a href="{{ route('showQuestionPage1') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
    </div>
@endsection