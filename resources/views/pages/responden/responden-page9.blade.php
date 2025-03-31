@extends('layouts.responden.layout-responden')

@section('title-name')
    Esgprecarity
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-2 md:items-center">
            <ul class="font-arvo mt-4 mx-6">
                <li class="list-disc list-outside text-xl py-4">{{ __('messages.instruction_list_4') }}</li>
                <li class="list-disc list-outside text-xl py-4">{{ __('messages.instruction_list_5') }}</li>
            </ul>
        </div>
        <div class="font-arvo flex mt-8 gap-12">
            <a href="{{ route('page8ShowData') }}" class="btn btn-outline">{{ __('messages.back') }}</a>
            <a href="{{ route('page10ShowData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection