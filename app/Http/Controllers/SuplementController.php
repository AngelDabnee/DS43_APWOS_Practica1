<?php

namespace App\Http\Controllers;
use App\Models\Suplement;
use App\Models\TypeSuplement;

use Illuminate\Http\Request;

class SuplementController extends Controller
{
    public function index(){
        $suplements = Suplement::all();
        return view('suplements.index',compact('suplements'));
    }
    public function view($id){
        $suplements = Suplement::find($id);
        return view('suplements.view',compact ('suplements'));
    }
    public function update($id){
        $suplements = Suplement::find($id);
        $typesSuplement = TypeSuplement::all();
        return view('suplements.update',compact('suplements','typesSuplement'));
    }
    public function delete(){
        return view('suplements.delete');
    }
    public function terminate(){
        return view('suplements.terminate');
    }
    public function create(){
        $suplements = Suplement::all();
        $types = TypeSuplement::all();
        return view('suplements.create',compact('suplements', 'types'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required',
            'type_id' => 'required|numeric',
            'effects'=>'required',
            'benefits'=>'required',
            'dosis'=>'required',
            'risk'=>'required',
            'img'=>'required',
        ],[
            'name.required'=>'Debe capturar el nombre',
            'type_id.numeric'=>'No se permite modificar los valores asignados',
            'effects.required'=>'Debe capturar el campo',
            'benefitis.required'=>'Debe capturar el campo',
            'dosis.required'=>'Debe capturar el campo',
            'risk.required'=>'Debe capturar el campo',
            'img.required'=>'Debe capturar el campo'
        ]);
        $suplement = Suplement::create([
            'name' => $validated['name'],
            'type_id' => $validated['type_id'],
            'effects' => $validated['effects'],
            'benefits' => $validated['benefits'],
            'dosis' => $validated['dosis'],
            'risk' => $validated['risk'],
            'img' => $validated['img']
        ]);
        if($suplement){
            return redirect(route('suplements.list'));
        }else{}
        return redirect(route('suplements.create'));
    }
}
