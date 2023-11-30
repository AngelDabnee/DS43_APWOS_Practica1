@extends('layouts.main')
@section('title','Composicion Nutricia')
@section('body')
<div class="container">
    <div class="row">
        <div id = "opcionNutrientes" class="col-12">
            <h1 class = "py-1">Diccionario de Composición Nutricional</h1>
            <a class = "btn btn-success" href="{{route('compositions.create')}}">Añadir</a>
        </div>
    </div>
    <hr class="hr-orange-lg">
    <div class="row">
        <div class="col-12 m-3">
            @foreach ($compositions as $composition)
                <div class="card m-3 px-3">
                    <table id = "TablaComposicion" class="table table-bordered table-striped">
                        <thead class="thead-dark">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Opciones</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$composition->id}}</td>
                                <td>{{$composition->name}}</td>
                                <td>
                                    <a class = "btn btn-warning" href="{{route('compositions.update',$composition)}}">Actualizar</a>
                                    <a class = "btn btn-danger" href="{{route('compositions.delete',$composition)}}">Eliminar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection