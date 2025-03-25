@extends('layouts.responden.layout-responden')

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col items-center gap-4 mx-4 md:items-center">
            <h1 class="font-arvo font-bold text-3xl text-center">
                {{ __('messages.yes_answer') }}
            </h1>
            <form method="POST" action="{{ route('getRespondenDataCollection') }}" class="container flex flex-col font-arvo border-2 border-teal-950 text-start justify-start items-start px-4 py-4 rounded-lg md:justify-center md:items-center md:text-center md:px-8 md:py-6">
                @csrf
                <label class="input mb-3 md:mb-5">
                    <span class="label">{{ __('messages.email') }}</span>
                    <input type="text" id="email_responden" name="email_responden" placeholder="{{ __('messages.placeholder') }}" value="{{ old('email_responden') }}"/>
                </label>
                @error('email_responden')
                    <div role="alert" class="alert alert-error mb-3 md:mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ __('messages.error_email') }}</span>
                        <button class="btn btn-sm">Close</button>
                    </div>
                @enderror
                <label class="input mb-3 md:mb-5">
                    <span class="label">{{ __('messages.name') }}</span>
                    <input type="text" id="name_responden" name="name_responden" placeholder="{{ __('messages.placeholder') }}"/>
                </label>
                <label class="select mb-3 md:mb-5">
                    <span class="label">{{ __('messages.gender') }}</span>
                    <select name="gender_responden" id="gender_responden">
                        <option value="#">{{ __('messages.placeholder_select') }}</option>
                        <option value="laki-laki">{{ __('messages.gender_male') }}</option>
                        <option value="perempuan">{{ __('messages.gender_female') }}</option>
                    </select>                    
                </label>
                @error('gender_responden')
                    <div role="alert" class="alert alert-error mb-3 md:mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ __('messages.error_gender') }}</span>
                        <button class="btn btn-sm">Close</button>
                    </div>
                @enderror
                <label class="input mb-3 md:mb-5">
                    <span class="label">{{ __('messages.age') }}</span>
                    <input type="text" id="age_responden" name="age_responden" placeholder="{{ __('messages.placeholder') }}"/>                  
                </label>
                <label class="input mb-3 md:mb-5">
                    <span class="label">{{ __('messages.affiliation') }}</span>
                    <input type="text" id="affiliation_responden" name="affiliation_responden" placeholder="{{ __('messages.placeholder') }}"/>                  
                </label>
                <label class="input mb-3 md:mb-5">
                    <span class="label">{{ __('messages.job') }}</span>
                    <input type="text" id="job_responden" name="job_responden" placeholder="{{ __('messages.placeholder') }}"/>                  
                </label>
                <label class="select mb-3 md:mb-5">
                    <span class="label">{{ __('messages.education') }}</span>
                    <select name="education_responden" id="education_responden">
                        <option value="#">{{ __('messages.placeholder_select') }}</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </label>
                @error('education_responden')
                    <div role="alert" class="alert alert-error mb-3 md:mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ __('messages.error_education') }}</span>
                        <button class="btn btn-sm">Close</button>
                    </div>
                @enderror
                <button type="submit" class="btn btn-outline">{{ __('messages.next') }}</button>
            </form>
        </div>
        <div class="font-arvo flex gap-5 md:gap-8">
        </div>
    </div>
@endsection

@push('scripts')
    @vite(['resources/js/validation-data.js'])
@endpush