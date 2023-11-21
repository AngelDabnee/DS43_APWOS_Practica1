@extends('layouts.main')
@section('titile','create')
@section('body')
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
                <a class = "btn btn-success" href="{{route ('groups.list')}}">Regresar</a>
                <h1 class="text-center mb-0">Añadir Grupo Alimenticio</h1>
            </div>
            <hr class="hr-orange-lg">
        </div>
        <div class="row">
            <div class="col-6">
                <form action="POST" method="{{route('groups.store')}}">
                    @csrf
                    <div class="card py-3 text-center">
                        <label>Nombre</label>
                        <input type="text" name = "name" class="form-control" required>
                        <label>Alimento</label>
                        <select name="food_id" id="" class = "form-control" required>
                            <option value="">Selecciona un Alimento</option>
                            @foreach ($foods as $food)
                                <option value="{{$food->id}}">{{$food->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
                </form>
            </div>
            <div class="col-6 mb-3">
                <div class="card text-center">
                    <img src="https://hips.hearstapps.com/es.h-cdn.co/quoes/images/salud/50-alimentos-mas-saludables/940448-1-esl-ES/50-alimentos-mas-saludables-de-la-historia.jpg?crop=1.00xw:0.503xh;0,0.0847xh&resize=1200:*" alt="">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>


@endsection