@extends('layouts.main')
@section('title','view')
@section('body')
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="text-center mb-0">Añadir al Alimento</h1>
            </div>
            <hr class="hr-orange-lg">
        </div>
        <div class="row mt-3 mb-3">
            <div class="col-md-6">
                <div class="card">
                    <img class="card-img-top img-fluid" src="{{ $food->img }}" alt="IMGAlimento">
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <table class="table table-bordered">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>MicroNutriente</th>
                            <th>MacroNutriente</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$food->id}}</td>
                                <td>{{$food->name}}</td>
                                <td>{{$food->description}}</td>
                                <td>{{$food->composition->micro}}</td>
                                <td>{{$food->composition->composition_macro}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id = "accionesNutrientes" class="py-4">
                    <a class = "btn btn-success" href="{{route ('foods.list')}}">Regresar</a>
                    <a id = "updateNutrients" class = "btn btn-warning" href="{{route ('foods.update',$food->id)}}">Actualizar</a>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
@endsection