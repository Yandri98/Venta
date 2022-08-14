<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Request\Category\StoreRequest; //Importamos las clases
use App\Http\Request\Category\UpdateRequest;

class CategoryController extends Controller
{
    
    public function index() //Visualizar las categorias
    {
        $categories = Category::get();
        return view('admin.category.index', compact('categories'));
    }
    public function create() //Crear las categorias
     {
        return view('admin.category.create');
    }

    public function store (StoreRequest $request) //Se crea la nueva categoria 
    {
        Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function show(Category $category) //Se retorna una vista
    {
        return view('admin.category.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    public function update (UpdateRequest $request, Category $category) //Actualizamos la tabla categoria 
    {
        $category::update($request->all());
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
