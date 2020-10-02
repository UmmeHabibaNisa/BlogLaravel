<?php


namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $category = Category::all();
        return view('admin.category')->with('categories',$category);

    }
    public function create()
    {
        return view('admin.category');
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->category_name = $request->category_name;
        $category->save();

        return redirect(route('admin.categories.index' ));
    }
    public function destroy($id)
    {
        /*dd($id);*/
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect(route('admin.categories.index' ));
    }
   /* public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category', compact('category'));
    }
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect(route('admin.categories.index' ))
            ->with('success', 'Category updated successfully');
    }
    public function show($id){

    }*/
}
