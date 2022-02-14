@extends('layouts.app')

@section('content')



   
    <div class="flex flex-row">
        @include('employee.sidebar')
        <div class="col-md-8 pl-5">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                    {{ __('Welcome to the Employee Management System!') }}
                </div>
            </div>
        </div>
    </div>

@endsection
