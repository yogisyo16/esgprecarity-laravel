@extends('layouts.responden.layout-responden')

@section('title-name')
    Esgprecarity
@endsection

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-2 md:items-center">
            
        </div>
        <div class="font-arvo flex mt-8 gap-12">
            <a href="{{ route('page11ShowData') }}" class="btn btn-outline">{{ __('messages.next') }}</a>
        </div>
    </div>
@endsection