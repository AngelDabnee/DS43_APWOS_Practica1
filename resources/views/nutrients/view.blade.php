@extends('layouts.main')

@section('title','view')

@section('body')
<div class="container">
    <h1 class="text-center">Nutrientes</h1>
    <div class = "container">
        <div class = "row">
            <h3 class="text-center">La Rueda de los Nutrientes</h3>
            <hr class="hr-orange-lg">
        </div>
        <div class="row">
            <div class="col-4">
                <img src="https://lh4.googleusercontent.com/DqLTuYCo6EDwCUN-jWiduY_812mzVxKVs9HPgtyJMIPwfBwqLBlLPf4TnR0BvbdCkCjylYKGAyeNHnqs8oXQsVcKEEo8gUlaXVEQbIGSdC9a8S8bHpnayA12wq3Dbg" class="img-fluid mb-4" alt="">
            </div>
            <div class="col-8">
                <div class="card p-4 mb-3">
                    <table class="table table-bordered text-center">
                        <thead>
                            <th>#Identificador</th>
                            <th>Alimento</th>
                            <th>Composición Nutricional</th>
                            <th>Descripción</th>
                        </thead>
                        <hr class="hr-orange-lg">
                        <tbody>
                            <tr>
                                <td>{{$nutrient->id}}</td>
                                <td>{{$nutrient->food->name}}</td>
                                <td>{{$nutrient->composition->name}}</td>
                                <td>{{$nutrient->description}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id = "accionesNutrientes" class="py-4">
                    <a class = "btn btn-success" href="{{route ('nutrients.list')}}">Regresar</a>
                    <a id = "updateNutrients" class = "btn btn-warning" href="{{route ('nutrients.update',$nutrient->id)}}">Actualizar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection