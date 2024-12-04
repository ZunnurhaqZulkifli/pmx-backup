@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('backups.run-backup')}}" method="get">
                        @csrf
    
                        <div class="p-6 text-gray-900 dark:text-gray-100">
                            {{ __("Selamat Datang !") }}

                            <div class="row">
                                <div class="col-3">
                                    <button class="btn btn-danger">
                                        {{ __('Run Backup Now') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
