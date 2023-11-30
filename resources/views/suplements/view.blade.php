@extends('layouts.main')
@section('title','view')
@section('body')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a class = "btn btn-success mt-3" href="{{route ('suplements.list')}}">Regresar</a>
                <h1 class="text-center mb-0 mt-3">Suplementos Detalles</h1>
            </div>
        </div>
    </div>
    <hr class="hr-orange-lg">
    <div class="row mt-3 mb-3 text-center">
        <div class="col-md-4 ">
            <div class="card text-center px-3">
                <img id = "imgFoods" class="card-img-top img-fluid" src="{{ $suplements->img }}" alt="IMGAlimento">
            </div>
        </div>
        <div class="col-8">
            <div class="card px-3">
                <table class="table table-bordered">
                    <thead>
                        <th>Nombre</th>
                        <th>Tipo</th>
                        <th>Efectos</th>
                        <th>Beneficios</th>
                        <th>Dosis Recomendada</th>
                        <th>Riesgos</th>    
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$suplements->name}}</td>
                            <td>{{$suplements->type->name}}</td>
                            <td>{{$suplements->effects}}</td>
                            <td>{{$suplements->benefits}}</td>
                            <td>{{$suplements->dosis}}</td>
                            <td>{{$suplements->risk}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id = "accionesNutrientes" class="py-4">
                <a id = "updateNutrients" class = "btn btn-warning" href="{{route ('suplements.update',$suplements)}}">Actualizar</a>
            </div>
        </div>
    </div>    
</div>



@endsection