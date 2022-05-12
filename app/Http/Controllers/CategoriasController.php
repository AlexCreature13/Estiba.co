<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class CategoriasController extends Controller
{
    public function index(){
        $categorias= Categoria::all();
        return view("categorias.index", [
            "categorias" => $categorias
        ]);
    }

    public function create(){
        return view("categorias.create");
    }

    public function store(){
        request()->validate([
            'descripcion'=>'required|max:30',
        ]);
        Categoria::create(request(['descripcion']));
        return redirect('/categorias');
    }

    public function show(Categoria $categoria){
        $search=request()->search;
        $productos= Producto::where('nombre','like','%'.$search.'%') 
                            ->where('categoria_id',$categoria->id)
                            ->orderBy('updated_at', 'desc')
                            ->paginate(15);
        return view("categorias.show", compact('categoria','productos'));
    }

    public function edit($categoria){
        $categoria = Categoria::find($categoria);
        return view('categorias.edit',[
            'categoria'=> $categoria
        ]);
    }

    public function update($categoria){
        request()->validate([
            'descripcion'=>'required|max:30',
        ]);
        $categoria = Categoria::find($categoria);
        $categoria-> descripcion =request('descripcion');
        $categoria-> save();
        return redirect('/categorias');
    }

    public function destroy($categoria){
        $categoria = Categoria::find($categoria);
        $categoria ->delete();
        return redirect('/categorias');
    }
}
