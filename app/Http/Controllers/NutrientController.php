<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NutrientController extends Controller
{
    public function index(){
        return view('nutrients.index');
    }
    public function view(){
        return view('nutrients.view');
    }
    public function update(){
        return view('nutrients.update');
    }
    public function delete(){
        return view('nutrients.delete');
    }
    public function terminate(){
        return view('nutrients.terminate');
    }
    public function create(){
        return view('nutrients.create');
    }
}
