@extends('layouts.main')
@section('title','view')
@section('body')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a class = "btn btn-success" href="{{route ('foods.list')}}">Regresar</a>
            <h1 class="text-center mb-0">Detalles al Alimento</h1>
        </div>
        <hr class="hr-orange-lg">
    </div>
    <div class="row mt-3 mb-3 text-center">
        <div class="col-md-6 ">
            <div class="card text-center px-3">
                <img id = "imgFoods" class="card-img-top img-fluid" src="{{ $food->img }}" alt="IMGAlimento">
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <table class="table table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Composición Nutricional</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$food->id}}</td>
                            <td>{{$food->name}}</td>
                            <td>{{$food->description}}</td>
                            <td>{{$food->composition->name}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id = "accionesNutrientes" class="py-4">
                <a id = "updateNutrients" class = "btn btn-warning" href="{{route ('foods.edit',$food->id)}}">Actualizar</a>
            </div>
        </div>
    </div>    
</div>
@endsection