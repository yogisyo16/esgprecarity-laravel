@extends('layouts.responden.layout-responden')

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-4 mx-4 md:items-center md:text-justify">
            <form method="POST" id="formQuestion" action="{{ route('savedQuestionPage2') }}" class="container flex flex-col font-arvo text-start justify-start items-start px-4 py-4 rounded-lg md:justify-center md:items-center md:px-8 md:py-6">
                @csrf
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">1.</b>{{ __('messages.survey_question_8') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
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
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_eight" value="3" class="radio"
                                {{ old('data_que_eight', $formData['data_que_eight'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_eight" value="4" class="radio"
                                {{ old('data_que_eight', $formData['data_que_eight'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
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
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
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
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_nine" value="3" class="radio"
                                {{ old('data_que_nine', $formData['data_que_nine'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_nine" value="4" class="radio"
                                {{ old('data_que_nine', $formData['data_que_nine'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
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
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">3.</b>{{ __('messages.survey_question_10') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_ten" value="1" class="radio" 
                                {{ old('data_que_ten', $formData['data_que_ten'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_ten" value="2" class="radio"
                                {{ old('data_que_ten', $formData['data_que_ten'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_ten" value="3" class="radio"
                                {{ old('data_que_ten', $formData['data_que_ten'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_ten" value="4" class="radio"
                                {{ old('data_que_ten', $formData['data_que_ten'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_ten" value="5" class="radio"
                                {{ old('data_que_ten', $formData['data_que_ten'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">4.</b>{{ __('messages.survey_question_11') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_eleven" value="1" class="radio" 
                                {{ old('data_que_eleven', $formData['data_que_eleven'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_eleven" value="2" class="radio"
                                {{ old('data_que_eleven', $formData['data_que_eleven'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_eleven" value="3" class="radio"
                                {{ old('data_que_eleven', $formData['data_que_eleven'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_eleven" value="4" class="radio"
                                {{ old('data_que_eleven', $formData['data_que_eleven'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_eleven" value="5" class="radio"
                                {{ old('data_que_eleven', $formData['data_que_eleven'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">5.</b>{{ __('messages.survey_question_12') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_twelve" value="1" class="radio" 
                                {{ old('data_que_twelve', $formData['data_que_twelve'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_twelve" value="2" class="radio"
                                {{ old('data_que_twelve', $formData['data_que_twelve'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_twelve" value="3" class="radio"
                                {{ old('data_que_twelve', $formData['data_que_twelve'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_twelve" value="4" class="radio"
                                {{ old('data_que_twelve', $formData['data_que_twelve'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_twelve" value="5" class="radio"
                                {{ old('data_que_twelve', $formData['data_que_twelve'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">6.</b>{{ __('messages.survey_question_13') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_thirteen" value="1" class="radio" 
                                {{ old('data_que_thirteen', $formData['data_que_thirteen'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_thirteen" value="2" class="radio"
                                {{ old('data_que_thirteen', $formData['data_que_thirteen'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_thirteen" value="3" class="radio"
                                {{ old('data_que_thirteen', $formData['data_que_thirteen'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_thirteen" value="4" class="radio"
                                {{ old('data_que_thirteen', $formData['data_que_thirteen'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_thirteen" value="5" class="radio"
                                {{ old('data_que_thirteen', $formData['data_que_thirteen'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">7.</b>{{ __('messages.survey_question_14') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_fourteen" value="1" class="radio" 
                                {{ old('data_que_fourteen', $formData['data_que_fourteen'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_fourteen" value="2" class="radio"
                                {{ old('data_que_fourteen', $formData['data_que_fourteen'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_fourteen" value="3" class="radio"
                                {{ old('data_que_fourteen', $formData['data_que_fourteen'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_fourteen" value="4" class="radio"
                                {{ old('data_que_fourteen', $formData['data_que_fourteen'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_fourteen" value="5" class="radio"
                                {{ old('data_que_fourteen', $formData['data_que_fourteen'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">8.</b>{{ __('messages.survey_question_15') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_fifteen" value="1" class="radio" 
                                {{ old('data_que_fifteen', $formData['data_que_fifteen'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_fifteen" value="2" class="radio"
                                {{ old('data_que_fifteen', $formData['data_que_fifteen'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_fifteen" value="3" class="radio"
                                {{ old('data_que_fifteen', $formData['data_que_fifteen'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_fifteen" value="4" class="radio"
                                {{ old('data_que_fifteen', $formData['data_que_fifteen'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_fifteen" value="5" class="radio"
                                {{ old('data_que_fifteen', $formData['data_que_fifteen'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">9.</b>{{ __('messages.survey_question_16') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_sixteen" value="1" class="radio" 
                                {{ old('data_que_sixteen', $formData['data_que_sixteen'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_sixteen" value="2" class="radio"
                                {{ old('data_que_sixteen', $formData['data_que_sixteen'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_sixteen" value="3" class="radio"
                                {{ old('data_que_sixteen', $formData['data_que_sixteen'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_sixteen" value="4" class="radio"
                                {{ old('data_que_sixteen', $formData['data_que_sixteen'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_sixteen" value="5" class="radio"
                                {{ old('data_que_sixteen', $formData['data_que_sixteen'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">10.</b>{{ __('messages.survey_question_17') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_seventeen" value="1" class="radio" 
                                {{ old('data_que_seventeen', $formData['data_que_seventeen'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_seventeen" value="2" class="radio"
                                {{ old('data_que_seventeen', $formData['data_que_seventeen'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_seventeen" value="3" class="radio"
                                {{ old('data_que_seventeen', $formData['data_que_seventeen'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_seventeen" value="4" class="radio"
                                {{ old('data_que_seventeen', $formData['data_que_seventeen'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_seventeen" value="5" class="radio"
                                {{ old('data_que_seventeen', $formData['data_que_seventeen'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">11.</b>{{ __('messages.survey_question_18') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_eighteen" value="1" class="radio" 
                                {{ old('data_que_eighteen', $formData['data_que_eighteen'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_eighteen" value="2" class="radio"
                                {{ old('data_que_eighteen', $formData['data_que_eighteen'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_eighteen" value="3" class="radio"
                                {{ old('data_que_eighteen', $formData['data_que_eighteen'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_eighteen" value="4" class="radio"
                                {{ old('data_que_eighteen', $formData['data_que_eighteen'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_eighteen" value="5" class="radio"
                                {{ old('data_que_eighteen', $formData['data_que_eighteen'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">12.</b>{{ __('messages.survey_question_19') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_nineteen" value="1" class="radio" 
                                {{ old('data_que_nineteen', $formData['data_que_nineteen'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_nineteen" value="2" class="radio"
                                {{ old('data_que_nineteen', $formData['data_que_nineteen'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_nineteen" value="3" class="radio"
                                {{ old('data_que_nineteen', $formData['data_que_nineteen'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_nineteen" value="4" class="radio"
                                {{ old('data_que_nineteen', $formData['data_que_nineteen'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_nineteen" value="5" class="radio"
                                {{ old('data_que_nineteen', $formData['data_que_nineteen'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">13.</b>{{ __('messages.survey_question_20') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_twenty" value="1" class="radio" 
                                {{ old('data_que_twenty', $formData['data_que_twenty'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_twenty" value="2" class="radio"
                                {{ old('data_que_twenty', $formData['data_que_twenty'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_twenty" value="3" class="radio"
                                {{ old('data_que_twenty', $formData['data_que_twenty'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_twenty" value="4" class="radio"
                                {{ old('data_que_twenty', $formData['data_que_twenty'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_twenty" value="5" class="radio"
                                {{ old('data_que_twenty', $formData['data_que_twenty'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-start md:items-center">
                    <p><b class="mr-1">14.</b>{{ __('messages.survey_question_21') }}</p>
                    <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                1
                                <input type="radio" name="data_que_twentyone" value="1" class="radio" 
                                {{ old('data_que_twentyone', $formData['data_que_twentyone'] ?? '') === '1' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_1') }}</p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                2
                                <input type="radio" name="data_que_twentyone" value="2" class="radio"
                                {{ old('data_que_twentyone', $formData['data_que_twentyone'] ?? '') === '2' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                3
                                <input type="radio" name="data_que_twentyone" value="3" class="radio"
                                {{ old('data_que_twentyone', $formData['data_que_twentyone'] ?? '') === '3' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                4
                                <input type="radio" name="data_que_twentyone" value="4" class="radio"
                                {{ old('data_que_twentyone', $formData['data_que_twentyone'] ?? '') === '4' ? 'checked' : '' }}/>
                            </p>
                        </div>
                        <div class="flex flex-row items-center mb-2 md:flex-col">
                            <p class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full">
                                5
                                <input type="radio" name="data_que_twentyone" value="5" class="radio"
                                {{ old('data_que_twentyone', $formData['data_que_twentyone'] ?? '') === '5' ? 'checked' : '' }}/>
                            </p>
                            <p>{{ __('messages.scale_point_5') }}</p>
                        </div>
                    </div>
                </div>
                <div class="self-center my-0 md:self-center md:my-4">
                    <button type="submit" class="btn btn-outline mr-10 md:mr-0" name="button_action" value="back">{{ __('messages.back') }}</button>
                    <button type="submit" class="btn btn-outline ml-10 md:mr-0" name="button_action" value="next">{{ __('messages.next') }}</button>
                </div>
            </form>
        </div>
        <div class="font-arvo flex gap-5 md:gap-8">
        </div>
    </div>
@endsection