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
                <img src="https://lh4.googleusercontent.com/DqLTuYCo6EDwCUN-jWiduY_812mzVxKVs9HPgtyJMIPwfBwqLBlLPf4TnR0BvbdCkCjylYKGAyeNHnqs8oXQsVcKEEo8gUlaXVEQbIGSdC9a8S8bHpnayA12wq3Dbg" class="img-fluid" alt="">
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
                            <th>Opciones</th>
                        </thead>
                        <hr class="hr-orange-lg">
                        <tbody>
                            <tr>
                                <td>{{$nutrient->id}}</td>
                                <td>{{$nutrient->composition->name}}</td>
                                <td>{{$nutrient->composition->composition_macro}}</td>
                                <td>{{$nutrient->composition->micro}}</td>
                                <td>{{$nutrient->description}}</td>
                                <td><a href="#">Editar</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection