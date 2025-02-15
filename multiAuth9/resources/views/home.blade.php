// https://www.itsolutionstuff.com/post/laravel-9-multi-auth-create-multiple-authentication-in-laravelexample.html
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
                    You are a User
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
