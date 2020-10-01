<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    /*public function index(){

        return view('admin.index');
    }*/
    public function index()
    {
        $blogs = Blog::latest()->paginate(5);

        return view('admin.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
//        return $request->all();

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $blog = new Blog;
        $blog->user_id = 1;
        $blog->title = $request->title;
        $blog->description = $request->description;
//        $blog->image = $request->image;
        $blog->save();

        return redirect('admin/dashboard')
            ->with('success','Product created successfully');


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

        return view('admin.edit',compact('blog'));
    }


     /** Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
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
            ->with('success','Product updated successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
         $blog = Blog::findOrFail($id);

         $blog->delete();

         return redirect('admin/dashboard')
             ->with('success','Product deleted successfully');
     }


}
