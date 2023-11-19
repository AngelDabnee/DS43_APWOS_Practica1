@extends('layouts.main')
@section('body')
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container-fluid">
        <div class="row">
            <div id = "opcionesFood" class="col-12">
                <h1 class="text-base text-center">Ábanico de Alimentos</h1>
                <a class = "btn btn-success" href="{{route ('foods.create')}}">Crear Nuevo</a>
            </div>
        </div>
        <hr class="hr-orange-lg">
        <div class="row mt-3 mb-3">
            <div class="col-6">
                <div class="card mt-3 mb-3">
                    <table class="table table-bordered">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Opciones</th>
                        </thead>
                        <tbody>
                            @foreach ($foods as $food)
                            <tr>
                                <td>{{$food->id}}</td>
                                <td>{{$food->name}}</td>
                                <td>{{$food->description}}</td>
                                <td><a class = "btn btn-info" href="{{route('foods.view',$food->id)}}">Ver</a></td>
                                <td><a class = "btn btn-danger" href="{{route('foods.delete',$food->id)}}">Eliminar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class = "col-6">
                <div id = "carruselFoods" class="carousel slide" data-ride = "carrusel">
                    <div class="carousel-inner">
                        @foreach ($foods as $key => $food)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ $food->img }}" class="d-block w-100" alt="{{ $food->name }}">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carruselFoods" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carruselFoods" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
@endsection