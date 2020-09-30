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
        <form>
            <div class="form-group">
                <input type="text" class="form-control"  placeholder="your title" >

                <br>

                <label for="textarea">Your Blog's Description</label>
                <textarea  class="form-control" id="textarea" rows="8" cols="96" ></textarea>

            </div>
            <br>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile"  >
                <label class="custom-file-label" for="customFile">Choose Picture accordingly</label>
            </div>
        </form>
        <br>
        <a type="button" href="\home" class="btn btn-dark" @click="saveBlogDB()">Submit</a><br><br>
    </div>
        </div>
    </div>

@endsection

<script>
    function saveBlogDB() {
        $.ajax({
            type: "POST",
            url: "http://127.0.0.1:8000/storeBlog",
            data: {
                "title": document.getElementById('title').value,
                "description": document.getElementById('description').value,
                "_token": "{{ csrf_token() }}"
            },
            success: function(blog) {
                blog = JSON.parse(blog);
                var table = document.getElementById("blogs");
                var row = table.insertRow(-1);
                var cell0 = row.insertCell(0);
                var cell1 = row.insertCell(1);
                var cell2 = row.insertCell(2);
                var cell3 = row.insertCell(3);
                cell0.innerHTML = blog.title;
                cell1.innerHTML = blog.description;
                cell2.innerHTML = ;
                cell3.innerHTML = `<a href="/edit/${todo.id }">Edit </a>
                                    <a href="/delete/${todo.id }">Delete </a>`;


            },

        })
    }
</script>

