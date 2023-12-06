@extends('layouts.main')
@section('body')
<div class="container-fluid">
    <div class="row">
        <div id = "opcionesFood" class="col-12">
            <h1 class="text-base text-center">Ábanico de Alimentos</h1>
            <a class = "btn btn-success" href="{{route ('foods.create')}}">Crear Nuevo</a>
        </div>
    </div>
    <hr class="hr-orange-lg">
    <div class="row mt-3 mb-3">
        <div class="col-12">
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
                                <form action="POST" method="{{route('foods.terminate')}}">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="id" value="{{$food->id}}">
                                    <button type="submit" class= "btn btn-danger">Inhabilitar</button>
                                </form>
                                <form action="POST" method="{{route('foods.delete')}}">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$food->id}}">
                                    <button type="submit" class= "btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection