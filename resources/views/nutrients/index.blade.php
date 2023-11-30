@extends('layouts.main')
@section('body')

<div class="container">
    <div class="row">
        <div id = "opcionNutrientes" class="col-12">
            <h1 class = "py-1">Diccionario de la Alimentación</h1>
            <a class = "btn btn-success" href="{{route ('nutrients.create')}}">Añadir</a>
        </div>
    </div>
    
    <table class = "table table-bordered ">
        <thead>
            <th>#Identificador</th>
            <th>Alimento</th>
            <th>Composición Nutricional</th>
            <th>Descripción</th>
            <th>Opciones</th>
        </thead>
        <tbody>
            @foreach ($nutrients as $nutrient)
            <tr>
                <!--Realizamos un cambio de acomodo, para mostrarlo con relación. -->
                <td>{{$nutrient->id}}</td>
                <td>{{$nutrient->food->name}}</td>
                <td>{{$nutrient->composition->name}}</td>
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