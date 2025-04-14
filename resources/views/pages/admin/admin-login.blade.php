@extends('layouts.admin.layout-admin-login')

@section('title-name')
    Login Admin
@endsection

@push('styles')
    <style>
        .alert {
            transition: opacity 0.3s ease;
            opacity: 1;
        }

        .alert.hide {
            opacity: 0;
            pointer-events: none; /* Disables clicks during fade-out */
        }
    </style>
@endpush

@section('content')
<div class="flex flex-col items-center justify-center">
    <form method="POST" action="{{ route('adminLoginAuth') }}" class="relative">
        @csrf
        <fieldset class="fieldset w-xs bg-gray-800 border border-base-300 p-4 rounded-box gap-2">
            <legend class="fieldset-legend font-arvo text-3xl font-bold text-white">Login</legend>
            @error('name')
                <div role="alert" class="alert alert-error mb-3 md:mb-5" id="alert-name">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 shrink-0 stroke-current" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span> name wrong </span>
                    <button type="button" class="btn btn-sm" id="close-alert-name">Close</button>
                </div>
            @enderror
            <label class="fieldset-label">{{ __('messages.username') }}</label>
            <input type="text" name="name" class="input" placeholder="Admin" data-theme="dark"/>
            <label class="fieldset-label">{{ __('messages.password') }}</label>
            <input type="password" name="password" id="password" class="input" placeholder="{{ __('messages.password_placeholder') }}" data-theme="dark"/>
            <div class="flex flex-row items-center">
                <input type="checkbox" id="password-toggle" class="toggle toggle-warning mr-2" />
                <span>{{ __('messages.show_password') }}</span>
            </div>
            <div class="flex flex-row justify-between relative">
                <details class="dropdown">
                    <summary class="btn btn-outline flex-wrap w-26 pb-10 md:w-auto md:pb-0 mr-6 md:mr-4">
                        {{ __('messages.language_title') }}: {{ __('messages.language') }}
                    </summary>
                    <ul class="menu dropdown-content bg-base-100 rounded-box z-1 w-40 p-2 shadow-sm" data-theme="dark">
                        <li>
                            <a href="{{ route('set.language', 'en') }}">
                                English
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('set.language', 'id') }}">
                                Indonesia
                            </a>
                        </li>
                    </ul>
                </details>
                <button type="submit" class="btn btn-outline ml-10 md:mr-0">{{ __('messages.login') }}</button>
            </div>
        </fieldset>
    </form>
    <a href="{{ route('respondenShowData') }}" class="btn btn-outline mt-4">Website Responden</a>
</div>
@endsection

@push('scripts')
    <script>
        const togglePassword = document.querySelector('#password-toggle');
        const password = document.querySelector('#password');
        
        togglePassword.addEventListener('click', function (e) {
            // type= password ? text
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // checked="checked"
            this.setAttribute('checked', this.checked ? 'checked' : '');
        });

        const alertName = document.querySelector('#alert-name');
        const closeAlertName = document.querySelector('#close-alert-name');

        // Close name alert manually
        closeAlertName.addEventListener('click', () => {
            alertName.classList.add('hide');
            setTimeout(() => {
                alertName.style.display = 'none';
            }, 300); // Match transition duration
        });

        setTimeout(() => {
            alertName.classList.add('hide');
            setTimeout(() => {
                alertName.style.display = 'none';
            }, 300);
        }, 2000);
        
    </script>
@endpush