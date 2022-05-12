<?php

namespace App\Http\Controllers;

use App\Models\IdType;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index(){
        $search=request()->search;
        $users= User::where('name','like','%'.$search.'%')
                            ->orderBy('updated_at', 'desc')
                            ->paginate(10);
        return view("users.index", [
            "users" => $users
        ]);
    }

    public function create(){
        $idTypes = IdType::all();
        $userTypes = UserType::all();
        return view("users.create",compact('idTypes','userTypes'));
    }

    public function store(){
        $users = request()->validate([
            'id_type_id'=>'required|exists:id_types,id',
            'document'=>'required|numeric',
            'name'=>'required|max:100',
            'lastname'=>'required|max:100',
            'phone'=>'required|numeric|digits:10',
            'email'=>'required|email',
            'password'=>'required|min:6|confirmed',
            'user_type_id'=>'required|exists:user_types,id',
        ]);
        $users['password'] = Hash::make($users['password']);
        
        User::create($users);
        return redirect('/users');
    }

    public function show($user){
        $user= User::find($user);
        return view("users.show", [
            "user" => $user
        ]);
    }

    public function edit($user){
        $user = User::find($user);
        $idTypes = IdType::all();
        $userTypes = UserType::all();
        return view("users.edit", compact('user','idTypes','userTypes'));
    }

    public function update($user){
        $datos = request()->validate([
            'id_type_id'=>'required|exists:id_types,id',
            'document'=>'required|numeric',
            'name'=>'required|max:100',
            'lastname'=>'required|max:100',
            'phone'=>'required|numeric|digits:10',
            'email'=>'required|email',
            'user_type_id'=>'required|exists:user_types,id',
        ]);
            if(request('password')){
                request()->validate([
                    'password'=>'min:6',
                ]);
                $datos['password']= Hash::make($datos['password']);
            }
        $user = User::find($user);
        $user ->update($datos);
        return redirect('/users');
    }

    public function destroy($user){
        $user = User::find($user);
        $user ->delete();
        return redirect('/users');
    }
}
