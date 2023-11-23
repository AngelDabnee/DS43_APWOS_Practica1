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
}
