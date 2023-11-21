<?php

namespace App\Http\Controllers;
use App\Models\FoodGroup;
use App\Models\Food;
use App\Models\Composition;

use Illuminate\Http\Request;

class FoodGroupController extends Controller
{
    public function index(){
        $groupFood = FoodGroup::all();
        $foods = Food::all();
        $compositions = Composition::all();
        return view('groups.index',compact('groupFood','foods','compositions'));   
    }
    public function view($id){
       $groupFood = FoodGroup::find($id);
       $foods = Food::all();
       $compositions = Composition::all();
        return view('groups.view',compact ('groupFood','foods','compositions'));
    }
    public function update($id){
        $foods = FoodGroup::find($id);
        $groupFood = FoodGroup::find($id);
        $compositions = Composition::all();
        return view('groups.update',compact('groupFood','compositions','foods'));
    }
    public function delete(){
        return view('groups.delete');
    }
    public function terminate(){
        return view('groups.terminate');
    }
    public function create(){
        $compositions = Composition::all();  
        $foods = Food::all();
        return view('groups.create',compact('foods','compositions'));
        
    }
}
