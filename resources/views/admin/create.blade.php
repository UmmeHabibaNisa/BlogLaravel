@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br><br>
                <select class="custom-select custom-select-lg mb-3">
                    <option selected>Choose your blog type</option>
                    <option value="1">Travel</option>
                    <option value="2">Food</option>
                    <option value="3">Technology</option>
                </select>
                <h4>What would be the title of your blog?</h4>

                <form action="{{ route('admin.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>title:</strong>
                                <input type="text" name="title" class="form-control" placeholder="title">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>File</strong>
                                <input type="file" name="file" class="form-control">
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
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection



