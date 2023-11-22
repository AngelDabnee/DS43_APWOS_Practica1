<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    public function index(){
        $users = User::all();
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
}
