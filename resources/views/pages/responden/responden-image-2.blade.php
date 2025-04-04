@extends('layouts.responden.layout-responden')

@section('title-name')
    Esgprecarity
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center">
        <div class="flex flex-col items-center gap-4 md:items-center">
            <h1 class="font-arvo font-bold bg-white text-black rounded-full p-4 text-2xl">
                {{ __('messages.table_title_image') }}
            </h1>
            <img src="{{ __('messages.image_table') }}" alt="">
        </div>
        <div class="font-arvo flex mt-2">
            <a href="{{ route('pageActData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection