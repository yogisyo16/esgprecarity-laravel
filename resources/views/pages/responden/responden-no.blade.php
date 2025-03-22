@extends('layouts.responden.layout-responden')

@section('content')
    <div class="flex flex-row md:flex-col justify-center items-center w-full transition-opacity opacity-100 duration-750 starting:opacity-0">
        <div class="flex flex-col items-center gap-2 sm:items-center md:items-center">
            <h1 class="text-3xl">
                {{ __('messages.no_title') }}
            </h1>
            <p class="m-16 p-10 text-center">
                {{ __('messages.no_answer') }}
            </p>
        </div>
        <div class="flex mt-16 gap-12">
            <a href="{{ route('respondenShowData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection