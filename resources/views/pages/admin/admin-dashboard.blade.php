@extends('layouts.admin.layout-admin-dashboard')

@section('title-name')
    Login Admin
@endsection

@push('logout-user')
    <form method="POST" action="{{ route('adminLogout') }}" class="mr-4">
        @csrf
        <button type="submit" class="btn btn-outline btn-error">Logout</button>
    </form>
@endpush

@section('content')
    <div class="flex flex-col justify-center items-center gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:items-center md:gap-5">
        <div class="flex flex-col text-center gap-2 md:justify-center">
            <h1 class="font-arvo font-bold text-3xl">
                {{ __('messages.title') }}
            </h1>
            <p class="font-arvo mx-6 text-center">
                {{ __('messages.disclaimer') }}
            </p>
        </div>
        <div class="flex flex-col items-center gap-2 md:flex-row md:gap-4">
        </div>
    </div>
@endsection