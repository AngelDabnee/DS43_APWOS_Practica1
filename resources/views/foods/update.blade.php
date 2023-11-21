@extends('layouts.main')

@section('title','update')

@section('body')
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container-fluid">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a class = "btn btn-success" href="{{route ('foods.view',$foods)}}">Regresar</a>
            <h1 class="text-center mb-0">Actualizar al Alimento</h1>
        </div>
        <hr class="hr-orange-lg">
        <div class="row">
            <div class="col-6 mb-3 mt-3">
                <div class="card text-center mb-2">
                    <form action="POST" method="{{route('foods.store')}}">
                        @csrf
                        <label>Nombre</label>
                        <input class = "form-control" type="text" name="name" placeholder="{{$foods->name}}" required>
                        <label>Imagen</label>
                        <input class = "form-control" type="text" name="name" placeholder="URL de Imagen" required>
                        <label>Descripción</label>
                        <input class = "form-control" type="text" name="name" placeholder="{{$foods->description}}" required>
                        <label>MicroNutriente</label>
                        <select class="form-control" name="composition_id" id="" required>
                            <option value="">Selecciona la Composición</option>
                            @foreach ($compositions as $composition)
                                <option value="{{$composition->micro}}">{{$composition->micro}}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
                    </form>
                </div>
            </div>
            <div class="col-6 text-center mb-3 mt-3">
                <img id = "imgActualizarFood" class = "img-fluid" src="https://www.laloncherademihijo.org/padres/images/47/1.jpg" alt="">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
@endsection