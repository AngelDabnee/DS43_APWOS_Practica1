@extends('layouts.main')

@section('title','create')

@section('body')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a class = "btn btn-success" href="{{route ('nutrients.list')}}">Regresar</a>
        <h1 class="text-center mb-0">Añadir al Diccionario</h1>
    </div>
    <hr class="hr-orange-lg">
    <div class="row mt-2 text-center">
        <div class="col-7 text-center mb-2">
            <img src="https://thefoodtech.com/wp-content/uploads/2023/07/alimentos-saludables.jpg" class="img-fluid">
        </div>
        <div class="col-5 card text-center mb-2">
            <form method="POST" action="{{route('nutrients.store')}}">
                @csrf
                <label>Selecciona un Alimento del Ábanico de Posibilidades</label>
                <select name="composition_id" class="form-control">
                    <option>Selecciona el Alimento</option>
                    @foreach ($foods as $food)
                        <option value = "{{$food->id}}">{{$food->name}}</option>
                    @endforeach
                </select>
                <label>Composición Nutricional de MacroNutriente</label>
                <select name="composition_id" class="form-control">
                    <option>Seleccione el Componente Nutricional</option>
                    @foreach ($compositions as $composition)
                        <option value = "{{$composition->id}}">{{$composition->name}}</option>
                    @endforeach
                </select>
                <label>Descripción</label>
                <input type="text" name = "description" class="form-control">
                <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
            </form>
        </div>
    </div>

</div>

@endsection