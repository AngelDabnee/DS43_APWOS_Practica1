<?php

namespace App\Http\Controllers;

use App\Models\Composition;
use App\Models\Food;
use Illuminate\Http\Request;

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
    public function store(Request $request){
        //dd($request);
        $validated = $request->validate([
            'name' => 'required',
            'img' => 'required',
            'description' =>'required',
            'composition_id' => 'required|numeric',
        ],['composition_id.numeric'=>'No se permite modificar los valores asignados',
        'name.required' => 'Necesita capturar todos los campos',
        'img.required' => 'Necesita capturar todos los campos',
        'description.required' => 'Necesita capturar todos los campos',
    ]);

        return redirect(route('foods.create'));
    }
}
