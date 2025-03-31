@extends('layouts.responden.layout-responden')

@section('title-name')
    Esgprecarity
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center gap-2 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-1">
        <div class="flex flex-col items-center md:items-center">
            <img src="/images/table-vian-mining-co.png" alt="">
        </div>
        <div class="font-arvo flex mt-2">
            <a href="{{ route('pageActData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection