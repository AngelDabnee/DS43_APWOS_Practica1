@extends('layouts.main')
@section('body')

<div class="container-fluid">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</div>
@endsection