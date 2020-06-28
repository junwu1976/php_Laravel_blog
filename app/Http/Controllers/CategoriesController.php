<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\CreateCategoryRequest;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index')->with('categories',$categories);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function save(CreateCategoryRequest $request)
    {

        Category::create([
            'name' => $request->name
        ]);

        session()->flash('success', 'Category created successfully.');

        return redirect('/categories');
    }

    public function show(Category $category)
    {
        //dd($category);
        return view('categories.show')->with('category',$category);
    }

    public function destory(Category $category)
    {
        $category->delete();
        session()->flash('success', 'Category deleted successfully.');
        return redirect('/categories');
    }

    public function edit(Category $category)
    {
        // dd($category);
        return view('categories.edit')->with('category',$category);
    }

    public function update(Category $category)
    {
        $this->validate(request(),[
            'name' => 'required'
        ]);
        $data = request()->all();
        $category->name = $data['name'];
        $category->save();
        session()->flash('success','Category updated successfully.');
        return redirect('/categories');
    }

}
