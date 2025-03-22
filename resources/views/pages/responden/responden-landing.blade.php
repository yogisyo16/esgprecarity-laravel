@extends('layouts.responden.layout-responden')

@section('content')
    <div class="flex flex-row md:flex-col justify-center items-center w-full transition-opacity opacity-100 duration-750 starting:opacity-0">
        <div class="flex flex-col items-center gap-2 sm:items-center md:items-center">
            <h1 class="text-3xl ">
                {{ __('messages.title') }}
            </h1>
            <p>
                {{ __('messages.disclaimer') }}
            </p>
        </div>
        <div class="flex">
            <details class="dropdown">
                <summary class="btn btn-outline mr-2">Language: {{ __('messages.language') }}</summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                    <li><a>English</a></li>
                    <li><a>Indonesia</a></li>
                </ul>
            </details>
            <a href="{{ route('page1ShowData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection