@extends('layouts.responden.layout-responden')

@section('content')
    <div class="flex flex-row md:flex-col justify-center items-center w-full transition-opacity opacity-100 duration-750 starting:opacity-0">
        <div class="flex flex-col items-center gap-2 sm:items-center md:items-center">
            <h1 class="text-3xl bg-green-600 p-4 px-8">
                {{ __('messages.purposes') }}
            </h1>
            <p class="mt-4 text-center">
                {{ __('messages.explaination') }}
            </p>
        </div>
        <div class="flex mt-16 gap-12">
            <a href="{{ route('page2ShowData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection