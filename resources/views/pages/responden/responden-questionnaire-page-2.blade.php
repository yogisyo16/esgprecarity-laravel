@extends('layouts.responden.layout-responden')

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-4 mx-4 md:items-center md:text-justify">
            <form method="POST" action="{{ route('savedQuestionPage1') }}" class="container flex flex-col font-arvo text-start justify-start items-start px-4 py-4 rounded-lg md:justify-center md:items-center md:px-8 md:py-6">
                @csrf
                <div class="flex flex-col items-start md:items-center md:text-justify">
                    <p><b class="mr-1">1.</b>{{ __('messages.survey_question_8') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_eight" value="1" class="radio" 
                                {{ old('data_que_eight', $formData['data_que_eight'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_eight" value="2" class="radio"
                                {{ old('data_que_eight', $formData['data_que_eight'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_2') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_eight" value="3" class="radio"
                                {{ old('data_que_eight', $formData['data_que_eight'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_3') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_eight" value="4" class="radio"
                                {{ old('data_que_eight', $formData['data_que_eight'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_4') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_eight" value="5" class="radio"
                                {{ old('data_que_eight', $formData['data_que_eight'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">2.</b>{{ __('messages.survey_question_9') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_nine" value="1" class="radio" 
                                {{ old('data_que_nine', $formData['data_que_nine'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_nine" value="2" class="radio"
                                {{ old('data_que_nine', $formData['data_que_nine'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_2') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_nine" value="3" class="radio"
                                {{ old('data_que_nine', $formData['data_que_nine'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_3') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_nine" value="4" class="radio"
                                {{ old('data_que_nine', $formData['data_que_nine'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_4') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_nine" value="5" class="radio"
                                {{ old('data_que_nine', $formData['data_que_nine'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <details class="dropdown order-first self-start mb-4">
                        <summary class="btn btn-outline mr-2">Language: {{ __('messages.language') }}</summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                            <li><a href="{{ route('set.language', 'en') }}">English</a></li>
                            <li><a href="{{ route('set.language', 'id') }}">Indonesia</a></li>
                        </ul>
                    </details>
                <div class="self-center my-0 md:self-center md:my-4">
                    <a class="btn btn-outline mr-10 md:mr-0" href="{{ route('showQuestionPage1') }}">{{ __('messages.back') }}</a>
                    <button type="submit" class="btn btn-outline ml-10 md:mr-0">{{ __('messages.next') }}</button>
                </div>
            </form>
        </div>
        <div class="font-arvo flex gap-5 md:gap-8">
        </div>
    </div>
@endsection