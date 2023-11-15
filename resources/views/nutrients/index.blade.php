@extends('layouts.main')
@section('body')

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class = "py-1">Nutrientes</h1>
    
        </div>
        <div id = "btnAñadirNutrients" class="col-4 text-center py-2">
            <a class = "btn btn-success" href="{{route ('nutrients.create')}}">Añadir</a>
        </div>
    </div>
    
    <table class = "table table-bordered ">
        <thead>
            <th>#Identificador</th>
            <th>Alimento</th>
            <th>Composición MacroNutriente</th>
            <th>Composición MicroNutriente</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($nutrients as $nutrient)
            <tr>
                <!--Realizamos un cambio de acomodo, para mostrarlo con relación. -->
                <td>{{$nutrient->id}}</td>
                <td>{{$nutrient->composition->name}}</td>
                <td>{{$nutrient->composition->composition_macro}}</td>
                <td>{{$nutrient->composition->micro}}</td>
                <td>{{$nutrient->description}}</td>
                <td>
                <a class = "btn btn-sm btn-info" href = "{{route('nutrients.view',$nutrient)}}">Ver</a>
                <a class = "btn btn-sm btn-danger" href = "{{route('nutrients.delete',$nutrient)}}">Eliminar</a>    
                </td>
            <tr>    
            @endforeach
        </tbody>
    </table>
</div>
@endsection