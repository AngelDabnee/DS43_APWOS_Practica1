@extends('layouts.main')

@section('title','create')

@section('body')
<div class="container">
    <h1 class="text-center py-2">Añadir uno Nuevo.</h1>
    <div class="row mt-2 text-center">
        <div class="col-7 text-center py-4 mb-3">
            <img src="https://thefoodtech.com/wp-content/uploads/2023/07/alimentos-saludables.jpg" class="img-fluid">
        </div>
        <div class="col-5 card text-center">
            <form action="POST">
                <label>Alimento</label>
                <input type="text" name="name" class="form-control">
                <label>Composición Nutricional de MacroNutriente</label>
                <select name="composition_id" class="form-control">
                    <option>Seleccione el MacroNutriente</option>
                    @foreach ($compositions as $composition)
                        <option>{{$composition->composition_macro}}</option>
                    @endforeach
                </select>
                <label>Composición Nutricional de MicroNutriente</label>
                <select name="micro" class="form-control">
                    <option>Seleccione el MicroNutriente</option>
                    @foreach ($compositions as $composition)
                        <option>{{$composition->micro}}</option>
                    @endforeach
                </select>
                <button class="btn btn-lg btn-success mt-3" type="submit">Añadir</button>
            </form>
        </div>
    </div>
</div>

@endsection