@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                                @foreach($backups as $backup)
                                    <div class="p-6 text-gray-900 dark:text-gray-100">
                                        <div class="flex justify-between">
                                            <div>
                                                <h3 class="font-semibold text-lg">{{ $backup->name }}</h3>
                                                <p class="text-sm">{{ $backup->created_at->diffForHumans() }}</p>
                                            </div>
                                            <div>
                                                {{-- <a href="{{ route('backups.download', $backup) }}" class="text-blue-500 dark:text-blue-400">Download</a> --}}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection