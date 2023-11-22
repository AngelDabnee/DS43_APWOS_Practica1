<?php

namespace App\Http\Controllers;

use App\Models\Composition;
use App\Models\Food;


class FoodController extends Controller
{
    public function index(){
        $foods = Food::all();
        $composition = Composition::all();
        return view('foods.index',compact('foods','composition'));
    }
    public function view($id){
       $food = Food::find($id);
        return view('foods.view',compact ('food'));
    }
    public function update($id){
        $foods = Food::find($id);
        $compositions = Composition::all();
        return view('foods.update',compact('foods','compositions'));
    }
    public function delete(){
        return view('foods.delete');
    }
    public function terminate(){
        return view('foods.terminate');
    }
    public function create(){
        $compositions = Composition::all();  
        return view('foods.create',compact('compositions'));
        
    }
}
