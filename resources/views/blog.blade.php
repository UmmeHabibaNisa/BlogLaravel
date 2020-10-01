@extends('layouts.app')
@section('content')

@if (Route::has('login'))
    <div class="top-right links">
        @auth
            @if (Auth::user()->role->id==1)
                <div style=" float:right; margin: 0px 50px 0px 0px;">
                    <a class="btn btn-dark" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </div>

            @else (Auth::user()->role->id==2)
                <div class="container" style="background-color: #95c5ed; padding: 30px;">
                    You are logged in as {{Auth::user()->name}}
                </div>

                {{--<a href="/user">Read The Blogs</a>--}}
            @endif
            {{--<a href="{{ url('/home') }}">Home</a>--}}
        {{--@else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif--}}
        @endauth
    </div>
@endif
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
