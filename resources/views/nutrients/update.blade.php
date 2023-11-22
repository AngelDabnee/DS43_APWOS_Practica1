@extends('layouts.main')

@section('title','update')

@section('body')
<div class="container">
    <div class="col-8">
        <h1 class="text-center mt-3">Modificar</h1>
    </div>
    <div class="col-4">
        <a class = "btn btn-success" href="{{route ('nutrients.list')}}">Regresar</a>            
    </div>    
    <hr class="hr-orange-lg">
    <div class="row mt-2 text-center">
        <div class="col-7 text-center mb-2">
            <img src="https://thefoodtech.com/wp-content/uploads/2023/07/alimentos-saludables.jpg" class="img-fluid">
        </div>
        <div class="col-5 card text-center mb-2">
            <form action="POST" method="{{route('nutrients.store')}}">
                @csrf
                <label>Selecciona un Alimento del Ábanico de Posibilidades</label>
                <select name="food_id" class="form-control">
                    <option>Selecciona el Alimento</option>
                    @foreach ($foods as $food)
                        <option value = "{{$food->id}}">{{$food->name}}</option>
                    @endforeach
                </select>
                <label>Composición Nutricional</label>
                <select name="composition_id" class="form-control">
                    <option>Seleccione el Componente Nutricio</option>
                    @foreach ($compositions as $composition)
                        <option>{{$composition->name}}</option>
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