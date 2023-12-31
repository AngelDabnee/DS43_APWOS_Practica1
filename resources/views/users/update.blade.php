@extends('layouts.main')
@section('title','update')

@section('body')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <a class = "btn btn-success" href="{{route ('users.view',$user)}}">Regresar</a>
            <h1 class="text-center py-2">Actualizar Usuarios</h1>
            <hr class="hr-orange-lg">
        </div>
        <h3 class="">Actualizar Datos de; {{$user->name}}.</h3>
        <hr class="hr-orange-lg">
    </div>
    <div class="row">
        <div class="col-4">
            <img id = "addImgUser" class=" py-3" src="{{$user->image}}" alt="">
        </div>
        <div class="col-2">
        </div>
        <div class="col-6 card  text-center mb-2">
            <form method="POST" action="{{route('users.update',$user)}}">
                @csrf
                <label>Nombre Completo</label>
                <input type="text" name="name" class="form-control" placeholder="{{$user->name}}" required>
                <label>Ruta de la Imagen</label>
                <input type="text" name="image" class="form-control" placeholder="{{$user->image}}">
                <label>Número Telefónico</label>
                <input type="text" name= "phone" class="form-control" maxlength="12" placeholder="{{$user->phone}}">
                <label>Correo de Contacto</label>
                <input type="email" name="email" class="form-control" placeholder="{{$user->email}}" required>
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                <label>Confirmar Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Confirmar Contraseña" required>
                <label>Selecciona el Nivel</label>
                <select name="permission_id" class="form-control">
                    @foreach ($permissions as $permission)
                        <option id = "nivelPermission" value="{{$permission->level}}">{{$permission ->level}}</option>
                    @endforeach
                </select>
                <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
