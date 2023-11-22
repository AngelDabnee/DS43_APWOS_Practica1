@extends('layouts.main')

@section('title','view')

@section('body')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center ">
            <a class = "btn btn-success mt-3" href="{{route ('users.list')}}">Regresar</a>
            <h1 class="text-center mt-3">Usuarios</h1>
        </div>
    </div>
    <div class="row">
        <div class="text-center">
            <h3>{{$user->name}}</h3>
        </div>
    </div>
    <hr class="hr-orange-lg">
    <div class="row">
        <div class="col-4 mb-3">
            <div class="card">
                <img id = "userImageOne" class="img-fluid text-center py-5" src="{{$user->image}}" alt="User Image">
            </div>
        </div>
        <div class="col-8 mb-3">
            <div class="card">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <th>#ID</th>
                        <th>Nombre</th>
                        <th>Nivel de Acceso</th>
                        <th>Teléfono de Contacto</th>
                        <th>Correo de Contacto</th>
                    </thead>
                    <hr class="hr-orange-lg">
                    <tbody class="text-center">
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->permission_id}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->email}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id = "opcionesUsuario" class="py-4">
                <a id = "updateUsers" class = "btn btn-warning" href="{{route ('users.update',$user->id)}}">Actualizar</a>
            </div>
        </div>
    </div>
</div>
@endsection