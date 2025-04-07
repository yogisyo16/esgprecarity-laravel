@extends('layouts.admin.layout-admin-dashboard')

@section('title-name')
    Login {{ Auth::user()->name }}
@endsection

@push('logout-user')
    <form method="POST" action="{{ route('adminLogout') }}" class="flex flex-row mr-4">
        <details class="relative">
            <summary class="btn btn-outline mr-2">Language: {{ __('messages.language') }}</summary>
            <ul class="menu absolute bg-base-100 rounded-box z-50 w-52 p-2 shadow-sm mt-1">
                <li><a href="{{ route('set.language', 'en') }}">English</a></li>
                <li><a href="{{ route('set.language', 'id') }}">Indonesia</a></li>
            </ul>
        </details>
        @csrf
        <button type="submit" class="btn btn-outline btn-error">Logout</button>
    </form>
@endpush

@push('side-menu')
    <a href="{{ route('adminShowTable') }}">
        <span class="hidden font-arvo md:block">
            {{ __('messages.menu_table') }}
        </span>
        <span class="material-symbols-outlined">
            table_chart
        </span>
    </a>
@endpush

@push('header_link_styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.2.2/css/dataTables.dataTables.css" />
@endpush

@section('content')
    <div class="flex flex-col gap-6 max-w-auto transition-opacity opacity-100 duration-750 starting:opacity-0 md:gap-5">
        <div class="flex flex-col text-center gap-2 md:justify-center">
            <h1 class="font-arvo font-bold text-3xl">
                {{ __('messages.dashboard') }}
            </h1>
        </div>
        <div class="flex flex-col items-center gap-2 md:gap-4">
            <div class="flex flex-none flex-row justify-center gap-3">
                <div class="card bg-white shadow-sm text-black">
                    <div class="card-body">
                        <h2 class="card-title font-arvo">Responden</h2>
                        <div class="bg-white">
                            <canvas id="responseChart"></canvas>
                        </div>
                    </div>
                </div>
                {{-- <div class="card bg-white shadow-sm text-black">
                    <div class="card-body">
                        <h2 class="card-title font-arvo">Answer</h2>
                        <p>Jumlah jawaban yes: {{ $countSecondAnswerYes }} <br> Jumlah jawaban no: {{ $countSecondAnswerNo }}</p>
                    </div>
                </div> --}}
            </div>
            <div class="overflow-x-auto">
                <h1 class="font-arvo font-bold text-2xl">{{ __('messages.dashboard_table') }}</h1>
                <table id="myTable" class="display font-arvo border-black border-2 w-full">
                    <thead>
                        <tr>
                            <th></th>
                            <th>{{ __('messages.email') }}</th>
                            <th>{{ __('messages.name') }}</th>
                            <th>{{ __('messages.gender') }}</th>
                            <th>{{ __('messages.age') }}</th>
                            <th>{{ __('messages.affiliation') }}</th>
                            <th>{{ __('messages.job') }}</th>
                            <th>{{ __('messages.education') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($responden as $no => $repon)
                            <tr>
                                <td>{{ $no+1 }}</td>
                                <td>{{ $repon->email_responden }}</td>
                                <td>{{ $repon->name_responden }}</td>
                                <td>{{ $repon->gender_responden }}</td>
                                <td>{{ $repon->age_responden }}</td>
                                <td>{{ $repon->affiliation_responden }}</td>
                                <td>{{ $repon->job_responden }}</td>
                                <td>{{ $repon->education_responden }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    @vite(['resources/js/datatable.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('responseChart').getContext('2d');
            
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: @json($chartData->pluck('date')),
                    datasets: [{
                        label: 'Respondents Over Time',
                        data: @json($chartData->pluck('count')),
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: 'Respondents'
                            }
                        },
                        x: {
                            title: {
                                display: true,
                                text: 'Date'
                            }
                        }
                    }
                }
            });
        });
    </script>
    <script>
        window.addEventListener('load', function() {
            document.getElementById('loading-screen').classList.add('hidden');
            document.getElementById('app').classList.remove('hidden');
        });
    </script>
    <script>
        import DataTable from 'datatables.net-dt';

        let table = new DataTable('#myTable', {
            // config options...
        });
    </script>
@endpush