<?php

namespace App\Http\Controllers;

use App\Models\Food;


class FoodController extends Controller
{
    public function index(){
        $food = Food::all();
        return view('foods.index',compact('foods'));
    }
    public function view($id){
       
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
        
    }
}
