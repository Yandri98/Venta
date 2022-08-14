<?php

namespace App\Http\Controllers;

use App\Provider;
use Illuminate\Http\Request;
use App\Http\Request\Provider\StoreRequest; //Importamos las clases
use App\Http\Request\Provider\UpdateRequest; 

class ProviderController extends Controller
{
    public function index()
    
        {
            $providers = Provider::get();
            return view('admin.provider.index', compact('providers'));
        }
        public function create() //Crear las categorias
         {
            return view('admin.provider.create');
        }
    
        public function store (StoreRequest $request) //Se crea la nueva categoria 
        {
            Provider::create($request->all());
            return redirect()->route('providers.index');
        }
    
        public function show(Provider $provider) //Se retorna una vista
        {
            return view('admin.provider.show', compact('provider'));
        }
    
        public function edit(Provider $provider)
        {
            return view('admin.provider.show', compact('provider'));
        }
    
        public function update (UpdateRequest $request, Provider $provider) //Actualizamos la tabla categoria 
        {
            $provider::update($request->all());
            return redirect()->route('providers.index');
        }
    
        public function destroy(Provider $provider)
        {
            $provider->delete();
            return redirect()->route('providers.index');
        }
}
