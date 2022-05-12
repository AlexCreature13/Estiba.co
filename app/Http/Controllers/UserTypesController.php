<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserType;
use App\Models\User;

class UserTypesController extends Controller
{
    public function index(){
        $userTypes= UserType::all();
        return view("userTypes.index", [
            "userTypes" => $userTypes
        ]);
    }
    
    public function create(){
        return view("userTypes.create");
    }

    public function store(){
        request()->validate([
            'descripcion'=>'required|max:150',
            'name'=>'required|max:15',
        ]);
        UserType::create(request(['descripcion','name']));
        return redirect('/user_types');
    }

    public function show(UserType $userType){
        $search=request()->search;
        $users= User::where('name','like','%'.$search.'%')
                            ->where('user_type_id',$userType->id)
                            ->orderBy('updated_at', 'desc')
                            ->paginate(10);
        return view("userTypes.show", compact('userType','users'));
    }

    public function edit($userType){
        $userType = UserType::find($userType);
        return view('userTypes.edit',[
            'userType'=> $userType
        ]);
    }

    public function update($userType){
        request()->validate([
            'descripcion'=>'required|max:150',
            'name'=>'required|max:15',
        ]);
        $userType = UserType::find($userType);
        $userType-> descripcion =request('descripcion');
        $userType-> name =request('name');
        $userType-> save();
        return redirect('/user_types');
    }

    public function destroy($userType){
        $userType = UserType::find($userType);
        $userType ->delete();
        return redirect('/user_types');
    }
}
