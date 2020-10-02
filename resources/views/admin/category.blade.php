@extends('layouts.app')

@section('content')

    <div style="float: right;">
        <a class="btn btn-info" href="/admin/dashboard" >Back</a>
    </div>
<div style="padding-top: 50px" class="container">
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <h2>Choose your category</h2><br>
            <input type="text" name="category_name" class="form-control" placeholder="category">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-info">Submit</button>
        </div>
    </form><br><br>

   @foreach ($categories as $category)
    <ul>
        <li>{{ $category->category_name }}
            <span>
            <form action="{{ route('admin.categories.destroy',$category->id) }}" method="POST">

               {{-- <a class="btn btn-info" href="{{ route('admin.categories.show',$category->id) }}">Show</a>--}}

                {{--<a class="btn btn-primary" href="{{ route('admin.categories.edit',$category->id) }}">Edit</a>--}}

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
           {{-- <a  --}}{{--href="{{ route('admin.categories.edit',$category->id) }}"--}}{{-- class="btn btn-info">Edit</a>--}}
            {{--<a  href="{{ route('admin.categories.destroy',$category->id) }}" class="btn btn-danger">Delete</a>--}}
        </span>
        </li>
    </ul>
   @endforeach
</div>
@endsection

