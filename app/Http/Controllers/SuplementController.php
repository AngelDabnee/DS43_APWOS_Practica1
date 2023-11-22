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
        return view('suplements.view',compact ('suplements'));
    }
    public function update($id){
        return view('suplements.update',compact('suplements'));
    }
    public function delete(){
        return view('suplements.delete');
    }
    public function terminate(){
        return view('suplements.terminate');
    }
    public function create(){
        $suplements = Suplement::all();
        return view('suplements.create',compact('suplements'));
    }
}
