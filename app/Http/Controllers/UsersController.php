<?php

namespace App\Http\Controllers;

use App\Models\Access;
use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    public function index(){
        $users = User::get();
      
        return view('users.index',compact('users'));
    }
    public function view($id){
        $user = User::findOrFail($id);
        return view('users.view',compact('user'));
    }
    public function update($id){
        $user = User::findOrFail($id);
        $permissions = Permission::all();
        return view('users.update',compact('permissions','user'));
    }
    public function delete(){
        return view('users.delete');
    }
    public function terminate(){
        return view('users.terminate');
    }
    public function create(){
        $permissions = Permission::all();

        return view('users.create',compact('permissions'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name'=>'required',
            'image'=>'required',
            'phone'=>'required|numeric',
            'email'=>'required',
            'password'=>'required',
            'permission_id'=>'required'
        ],[
            'name.required'=>'Se espera un nombre valido',
            'image.required'=>'Se espera una imagen valida',
            'phone.required|numeric'=>'Solo Numeros',
            'email.required'=>'Se espera un correo valido',
            'password.required'=>'Se espera una contraseña',
            'permission_id.required'=>'No se permite modificar los valores asignados'
        ]);
        $user = User::create([
            'name'=>$validated['name'],
            'image'=>$validated['image'],
            'phone'=>$validated['phone'],
            'email'=>$validated['email'],
            'password'=>$validated['password'],
            'permission_id'=>$validated['permission_id']
        ]);
        dd($user);
        if($user){
            return redirect(route('users.list'));
        }else{
            return redirect(route('users.create'));
        }
    }
}
