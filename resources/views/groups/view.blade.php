@extends('layouts.main')
@section('title','view')
@section('body')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a class = "btn btn-success mt-3" href="{{route ('groups.list')}}">Regresar</a>
            <h1 class="text-center mb-0 mt-3">Detalles del Grupo</h1>
        </div>
        <hr class="hr-orange-lg">
    </div>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="card">
                <img id = "imgFoods" class="card-img-top img-fluid" src="{{$groupFood->food->img}}" alt="IMGAlimento">
            </div>
        </div>
        <div class="col-md-6 mb-3">
            <div class="card">
                <table class="table table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Nombre del Alimento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$groupFood->name}}</td>
                            <td>{{$groupFood->food->name}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id = "accionesNutrientes" class="py-4">
                <a id = "updateNutrients" class = "btn btn-warning" href="{{route ('groups.update',$groupFood->id)}}">Actualizar</a>
            </div>
        </div>
    </div>
</div>
@endsection