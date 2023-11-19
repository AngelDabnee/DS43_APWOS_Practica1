@extends('layouts.main')
@section('body')
<div class="container-fluid">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="row">
        <div id = "opcionesUsuario" class="col-12">
            <h1 class = "py-1">Usuarios</h1>
            <a class = "btn btn-success mr-5" href="{{route ('users.create')}}">Añadir</a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead class="text-center">
            <th>#</th>
            <th>Nombre</th>
            <th>Nivel de Acceso</th>
            <th>Telefono de Contacto</th>
            <th>Correo de Contacto</th>
            <th>Imagen</th>
            <th>Opciones</th>
        </thead>
        @foreach ($users as $user )
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->permission_id}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->email}}</td>
                <td><img id = "imgUsuarios" class="img-fluid text-center" src="{{$user->image}}" alt=""></td>
                <td>
                    <a class = "btn btn-sm btn-info" href="{{route('users.view',$user)}}">Ver</a>
                    <a class = "btn btn-sm btn-danger" href="{{route('users.delete',$user)}}">Eliminar</a>
                </td>
            </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
@endsection