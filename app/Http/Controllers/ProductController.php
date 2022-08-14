<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Request\Product\StoreRequest; //Importamos las clases
use App\Http\Request\Product\UpdateRequest;
use App\Provider;


class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::get();
        return view('admin.product.index', compact('products'));
    }
    public function create() //Crear las categorias
     {
        $categories =  Category::get();
        $providers = Provider::get();
        return view('admin.product.create', compact('categories','providers'));
    }

    public function store (StoreRequest $request) //Se crea la nueva categoria 
    {
        Product::create($request->all());
        return redirect()->route('products.index');
    }

    public function show(Product $product) //Se retorna una vista
    {
        return view('admin.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories =  Category::get();
        $providers = Provider::get();
        return view('admin.product.show', compact('product','categories','providers'));
    }

    public function update (UpdateRequest $request, Product $product) //Actualizamos la tabla categoria 
    {
        $product::update($request->all());
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
