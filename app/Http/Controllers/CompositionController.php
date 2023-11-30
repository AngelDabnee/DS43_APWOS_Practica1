<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Composition;


class CompositionController extends Controller
{
    public function index(){
        $compositions = Composition::all();
        return view('compositions.index', compact('compositions'));
    }
    public function view($id){
        $compositions = Composition::findOrFail($id);
         return view('compositions.view',compact ('compositions'));
     }
     public function update($id){
        $compositions = Composition::findOrFail($id);
         return view('compositions.update',compact('compositions'));
     }
     public function delete(){
         return view('compositions.delete');
     }
     public function terminate(){
         return view('compositions.terminate');
     }
     public function create(){
         return view('compositions.create');
     }
     public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required'
        ],['name.requiered'=> 'Necesita capturar un nombre válido']);

        $composition = Composition::create([
           'name'=>$validated['name'] 
        ]);
        //dd($composition);
        if($composition){
            return redirect(route('compositions.list'));
        }else{
            return redirect(route('compositions.create'));

        }

     }
}
