@extends('layouts.responden.layout-responden')

@section('title-name')
    Esgprecarity
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-2 md:items-center">
            <h1 class="font-arvo font-bold text-3xl bg-texBgreen p-4 px-8 rounded-xl">
                {{ __('messages.terms_and_conditions') }}
            </h1>
            <ul class="font-arvo mt-4 mx-6">
                <li class="list-disc list-inside">{{ __('messages.rules_1') }}</li>
                <li class="list-disc list-inside">{{ __('messages.rules_2') }}</li>
                <li class="list-disc list-inside">{{ __('messages.rules_3') }}</li>
            </ul>
            <p class="font-arvo text-2xl mt-8 mx-12 text-center md:mx-56 md:text-start">{{ __('messages.rules_4') }}</p>
        </div>
        <div class="font-arvo flex mt-8 gap-12">
            <a href="{{ route('noShowData') }}" class="btn btn-outline">{{ __('messages.no') }}</a>
            <a href="{{ route('showRespondenDataCollection') }}" class="btn btn-outline">{{ __('messages.yes') }}</a>
        </div>
    </div>
@endsection