@extends('layouts.responden.layout-responden')

@section('content')
    <div class="flex flex-row md:flex-col justify-center items-center w-full transition-opacity opacity-100 duration-750 starting:opacity-0">
        <div class="flex flex-col items-center gap-2 sm:items-center md:items-center">
            <h1 class="text-3xl bg-green-600 p-4 px-8">
                {{ __('messages.terms_and_conditions') }}
            </h1>
            <ul class="mt-4">
                <li class="list-disc list-inside">{{ __('messages.rules_1') }}</li>
                <li class="list-disc list-inside">{{ __('messages.rules_2') }}</li>
                <li class="list-disc list-inside">{{ __('messages.rules_3') }}</li>
            </ul>
            <p class="text-2xl mt-8">{{ __('messages.rules_4') }}</p>
        </div>
        <div class="flex mt-8 gap-12">
            <a href="{{ route('noShowData') }}" class="btn btn-outline">{{ __('messages.no_rules') }}</a>
            <a href="{{ route('page2ShowData') }}" class="btn btn-outline">{{ __('messages.yes_rules') }}</a>
        </div>
    </div>
@endsection