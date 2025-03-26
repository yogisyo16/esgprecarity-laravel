@extends('layouts.responden.layout-responden')

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-4 mx-4 md:items-center">
            <form method="POST" action="{{ route('savedQuestionPage1') }}" class="container flex flex-col font-arvo text-start justify-start items-start px-4 py-4 rounded-lg md:justify-center md:items-center md:text-center md:px-8 md:py-6">
                @csrf
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">1.</b>{{ __('messages.survey_question_1') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_one" value="1" class="radio" 
                                {{ old('data_que_one', $formData['data_que_one'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_one" value="2" class="radio" 
                                {{ old('data_que_one', $formData['data_que_one'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_2') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_one" value="3" class="radio" 
                                {{ old('data_que_one', $formData['data_que_one'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_3') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_one" value="4" class="radio" 
                                {{ old('data_que_one', $formData['data_que_one'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_4') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_one" value="5" class="radio" 
                                {{ old('data_que_one', $formData['data_que_one'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">2.</b>{{ __('messages.survey_question_2') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_two" value="1" class="radio" 
                                {{ old('data_que_two', $formData['data_que_two'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_two" value="2" class="radio" 
                                {{ old('data_que_two', $formData['data_que_two'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_2') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_two" value="3" class="radio" 
                                {{ old('data_que_two', $formData['data_que_two'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_3') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_two" value="4" class="radio" 
                                {{ old('data_que_two', $formData['data_que_two'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_4') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_two" value="5" class="radio" 
                                {{ old('data_que_two', $formData['data_que_two'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">3.</b>{{ __('messages.survey_question_3') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_three" value="1" class="radio" 
                                {{ old('data_que_three', $formData['data_que_three'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_three" value="2" class="radio" 
                                {{ old('data_que_three', $formData['data_que_three'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_2') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_three" value="3" class="radio" 
                                {{ old('data_que_three', $formData['data_que_three'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_3') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_three" value="4" class="radio" 
                                {{ old('data_que_three', $formData['data_que_three'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_4') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_three" value="5" class="radio"
                                {{ old('data_que_three', $formData['data_que_three'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">4.</b>{{ __('messages.survey_question_4') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_four" value="1" class="radio" 
                                {{ old('data_que_four', $formData['data_que_four'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_four" value="2" class="radio" 
                                {{ old('data_que_four', $formData['data_que_four'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_2') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_four" value="3" class="radio" 
                                {{ old('data_que_four', $formData['data_que_four'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_3') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_four" value="4" class="radio" 
                                {{ old('data_que_four', $formData['data_que_four'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_4') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_four" value="5" class="radio" 
                                {{ old('data_que_four', $formData['data_que_four'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">5.</b>{{ __('messages.survey_question_5') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_five" value="1" class="radio" 
                                {{ old('data_que_five', $formData['data_que_five'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_five" value="2" class="radio" 
                                {{ old('data_que_five', $formData['data_que_five'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_2') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_five" value="3" class="radio" 
                                {{ old('data_que_five', $formData['data_que_five'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_3') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_five" value="4" class="radio"
                                {{ old('data_que_five', $formData['data_que_five'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_4') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_five" value="5" class="radio" 
                                {{ old('data_que_five', $formData['data_que_five'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">6.</b>{{ __('messages.survey_question_6') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_six" value="1" class="radio" 
                                {{ old('data_que_six', $formData['data_que_six'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_six" value="2" class="radio"
                                {{ old('data_que_six', $formData['data_que_six'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_2') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_six" value="3" class="radio" 
                                {{ old('data_que_six', $formData['data_que_six'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_3') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_six" value="4" class="radio" 
                                {{ old('data_que_six', $formData['data_que_six'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_4') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_six" value="5" class="radio" 
                                {{ old('data_que_six', $formData['data_que_six'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">7.</b>{{ __('messages.survey_question_7') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-10">
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_seven" value="1" class="radio" 
                                {{ old('data_que_seven', $formData['data_que_seven'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_seven" value="2" class="radio" 
                                {{ old('data_que_seven', $formData['data_que_seven'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_2') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_seven" value="3" class="radio" 
                                {{ old('data_que_seven', $formData['data_que_seven'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_3') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_seven" value="4" class="radio" 
                                {{ old('data_que_seven', $formData['data_que_seven'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_4') }}</p>
                        </div>
                        <div class="flex flex-row items-center md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_seven" value="5" class="radio" 
                                {{ old('data_que_seven', $formData['data_que_seven'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="self-center my-0 md:self-center md:my-4">
                    <button type="submit" class="btn btn-outline ml-10 md:mr-0">{{ __('messages.next') }}</button>
                </div>
            </form>
        </div>
        <div class="font-arvo flex gap-5 md:gap-8">
        </div>
    </div>
@endsection