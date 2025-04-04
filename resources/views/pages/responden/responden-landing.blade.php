@extends('layouts.responden.layout-responden')

@section('title-name')
    Landing Page
@endsection

@push('language')
    <details class="dropdown">
        <summary class="btn btn-outline flex-wrap w-26 pb-10 md:w-auto md:pb-0 mr-6 md:mr-4">Language: {{ __('messages.language') }}</summary>
        <ul class="menu dropdown-content bg-base-100 rounded-box z-1 w-40 p-2 shadow-sm">
            <li><a href="{{ route('set.language', 'en') }}">English</a></li>
            <li><a href="{{ route('set.language', 'id') }}">Indonesia</a></li>
        </ul>
    </details>
@endpush

@section('content')
    <div class="flex flex-col justify-center items-center gap-2 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-6">
        <div class="flex flex-col text-center gap-2 md:justify-center">
            <h1 class="font-arvo font-bold text-3xl">
                {{ __('messages.title') }}
            </h1>
            <p class="font-arvo mx-6 text-center">
                {{ __('messages.disclaimer') }}
            </p>
        </div>
        <div class="flex flex-col items-center gap-2 md:flex-row md:gap-4">
            <a href="{{ route('page1ShowData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection