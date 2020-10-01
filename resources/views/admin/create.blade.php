@extends('layouts.app')

@section('content')
    <div class="container">
        {{--<div style="float: left;">

        </div>--}}
        <div class="row justify-content-center">
            <div class="col-md-8">
                <select class="custom-select custom-select-lg mb-3">
                    <option selected>Choose your blog type</option>
                    <option value="1">Travel</option>
                    <option value="2">Food</option>
                    <option value="3">Technology</option>
                </select>
                <h4>What would be the title of your blog?</h4>

                <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <h4>Title:</h4>
                                <input type="text" name="title" class="form-control" placeholder="title">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <h3>Image</h3>
                                <input type="file" class="form-control-file" name="image">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <textarea class="form-control" style="height:150px" name="description"
                                          placeholder="Description"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-info">Submit</button>
                            <a class="btn btn-info" href="/admin/dashboard">Back</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection



