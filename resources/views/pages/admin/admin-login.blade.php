@extends('layouts.admin.layout-admin-login')

@section('title-name')
    Login Admin
@endsection

@section('content')
<div class="flex flex-row items-center justify-center">
    <fieldset class="fieldset w-xs bg-base-200 border border-base-300 p-4 rounded-box gap-2">
        <legend class="fieldset-legend">Login</legend>
        
        <label class="fieldset-label">{{ __('messages.username') }}</label>
        <input type="text" class="input" placeholder="Admin" />
        
        <label class="fieldset-label">{{ __('messages.password') }}</label>
        <input type="password" class="input" placeholder="password" />
        <div class="flex flex-row justify-between">
            <details class=" btn-info">
                <summary class="btn btn-outline mr-2">Language: {{ __('messages.language') }}</summary>
                <ul class="menu dropdown-content bg-base-100 rounded-box z-1 w-52 p-2 shadow-sm">
                    <li><a href="{{ route('set.language', 'en') }}">English</a></li>
                    <li><a href="{{ route('set.language', 'id') }}">Indonesia</a></li>
                </ul>
            </details>
            <a href="{{ route('adminDashboardShow') }}" class="btn btn-soft">{{ __('messages.login') }}</a>
        </div>
    </fieldset>
</div>
@endsection