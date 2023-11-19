@extends('layouts.main')

@section('title','view')

@section('body')
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                            <th>Composición MacroNutriente</th>
                            <th>Composición MicroNutriente</th>
                            <th>Descripción</th>
                        </thead>
                        <hr class="hr-orange-lg">
                        <tbody>
                            <tr>
                                <td>{{$nutrient->id}}</td>
                                <td>{{$nutrient->composition->name}}</td>
                                <td>{{$nutrient->composition->composition_macro}}</td>
                                <td>{{$nutrient->composition->micro}}</td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
@endsection