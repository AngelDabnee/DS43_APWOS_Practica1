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
            'name',
            'type_id',
            'effects',
            'benefits',
            'dosis',
            'risk',
            'img',
        ]);
    }
}
