<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Nutrient;
use App\Http\Controllers\findOrFail;
use App\Models\Composition;

class NutrientController extends Controller
{
    public function index(){
        $nutrients = Nutrient::all();
        return view('nutrients.index',compact ('nutrients'));
    }
    public function view($id){

        $nutrient = Nutrient::findOrFail($id);
        return view('nutrients.view',compact ('nutrient'));
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
        $compositions = Composition::all();

    return view('nutrients.create',compact ('compositions'));
    }
}
