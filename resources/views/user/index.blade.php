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
                    You are logged in as {{Auth::user()->name}}
                    <!-- {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div style="padding-top: 30px;">
                <div class="card" style="width: 18rem; ">
                    <img src="{{asset('upload/joker.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                <h5 class="card-title">Blog title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Read Details</a>
                </div>
            </div>
        </div>
        </div>
        </div>
    </div>

@endsection
