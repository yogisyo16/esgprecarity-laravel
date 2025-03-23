@extends('layouts.responden.layout-responden')

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-2 md:items-center">
            <h1 class="font-arvo font-bold text-3xl">
                {{ __('messages.yes_answer') }}
            </h1>
        </div>
        <div class="font-arvo flex">
            <a href="{{ route('respondenShowData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection