<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Storage;

class ProductosController extends Controller
{
    public function index(){
        $search=request()->search;
        $productos= Producto::where('nombre','like','%'.$search.'%')
                            ->orderBy('updated_at', 'desc')
                            ->paginate(15);
        return view("productos.index",[
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
            'imagen' => ['image','mimes:jpg,png'],
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
        return redirect('/productos');
    }

    public function show($producto){
        $producto= Producto::find($producto);
        return view("productos.show", [
            "producto" => $producto
        ]);
    }

    public function edit($producto){
        $producto = Producto::find($producto);
        $categorias = Categoria::all();
        return view("productos.edit", compact('producto','categorias'));
    }

    public function update($producto){
        $datos = request()->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'categoria_id'=>'required|exists:id_types,id',
            'precio'=>'required',
            'descuento'=>'required',
        ]);

        $producto = Producto::find($producto);
        $producto ->update($datos);
        return redirect('/productos');
    }

    public function destroy($producto){
        $producto = Producto::find($producto);
        $producto ->delete();
        return redirect('/productos');
    }
}
