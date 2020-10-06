@extends('layouts.app')

@section('content')
    <div class="container">
        {{--<div style="float: left;">

        </div>--}}
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h4>What would be the title of your blog?</h4>

                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <select name="category" class="custom-select custom-select-lg mb-3">
                        <option selected>Choose your blog type</option>
                        @foreach($categories as $category)
                            <option value="{{  $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <h4>Title:</h4>
                                <input type="text" name="title" class="form-control" placeholder="title">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <h3>Featured Image</h3>
                                <input type="file" class="form-control-file" name="image" >
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <textarea class="form-control" style="height:150px" name="description"
                                          placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <h3>Images</h3>
                                <input type="file" class="form-control-file" name="images[]" multiple="multiple">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Tags:</strong>
                               {{-- @foreach()--}}
{{--                                <input class="form-control" type = "text" name="tags[]"--}}
{{--                                          placeholder="Tags">--}}
                                    {{--@endforeach--}}
                                <input name="tags" type="text" value="" class="tags" />

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">

{{--                            <input type=submit" class="btn btn-info" value="Submit">--}}
                            <button type="submit" class="btn btn-info">Submit</button>
                            <a class="btn btn-info" href="/admin/dashboard">Back</a>
                            <a class="btn btn-info" href="{{route('admin.categories.index')}}">Category</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection



