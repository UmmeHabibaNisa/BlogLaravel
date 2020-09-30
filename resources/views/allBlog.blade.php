@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <br>
                <span style="padding-left: 10px;">
                    <a type ="button" href="\addnew" class="btn btn-dark">Add New</a>
                </span>
                <br>
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    {{--@foreach ($blog as $blogs)--}}
                    <tbody >
                    <tr>
                        <th scope="row"></th>
                        <td></td>
                        <td></td>

                        <td>

                            <a type ="button" class="btn btn-dark">Edit</a>
                            <a type ="button" class="btn btn-dark">Delete</a>
                        </td>

                    </tr>

                    </tbody>
                       {{-- @endforeach--}}
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
