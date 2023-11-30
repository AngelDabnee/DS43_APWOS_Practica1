@extends('layouts.main')
@section('title','create')

@section('body')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
            <a class = "btn btn-success" href="{{route ('users.list')}}">Regresar</a>
            <h1 class="text-center mb-0">Registrar un Usuario </h1>
        </div>
        <hr class="hr-orange-lg">
    </div>
    <div class="row">
        <div class="col-4">
            <img id = "addImgUser" class="img-fluid py-3" src="https://cdn-icons-png.flaticon.com/512/456/456212.png" alt="">
        </div>
        <div class="col-2">
        </div>
        <div class="col-6 card  text-center mb-2">
            <form method="POST" action="{{route('users.store')}}">
                @csrf
                <label>Nombre Completo</label>
                <input type="text" name="name" class="form-control" placeholder="Nombre Completo" required>
                @if ($errors->has('name'))
                    <p class="text-danger">{{$errors->first('name')}}</p>
                @endif
                <label>Ruta de la Imagen</label>
                <input type="text" name="image" class="form-control" placeholder="URL de Imagen">
                @if ($errors->has('image'))
                    <p class="text-danger">{{$errors->first('image')}}</p>
                @endif
                <label>Número Telefónico</label>
                <input type="text" name= "phone" class="form-control" maxlength="12" placeholder="Incluir Lada">
                @if ($errors->has('phone'))
                    <p class="text-danger">{{$errors->first('phone')}}</p>
                @endif
                <label>Correo de Contacto</label>
                <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
                @if ($errors->has('email'))
                    <p class="text-danger">{{$errors->first('email')}}</p>
                @endif
                <label>Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                @if ($errors->has('password'))
                    <p class="text-danger">{{$errors->first('password')}}</p>                    
                @endif
                <label>Selecciona el Nivel</label>
                <select name="permission_id" class="form-control">
                    <option value="">Selecciona un Nivel</option>
                    @foreach ($permissions as $permission)
                        <option id = "nivelPermission" value="{{$permission->id}}">{{$permission ->level}}</option>
                    @endforeach
                </select>
                @if ($errors->has('permission_id'))
                    <p class="text-danger">{{$errors->first('permission_id')}}</p>
                @endif
                <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</div>
@endsection
