@extends('layouts.responden.layout-responden')

@section('title-name')
    {{ __('messages.instruction_title') }}
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col justify-center items-center gap-4 md:flex-row md:w-8/12">
            <div class="items-center order-last gap-2 md:items-center md:order-none">
                <img src="/images/instruction-animation.png" class="w-auto h-auto" alt="{{ __('messages.survey_title') }}">
            </div>
            <div class="flex flex-col items-center text-center md:items-start md:text-start gap-2 m-6 md:m-0">
                <h1 class="font-arvo font-bold text-3xl bg-texBgreen p-4 px-8 rounded-xl">
                    {{ __('messages.instruction_title') }}
                </h1>
                <p class="font-arvo text-xl mt-6 mr-6 text-center">
                {{ __('messages.instruction_field') }}
            </p>
            </div>
        </div>
        <div class="font-arvo">
            <a href="{{ route('page8ShowData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection