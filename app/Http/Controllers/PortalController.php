<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\User;
use App\Models\UserType;
use App\Models\IdType;
use Illuminate\Support\Facades\Storage;

class PortalController extends Controller
{
    public function index(){
        $search=request()->search;
        $productos= Producto::where('nombre','like','%'.$search.'%')
                            ->orderBy('updated_at', 'desc')
                            ->paginate(15);
        return view("portal.index",[
        "productos" => $productos
        ]);
    }

    public function create(){
        $productos= Producto::all();
        $categorias= Categoria::all();
        return view("productos.create",[
          "productos" => $productos,
          "categorias" => $categorias,
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required|max:50',
            'descripcion'=>'required|max:250',
            'categoria_id'=>'required|exists:id_types,id',
            'precio'=>'required',
            'descuento'=>'required',
            'imagen' => 'image'|'mimes:jpg,png'|'required',
            // 'imagen' => ['image','mimes:jpg,png','dimensions:min_width=400,max_width=800,min_height=400,max_height=800'],
        ]);
        $productos = $request->all();
        if( !empty($request->imagen) ){
            if ($request->imagen->isValid()) {
                $path = $request->imagen->store('storage');     
                $productos['imagen'] = $path;
            }
        }

        Producto::create($productos);
        return redirect('/');
    }

    public function show($producto){
        $producto= Producto::find($producto);
        return view("portal.show", [
            "producto" => $producto
        ]);
    }

    public function edit($producto){
        $producto = Producto::find($producto);
        $categorias = Categoria::all();
        return view("productos.edit", compact('producto','categorias'));
    }

    public function update($request){
        $producto = request()->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'categoria_id'=>'required|exists:id_types,id',
            'precio'=>'required',
            'descuento'=>'required',
            'imagen' => 'image'|'mimes:jpg,png',
            // 'imagen' => ['image','mimes:jpg,png','dimensions:min_width=400,max_width=800,min_height=400,max_height=800'],
        ]);

        $producto = $request->all();
        if( !empty($request->imagen) ){
            if ($request->imagen->isValid()) {
                $path = $request->imagen->store('storage');     
                $productos['imagen'] = $path;
            }
        }

        $producto ->update($request);
        return redirect('/');
    }

    public function destroy($producto){
        $producto = Producto::find($producto);
        $producto ->delete();
        return redirect('/');
    }
}
