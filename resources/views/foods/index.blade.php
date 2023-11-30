@extends('layouts.main')
@section('body')
<div class="container">
    <div class="row">
        <div id = "opcionesFood" class="col-12">
            <h1 class="text-base text-center">Ábanico de Alimentos</h1>
            <a class = "btn btn-success" href="{{route ('foods.create')}}">Crear Nuevo</a>
        </div>
    </div>
    <hr class="hr-orange-lg">
    <div class="row mt-3 mb-3">
        <div class="col-9">
            <div class="card px-3">
                <table class="table table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Composición Nutricia</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        @foreach ($foods as $food)
                        <tr>
                            <td>{{$food->id}}</td>
                            <td>{{$food->name}}</td>
                            <td>{{$food->description}}</td>
                            <td>{{$food->composition->name}}</td>

                            <td>
                                <a class = "btn btn-info" href="{{route('foods.view',$food)}}">Ver</a>
                                <a class = "btn btn-danger" href="{{route('foods.delete',$food)}}">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class = "col-3">
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
@endsection