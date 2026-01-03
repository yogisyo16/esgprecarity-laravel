@extends('layouts.responden.layout-responden')

@section('title-name')
    Esgprecarity
@endsection

@push('styles')
    <style>
        /* This will style the parent div when its radio is checked */
        .radio-container:has(.radio:checked) {
            @apply bg-white text-black;
        }
    </style>
@endpush

@section('content')
    <div class="flex flex-col items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <form method="POST" action="{{ route('saveYesInvestmentDataSecond') }}" class="container flex flex-col font-arvo items-center">
            @csrf
            <ul class="flex flex-wrap m-8 md:mx-10">
                <li class="list-disc">{{ __('messages.last_question_second') }} <br> {{ __('messages.last_question_english_second') }}</li>
            </ul>
            <h1 class="font-arvo font-bold text-md text-center text-black bg-white rounded-full p-4 md:mb-4" name="value_answer_second" value="yes">{{ __('messages.last_question_yes') }}</h1>
            
            <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                <div class="radio-container flex flex-row items-center bg-green-700 rounded-full p-4 md:flex-col cursor-pointer">
                    <label class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full w-full h-full cursor-pointer">
                        $1000
                        <input type="radio" name="nominal_answer_second" value="$1000" class="radio checked:bg-black invisible" 
                        {{ old('nominal_answer_second', $formData['nominal_answer_second'] ?? '') === '$1000' ? 'checked' : '' }}/>
                    </label>
                </div>
                <div class="radio-container flex flex-row items-center bg-green-700 rounded-full p-4 md:flex-col cursor-pointer">
                    <label class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full w-full h-full cursor-pointer">
                        $980
                        <input type="radio" name="nominal_answer_second" value="$980" class="radio checked:bg-black invisible" 
                        {{ old('nominal_answer_second', $formData['nominal_answer_second'] ?? '') === '$980' ? 'checked' : '' }}/>
                    </label>
                </div>
                <div class="radio-container flex flex-row items-center bg-green-700 rounded-full p-4 md:flex-col cursor-pointer">
                    <label class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full w-full h-full cursor-pointer">
                        $950
                        <input type="radio" name="nominal_answer_second" value="$950" class="radio checked:bg-black invisible" 
                        {{ old('nominal_answer_second', $formData['nominal_answer_second'] ?? '') === '$950' ? 'checked' : '' }}/>
                    </label>
                </div>
            </div>
            
            <div class="join flex flex-col my-2 p-2 gap-4 md:flex-row md:gap-20">
                <div class="radio-container flex flex-row items-center bg-green-700 rounded-full p-4 md:flex-col cursor-pointer">
                    <label class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full w-full h-full cursor-pointer">
                        $920
                        <input type="radio" name="nominal_answer_second" value="$920" class="radio checked:bg-black invisible" 
                        {{ old('nominal_answer_second', $formData['nominal_answer_second'] ?? '') === '$920' ? 'checked' : '' }}/>
                    </label>
                </div>
                <div class="radio-container flex flex-row items-center bg-green-700 rounded-full p-4 md:flex-col cursor-pointer">
                    <label class="flex flex-row items-center p-1.5 gap-2.5 aspect-square rounded-full w-full h-full cursor-pointer">
                        $800
                        <input type="radio" name="nominal_answer_second" value="$800" class="radio checked:bg-black invisible" 
                        {{ old('nominal_answer_second', $formData['nominal_answer_second'] ?? '') === '$800' ? 'checked' : '' }}/>
                    </label>
                </div>
            </div>
            
            <div class="self-center my-0 md:self-end md:my-4">
                <button type="submit" class="btn btn-outline ml-10 md:mr-0">{{ __('messages.next') }}</button>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
<script>

    document.addEventListener('DOMContentLoaded', function() {
        const radioInputs = document.querySelectorAll('input[name="nominal_answer_second"]');
        
        radioInputs.forEach(radio => {
            radio.addEventListener('change', function() {
                // Reset all containers
                document.querySelectorAll('.radio-container').forEach(container => {
                    container.classList.remove('bg-white', 'text-black');
                    container.classList.add('bg-green-700');
                });
                
                // Style the selected one
                if (this.checked) {
                    this.closest('.radio-container').classList.add('bg-white', 'text-black');
                    this.closest('.radio-container').classList.remove('bg-green-700');
                }
            });
            
            // Initialize checked state on page load
            if (radio.checked) {
                radio.closest('.radio-container').classList.add('bg-white', 'text-black');
                radio.closest('.radio-container').classList.remove('bg-green-700');
            }
        });
    });

</script>

@endpush