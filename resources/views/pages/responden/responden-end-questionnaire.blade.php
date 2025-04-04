@extends('layouts.responden.layout-responden')

@section('title-name')
    Thank You
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-2 md:items-center">
            <h1 class="font-arvo text-4xl bg-green-700 p-4 rounded-full">{{ __('messages.end_questionnaire') }}</h1>
        </div>
        <div class="font-arvo flex mt-8 gap-12">
            <a href="{{ route('respondenShowData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection