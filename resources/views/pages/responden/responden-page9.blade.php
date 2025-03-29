@extends('layouts.responden.layout-responden')

@section('title-name')
    Esgprecarity
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-2 md:items-center">
            <ul class="font-arvo mt-4 mx-6">
                <li class="list-disc list-outside text-xl py-4">{{ __('messages.instruction_list_4') }}</li>
                <li class="list-disc list-outside text-xl py-4">{{ __('messages.instruction_list_5') }}</li>
            </ul>
        </div>
        <div class="font-arvo flex mt-8 gap-12">
            <details class="dropdown">
                <summary class="btn btn-outline mr-2">Language: {{ __('messages.language') }}</summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                    <li><a href="{{ route('set.language', 'en') }}">English</a></li>
                    <li><a href="{{ route('set.language', 'id') }}">Indonesia</a></li>
                </ul>
            </details>
            <a href="{{ route('page8ShowData') }}" class="btn btn-outline">{{ __('messages.back') }}</a>
            <a href="{{ route('page10ShowData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection