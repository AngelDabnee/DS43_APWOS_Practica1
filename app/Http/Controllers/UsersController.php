<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index',compact('users'));
    }
    public function view(){
        return view('');
    }
    public function update(){
        return view('');
    }
    public function delete(){
        return view('');
    }
    public function terminate(){
        return view('');
    }
    public function create(){
        return view('');
    }
}
