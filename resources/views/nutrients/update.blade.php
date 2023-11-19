@extends('layouts.main')

@section('title','update')

@section('body')
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <h1 class="text-center py-2">Modificar</h1>
    <hr class="hr-orange-lg">
    <div class="row mt-2 text-center">
        <div class="col-7 text-center mb-2">
            <img src="https://thefoodtech.com/wp-content/uploads/2023/07/alimentos-saludables.jpg" class="img-fluid">
        </div>
        <div class="col-5 card text-center mb-2">
            <form action="POST" method="{{route('nutrients.store')}}">
                @csrf
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
                        <option value="{{$composition->macro}}">{{$composition->micro}}</option>
                    @endforeach
                </select>
                <label>Descripción</label>
                <input type="text" name = "description" class="form-control">
                <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>

@endsection