@extends('layouts.admin.layout-admin-login')

@section('content')
<div class="flex flex-row items-center justify-center">
    <fieldset class="fieldset w-xs bg-base-200 border border-base-300 p-4 rounded-box">
        <legend class="fieldset-legend">Login</legend>
        
        <label class="fieldset-label">Username</label>
        <input type="text" class="input" placeholder="Admin" />
        
        <label class="fieldset-label">Password</label>
        <input type="password" class="input" placeholder="Admin password" />
        <a href="{{ route('adminDashboardShow') }}" class="btn btn-soft">{{ __('messages.next') }}</a>
    </fieldset>
</div>
@endsection