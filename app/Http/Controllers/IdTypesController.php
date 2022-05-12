<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdType;

class IdTypesController extends Controller
{
    public function index(){
        $idTypes= IdType::all();
        return view("idTypes.index", [
            "idTypes" => $idTypes
        ]);
    }
    
    public function create(){
        return view("idTypes.create");
    }

    public function store(){
        request()->validate([
            'descripcion'=>'required|max:100',
            'name'=>'required|max:10',
        ]);
        IdType::create(request(['descripcion','name']));
        return redirect('/id_types');
    }

    public function show(IdType $idType){
        return view("idTypes.show", compact('idType'));
    }

    public function edit($idType){
        $idType = IdType::find($idType);
        return view('idTypes.edit',[
            'idType'=> $idType
        ]);
    }

    public function update($idType){
        request()->validate([
            'descripcion'=>'required|max:100',
            'name'=>'required|max:10'
        ]);
        $idType = IdType::find($idType);
        $idType-> descripcion =request('descripcion');
        $idType-> name=request('name');
        $idType-> save();
        return redirect('/id_types');
    }

    public function destroy($idType){
        $idType = IdType::find($idType);
        $idType ->delete();
        return redirect('/id_types');
    }
}
