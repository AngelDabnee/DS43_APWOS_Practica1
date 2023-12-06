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
    public function edit($id){
        $foods = Food::find($id);
        $compositions = Composition::all();
        return view('foods.create',compact('foods','compositions'));
    }
    public function update(Request $request){
        $validated = $request->validate([
            'id'=>'required|numeric',
            'name' => 'required',
            'img' => 'required',
            'description' =>'required',
            'composition_id' => 'required|numeric',
        ],['composition_id.numeric'=>'No se permite modificar los valores asignados',
        'id.required'=>'No se permite modificar los valores asignados',
        'name.required' => 'Necesita capturar todos los campos',
        'img.required' => 'Necesita capturar todos los campos',
        'description.required' => 'Necesita capturar todos los campos',
    ]);
        $foods = Food::findOrFail($validated['id']);
        
            $foods->name=$validated['name'];
            $foods->img=$validated['img'];
            $foods->description= $validated['description'];
            $foods->composition_id=$validated['composition_id'];
            $foods->save();
        
        //dd($foods);
        return redirect(route('foods.edit',$foods->id));
    }
    public function delete(Request $request){
        $validated = $request->validate([
            'id'=>'required|numeric',
        ],[
        'id.numeric'=>'No se permite modificar los valores asignados',
        'id.required'=>'No se permite modificar los valores asignados',
    ]);
    $foods = Food::findOrFail($validated['id']);
    $foods->delete();
        return redirect()->back();
    }


    public function terminate(Request $request){
        $validated = $request->validate([
            'id'=>'required|numeric',
        ],[
        'id.numeric'=>'No se permite modificar los valores asignados',
        'id.required'=>'No se permite modificar los valores asignados',

    ]);
    $foods = Food::findOrFail($validated['id']);
        
    $foods->status = 0;
    $foods->save();
        return redirect()->back();
    }



    public function create(){
        $foods = Food::all();
        $compositions = Composition::all();  
        return view('foods.create',compact('compositions','foods'));
        
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
        $foods = Food::create([
            'name'=> $validated['name'],
            'img'=> $validated['img'],
            'description'=> $validated['description'],
            'composition_id'=>$validated['composition_id']
        ]);
        //dd($foods);
        if($foods){
            return redirect(route('foods.list'));

        }else{
            return redirect(route('foods.create'));
        }
    }
}
