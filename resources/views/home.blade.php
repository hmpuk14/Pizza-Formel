@extends('layouts.app')

@section('content')
    <div class="container my-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if(session('error'))
                            @php
                                $errorMessages = explode('. ', session('error'));
                            @endphp

                            @foreach($errorMessages as $errorMessage)
                                <div class="alert alert-secondary">
                                    {{ $errorMessage }}
                                </div>
                            @endforeach
                        @endif

                        {{ __('') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
