@extends('layouts.main')
@section('title','create')

@section('body')
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a class = "btn btn-success" href="{{route ('users.list')}}">Regresar</a>
                <h1 class="text-center mb-0">Añadir al Alimento</h1>
            </div>
            <hr class="hr-orange-lg">
        </div>
        <div class="row">
            <div class="col-4">
                <img id = "addImgUser" class=" py-3" src="https://cdn-icons-png.flaticon.com/512/456/456212.png" alt="">
            </div>
            <div class="col-2">
            </div>
            <div class="col-6 card  text-center mb-2">
                <form action="POST" method="{{route('users.store')}}">
                    @csrf
                    <label>Nombre Completo</label>
                    <input type="text" name="name" class="form-control" placeholder="Nombre Completo" required>
                    <label>Ruta de la Imagen</label>
                    <input type="text" name="image" class="form-control" placeholder="URL de Imagen">
                    <label>Número Telefónico</label>
                    <input type="text" name= "phone" class="form-control" maxlength="12" placeholder="Incluir Lada">
                    <label>Correo de Contacto</label>
                    <input type="email" name="email" class="form-control" placeholder="Correo Electrónico" required>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
@endsection
