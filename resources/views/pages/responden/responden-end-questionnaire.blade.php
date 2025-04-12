@extends('layouts.responden.layout-responden')

@section('title-name')
    Thank You
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-2 md:items-center text-center w-4/6">
            <h1 class="font-arvo text-4xl bg-green-700 p-6 rounded-full">{{ __('messages.end_questionnaire') }}</h1>
        </div>
    </div>
@endsection