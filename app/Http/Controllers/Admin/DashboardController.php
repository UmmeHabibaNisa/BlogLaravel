<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    /*public function index(){

        return view('admin.index');
    }*/
    public function index()
    {

        //$blogs = Blog::paginate(5);
        $blogs = Blog::with('cat')->paginate(5);
//        return $blogs;


        return view('admin.index', compact('blogs'));

    }

    public function create()

    {
        $categories = Category::all();
        return view('admin.create' ,compact('categories'));
    }

    public function store(Request $request)
    {

//        $str = "Hello world. It's a beautiful day.";


        $request->validate([
            'title' => 'required',
            'description' => 'required',

        ]);

        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $name=time() . '.' . $file->getClientOriginalName();
                $file->move(public_path('/upload'),$name);
                $images[]=$name;
            }
        }
//        $tags=array();

        $file_name = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $file_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/upload'), $file_name);
        }

        $tags = explode(",",$request->tags);
        /*dd($tags);*/
        $blog = new Blog();
        $blog->user_id = 1;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->category = $request->category;
        $blog->tags =json_encode($tags);
        $blog->image = $file_name;
        $blog->gallery= json_encode($images);
        $blog->save();

        return redirect('admin/dashboard')
            ->with('success', 'Blog created successfully');


    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $blog = Blog::findOrFail($id);

        return view('admin.edit', compact('blog'));
    }


    /** Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $blog->update($request->all());

        return redirect('admin/dashboard')
            ->with('success', 'Blog updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();

        return redirect('admin/dashboard')
            ->with('success', 'Blog deleted successfully');
    }
}
