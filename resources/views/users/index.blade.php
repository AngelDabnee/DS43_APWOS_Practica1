@extends('layouts.main')
@section('body')
<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <h1 class = "py-1">Usuarios</h1>
    
        </div>
        <div id = "btnAñadirNutrients" class="col-4 text-center py-2">
            <a class = "btn btn-success" href="{{route ('users.create')}}">Añadir</a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>#</th>
            <th>Nombre</th>
            <th>Telefono de Contacto</th>
            <th>Correo de Contacto</th>
            <th>Imagen</th>
            <th>Opciones</th>
        </thead>
        @foreach ($users as $user )
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->image}}</td>
                <td>
                    <a class = "btn btn-sm btn-info" href="{{route('users.view',$user)}}">Ver</a>
                    <a class = "btn btn-sm btn-danger" href="{{route('users.delete',$user)}}">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection