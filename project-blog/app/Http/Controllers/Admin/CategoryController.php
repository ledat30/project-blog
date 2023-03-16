<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('Admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('Admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ]
        );

        $slug = Str::slug($request->name);

        $checkSlug = Category::where('slug', $slug)->first();

        while($checkSlug) {
            $slug = $checkSlug->slug . Str::random(2);
        }

        Category::create([
            'name' => $request->name,
            'slug' => $slug
        ]);

        return redirect()->route('admin.category.index')->with('success', 'create successfully');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('Admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'name' => 'required'
            ]
        );

        $slug = Str::slug($request->name);

        $checkSlug = Category::where('slug', $slug)->first();

        while($checkSlug) {
            $slug = $checkSlug->slug . Str::random(2);
        }

        Category::where('id', $id)->update([
            'name' => $request->name,
            'slug' => $slug
        ]);


        return redirect()->route('admin.category.index', $id)->with('success', 'create successfully');
    }

    public function delete($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->route('admin.category.index')->with('success', 'deleted successfully');
    }
}

