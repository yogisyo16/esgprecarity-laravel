@extends('layouts.responden.layout-responden')

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-4 mx-4 md:items-center">
            <form method="POST" action="{{ route('savedQuestionPage1') }}" class="container flex flex-col font-arvo text-start justify-start items-start px-4 py-4 rounded-lg md:justify-center md:items-center md:text-center md:px-8 md:py-6">
                @csrf
                <p class="">{{ __('messages.survey_question_1') }}</p>
                <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        1
                        <input type="radio" name="data_que_one" value="1" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        2
                        <input type="radio" name="data_que_one" value="2" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        3
                        <input type="radio" name="data_que_one" value="3" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        4
                        <input type="radio" name="data_que_one" value="4" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        5
                        <input type="radio" name="data_que_one" value="5" class="radio" />
                    </p>
                </div>
                <p class="">{{ __('messages.survey_question_2') }}</p>
                <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        1
                        <input type="radio" name="data_que_two" value="1" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        2
                        <input type="radio" name="data_que_two" value="2" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        3
                        <input type="radio" name="data_que_two" value="3" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        4
                        <input type="radio" name="data_que_two" value="4" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        5
                        <input type="radio" name="data_que_two" value="5" class="radio" />
                    </p>
                </div>
                <p class="">{{ __('messages.survey_question_3') }}</p>
                <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        1
                        <input type="radio" name="data_que_three" value="1" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        2
                        <input type="radio" name="data_que_three" value="2" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        3
                        <input type="radio" name="data_que_three" value="3" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        4
                        <input type="radio" name="data_que_three" value="4" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        5
                        <input type="radio" name="data_que_three" value="5" class="radio" />
                    </p>
                </div>
                <p class="">{{ __('messages.survey_question_4') }}</p>
                <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        1
                        <input type="radio" name="data_que_four" value="1" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        2
                        <input type="radio" name="data_que_four" value="2" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        3
                        <input type="radio" name="data_que_four" value="3" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        4
                        <input type="radio" name="data_que_four" value="4" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        5
                        <input type="radio" name="data_que_four" value="5" class="radio" />
                    </p>
                </div>
                <p class="">{{ __('messages.survey_question_5') }}</p>
                <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        1
                        <input type="radio" name="data_que_five" value="1" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        2
                        <input type="radio" name="data_que_five" value="2" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        3
                        <input type="radio" name="data_que_five" value="3" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        4
                        <input type="radio" name="data_que_five" value="4" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        5
                        <input type="radio" name="data_que_five" value="5" class="radio" />
                    </p>
                </div>
                <p class="">{{ __('messages.survey_question_6') }}</p>
                <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        1
                        <input type="radio" name="data_que_six" value="1" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        2
                        <input type="radio" name="data_que_six" value="2" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        3
                        <input type="radio" name="data_que_six" value="3" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        4
                        <input type="radio" name="data_que_six" value="4" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        5
                        <input type="radio" name="data_que_six" value="5" class="radio" />
                    </p>
                </div>
                <p class="">{{ __('messages.survey_question_7') }}</p>
                <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        1
                        <input type="radio" name="data_que_seven" value="1" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        2
                        <input type="radio" name="data_que_seven" value="2" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        3
                        <input type="radio" name="data_que_seven" value="3" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        4
                        <input type="radio" name="data_que_seven" value="4" class="radio" />
                    </p>
                    <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                        5
                        <input type="radio" name="data_que_seven" value="5" class="radio" />
                    </p>
                </div>
                <details class="dropdown order-first self-start mb-4">
                        <summary class="btn btn-outline mr-2">Language: {{ __('messages.language') }}</summary>
                        <ul class="menu dropdown-content bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                            <li><a href="{{ route('set.language', 'en') }}">English</a></li>
                            <li><a href="{{ route('set.language', 'id') }}">Indonesia</a></li>
                        </ul>
                    </details>
                <div class="self-center my-0 md:self-center md:my-4">
                    <button class="btn btn-outline mr-10 md:mr-0">{{ __('messages.back') }}</button>
                    <button type="submit" class="btn btn-outline ml-10 md:mr-0">{{ __('messages.next') }}</button>
                </div>
            </form>
        </div>
        <div class="font-arvo flex gap-5 md:gap-8">
        </div>
    </div>
@endsection