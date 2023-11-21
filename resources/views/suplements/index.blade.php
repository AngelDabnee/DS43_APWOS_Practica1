@extends('layouts.main')
@section('titile','index')
@section('body')
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container-fluid">
        <div class="row">
            <div id = "opcionesFood" class="col-12">
                <h1 class="text-base text-center">Suplementos Nutricionales</h1>
                <a class = "btn btn-success" href="{{route ('suplements.create')}}">Crear Nuevo</a>
            </div>
        </div>
        <hr class="hr-orange-lg">
        <div class="col-12">
            <div class="card mt-3 mb-3">
                <div class="table-responsive">
                    <table id = "tablaSuplements" class="table table-bordered">
                        <thead>
                            <th>ID</th>
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
                                    <td>{{$suplement->id}}</td>
                                    <td>{{$suplement->name}}</td>
                                    <td>{{$suplement->type}}</td>
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>


@endsection