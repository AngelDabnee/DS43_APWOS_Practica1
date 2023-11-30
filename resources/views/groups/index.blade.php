@extends('layouts.main')
@section('body')
<div class="container">
    <div class="row">
        <div id = "opcionesFood" class="col-12">
            <h1 class="text-base text-center">Grupos de Alimentos</h1>
            <a class = "btn btn-success" href="{{route ('groups.create')}}">Crear Nuevo</a>
        </div>
    </div>
    <hr class="hr-orange-lg">
    <div class="row">
        <div class="col-8 px-3">
            <div class="card mt-3 mb-3">
                <table class="table table-bordered">
                    <thead>
                        <th>Grupo de Alimento</th>
                        <th>Alimentos</th>
                        <th>Opciones</th>
                    </thead>
                    <tbody>
                        @foreach ($groupFood as $groups)
                            <tr>
                                <td>{{$groups->name}}</td>
                                <td>{{$groups->food->name}}</td>
                                <td>
                                    <a class = "btn btn-info" href="{{route('groups.view',$groups)}}">Ver</a>
                                    <a class = "btn btn-danger" href="{{route('groups.delete',$groups)}}">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-4 mt-3 text-center">
            <div id = "carruselFoods" class="carousel slide" data-ride = "carrusel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img id = "imagenCarruselGrupos1" src="https://alimentacionsaludable.elika.eus/wp-content/uploads/sites/12/2018/12/grupos.jpg" class="img-fluid d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img id = "imagenCarruselGrupos2" class="img-fluid d-block w-100" src="https://labuenanutricion.com/wp-content/uploads/2020/11/verduras-grupos.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img id = "imagenCarruselGrupos3" class="img-fluid d-block w-100" src="https://nestlefamilyclub.es/sites/default/files/styles/5_2_1280px_width_/public/2019-12/grupos_alimentos_4.jpg?h=53b83772&itok=l1aKqILr" alt="Second slide">
                        </div>
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