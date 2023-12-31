<?php

namespace App\Http\Controllers;
use App\Models\TypeSuplement;
use Illuminate\Http\Request;

class TypeSuplementController extends Controller
{
    public function index(){
        $types = TypeSuplement::all();
        return view('typesuplements.index',compact('types'));
    }
    public function view($id){
        $types = TypeSuplement::findOrFail($id);
        return view('typesuplements.view',compact('types'));
    }
    public function update($id){
        $types = TypeSuplement::findOrFail($id);
        return view('typesuplements.update',compact('types'));
    }
    public function delete(){
        return view('typesuplements.delete');
    }
    public function terminate(){
        return view('typesuplements.terminate');
    }
    public function create(){
        $types = TypeSuplement::all();
        return view('typesuplements.create',compact('types'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required'
        ],[
            'name.required'=>'Favor de capturar un nombre valido'
        ]);
        $typeSuplement = TypeSuplement::create([
            'name'=> $validated['name']
        ]);
        if($typeSuplement){
            return  redirect(route('typesuplements.list'));
        }else{
            return redirect(route('typesuplements.create'));
        }
    }
}
