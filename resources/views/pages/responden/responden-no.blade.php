@extends('layouts.responden.layout-responden')

@section('title-name')
    {{ __('messages.no_title') }}
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col justify-center items-center gap-4 md:flex-row md:w-4/6">
            <div class="flex flex-col items-center text-center md:items-start md:text-start gap-2 m-6">
                <h1 class="font-arvo font-bold text-3xl">
                    {{ __('messages.no_title') }}
                </h1>
                <p class="font-arvo text-lg mt-4 text-justify">
                    {{ __('messages.no_answer') }}
                </p>
            </div>
            <div class="items-center order-last gap-2 md:items-center md:order-none">
                <img src="/images/merger-thank-you-bubble-resize-sm.png" class="w-auto h-96 md:h-full" alt="{{ __('messages.survey_title') }}">
            </div>
        </div>
        <div class="font-arvo">
            <a href="{{ route('respondenShowData') }}" class="btn btn-outline">{{ __('messages.back') }}</a>
        </div>
    </div>
@endsection