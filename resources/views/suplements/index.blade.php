@extends('layouts.main')
@section('titile','index')
@section('body')
    
<div class="container">
    <div class="row">
        <div id="opcionesFood" class="col-8">
            <h1 class="text-base text-center">Suplementos Nutricionales</h1>
        </div>
        <div class="col-4 my-auto right">
            <a class = "btn btn-success" href="{{route ('suplements.create')}}">Crear Nuevo</a>
        </div>
    </div>
    <hr class="hr-orange-lg">
    <div class="col-12">
        <div class="card px-5">
            <table id="tablaSuplements" class="table table-responsive table-bordered">
                <thead>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Efectos</th>
                    <th>Beneficios</th>
                    <th>Dosis Recomendada</th>
                    <th>Riesgos</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach ($suplements as $suplement)
                        <tr>
                            <td>{{$suplement->name}}</td>
                            <td>{{$suplement->type->name}}</td>
                            <td>{{$suplement->effects}}</td>
                            <td>{{$suplement->benefits}}</td>
                            <td>{{$suplement->dosis}}</td>
                            <td>{{$suplement->risk}}</td>
                            <td>
                                <a class = "btn btn-info" href="{{route('suplements.view',$suplement)}}">Ver</a>
                                <a class = "btn btn-danger" href="{{route('suplements.delete',$suplement)}}">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection