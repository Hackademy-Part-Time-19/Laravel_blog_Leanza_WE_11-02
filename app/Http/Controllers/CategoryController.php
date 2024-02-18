<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('view-category.category-index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('view-category.form-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {

        Category::create($request->validated());

        return redirect()->back()->with('success', 'Categoria creata con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('view-category.form-edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCategoryRequest $request, Category $category)
    {
        $newCategory = $request->validated();
        $category->update(["name" => $newCategory['name']]);
        return redirect()->back()->with('success', 'Categoria modificata con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('deleted', 'Categoria eliminata con successo');
    }
}
