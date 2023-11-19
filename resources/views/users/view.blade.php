@extends('layouts.main')

@section('title','view')

@section('body')
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <h1>Usuario</h1>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <h3>{{$user->name}}</h3>
            </div>
            <hr class="hr-orange-lg">
        </div>
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
                    <a class = "btn btn-success" href="{{route ('users.list')}}">Regresar</a>
                    <a id = "updateUsers" class = "btn btn-warning" href="{{route ('users.update',$user->id)}}">Actualizar</a>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
@endsection