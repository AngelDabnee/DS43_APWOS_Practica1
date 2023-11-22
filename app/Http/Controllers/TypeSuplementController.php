<?php

namespace App\Http\Controllers;
use App\Models\TypeSuplement;
use Illuminate\Http\Request;

class TypeSuplementController extends Controller
{
    public function index(){
        $typeName = TypeSuplement::all();
        return view('typesuplements.index',compact('typeName'));
    }
}
