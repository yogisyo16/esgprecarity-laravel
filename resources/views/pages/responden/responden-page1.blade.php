@extends('layouts.responden.layout-responden')

@section('title-name')
    Esgprecarity
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-2 md:justify-center md:w-4/6 text-justify">
            <h1 class="font-arvo font-bold text-3xl bg-texBgreen p-4 px-8 rounded-xl">
                {{ __('messages.purposes') }}
            </h1>
            <p class="font-arvo mt-6 mx-6">
                {{ __('messages.explaination') }}
            </p>
        </div>
        <div class="flex">
            <a href="{{ route('page2ShowData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection