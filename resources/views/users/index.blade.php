@extends('layouts.main')
@section('body')
<div class="container">
    <div class="row">
        <div id = "opcionesUsuario" class="col-12">
            <h1 class = "py-1">Usuarios</h1>
            <a class = "btn btn-success mr-5" href="{{route ('users.create')}}">Añadir</a>
        </div>
    </div>
    dd{{$permissions}}
    dd{{$permission_user}}
    <hr class="hr-orange-lg">
    <div class="row">
        <div class="card px-5 mb-3">
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
                        <td>{{$user->permissions_user->permission_id}}</td>                        
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
        </div>
    </div>
</div>
@endsection