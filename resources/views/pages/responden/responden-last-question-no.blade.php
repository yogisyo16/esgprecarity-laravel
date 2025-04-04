@extends('layouts.responden.layout-responden')

@section('title-name')
    Esgprecarity
@endsection

@section('content')
    <div class="flex flex-col items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <form method="POST" action="{{ route('saveNoInvestmentData') }}" class="container flex flex-col font-arvo items-center">
            @csrf
            <ul class="flex flex-wrap m-8 md:mx-10">
                <li class="list-disc">{{ __('messages.last_question') }}</li>
            </ul>
            <h1 class="font-arvo font-bold text-md text-center text-black bg-white rounded-full p-4 md:mb-4" name="value_answer" value="no">{{ __('messages.last_question_no') }}</h1>
            <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                <div class="flex flex-row items-center bg-green-700 rounded-full p-8 md:flex-col">
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        $200
                        <input type="radio" name="nominal_answer" value="200" class="radio" 
                        {{ old('nominal_answer', $formData['nominal_answer'] ?? '') === '$200' ? 'checked' : '' }}/>
                    </p>
                </div>
                <div class="flex flex-row items-center bg-green-700 rounded-full p-8 md:flex-col">
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        $180
                        <input type="radio" name="nominal_answer" value="180" class="radio" 
                        {{ old('nominal_answer', $formData['nominal_answer'] ?? '') === '$180' ? 'checked' : '' }}/>
                    </p>
                </div>
                <div class="flex flex-row items-center bg-green-700 rounded-full p-8 md:flex-col">
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        $150
                        <input type="radio" name="nominal_answer" value="150" class="radio" 
                        {{ old('nominal_answer', $formData['nominal_answer'] ?? '') === '$150' ? 'checked' : '' }}/>
                    </p>
                </div>
            </div>
            <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                <div class="flex flex-row items-center bg-green-700 rounded-full p-8 md:flex-col">
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        $130
                        <input type="radio" name="nominal_answer" value="130" class="radio" 
                        {{ old('nominal_answer', $formData['nominal_answer'] ?? '') === '$130' ? 'checked' : '' }}/>
                    </p>
                </div>
                <div class="flex flex-row items-center bg-green-700 rounded-full p-8 md:flex-col">
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        $100
                        <input type="radio" name="nominal_answer" value="100" class="radio" 
                        {{ old('nominal_answer', $formData['nominal_answer'] ?? '') === '$100' ? 'checked' : '' }}/>
                    </p>
                </div>
            </div>
            <div class="self-center my-0 md:self-end md:my-4">
                <button type="submit" class="btn btn-outline ml-10 md:mr-0">{{ __('messages.next') }}</button>
            </div>
        </form>
    </div>
@endsection