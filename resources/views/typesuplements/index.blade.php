@extends('layouts.main')
@section('title','Tipos de Suplementos')
@section('body')
<div class="container">
    <div class="row">
        <div id="opcionesFood" class="col-8">
            <h1 class="text-base text-center">Tipos de Suplementos</h1>
        </div>
        <div class="col-4 my-auto right">
            <a class = "btn btn-success" href="{{route ('typesuplements.create')}}">Crear Nuevo</a>
        </div>
    </div>
    <hr class="hr-orange-lg">
    <div class="row">
        <div class="col-6">
            @foreach ($types as $type)
                <div class="card m-3">
                    <table id="tablaSuplementos" class="table table-bordered">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Opciones</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $type->id }}</td>
                                <td>{{ $type->name }}</td>
                                <td>
                                    <a class = "btn btn-warning" href="{{route('typesuplements.update',$type)}}">Modificar</a>
                                    <a class = "btn btn-danger" href="{{route('typesuplements.delete',$type)}}">Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
        <div class="col-6 mt-3">
            <div class="card px-3">
                <h1 class="text-base text-center mt-3">¿Por qué los Suplementos?</h1>
                <p>Los suplementos y complementos alimentarios han sido utilizados durante muchos
                    años con el fin de cubrir las demandas nutricionales que existen en determinada
                    condición fisiológica y que pondrían en riesgo la capacidad del correcto
                    funcionamiento orgánico.</p>
            </div>
            <img id = "tiposSuplementosIndex" class = "img-fluid m-2" src="https://www.alqueria.com.co/sites/default/files/styles/1100x530/public/2022-12/Suplementos%20alimenticios.png?h=2dfa7a18&itok=sU0j3OCN" alt="imgSuplementos">
        </div>
    </div>
    
</div>


@endsection
