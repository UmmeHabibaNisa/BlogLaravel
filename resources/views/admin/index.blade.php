@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(Auth::check())
                            You are logged in as {{Auth::user()->name}}
                    @endif
                    <!-- {{ __('You are logged in!') }} -->
                        <br><br>

                        <span>
                            <a type="submit" href="{{ route('admin.create') }}" class="btn btn-primary">Add New</a>
                            {{--<a type ="button" href="\addnew" class="btn btn-dark">Add New</a>--}}
                        </span>
                        <br><br>
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Index</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Description</th>
                                <th scope="col">Image</th>
                                <th scope="col"></th>

                            </tr>
                            </thead>
                            @foreach ($blogs as $key=> $blog)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ isset($blog->cat)?$blog->cat->category_name:'' }}</td>
                                    <td>{{ $blog->description }}</td>
                                    <td>
                                        <img style="width: 168px; height: 95px;" src="{{ asset('/upload/'.$blog->image) }}">
                                    </td>
                                    <td>
                                        {{--<a class="btn btn-info" href="{{ route('admin.blogs.show',$blog->id) }}">Show</a>--}}
                                        <a class="btn btn-info" href="{{ route('admin.edit',$blog->id) }}">Edit</a>
                                        <a  href="{{ route('admin.delete',$blog->id) }}" class="btn btn-danger">Delete</a>

                                        {{--<button type="submit" class="btn btn-primary">Edit</button>
                                        <button type="submit" class="btn btn-primary">Delete</button>--}}
                                    </td>
                                </tr>
                            @endforeach

                        </table>
                        {{ $blogs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
