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
@foreach ($blogs as $blog)
<div class="card mb-3" style="width: 1000px; margin-left: 50px;">
    <img src="{{ asset('/upload/'.$blog->image) }}" class="card-img-top" alt="1">
    <div class="card-body">
        <h5 class="card-title">{{ $blog->title }}</h5>
        <h6>{{ isset($blog->cat)?$blog->cat->category_name:'' }}</h6>
        <p class="card-text">{{ $blog->description }}</p>


    </div>
</div>
@endforeach
</div>

    @endsection
