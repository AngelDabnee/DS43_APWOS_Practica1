@extends('layouts.main')
@section('title','update')
@section('body')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a class = "btn btn-success mt-3" href="{{route ('compositions.list')}}">Regresar</a>
            <h1 class="text-center mb-0 mt-3">Actualizar Componente del Diccionario</h1>
        </div>
    </div>
    <hr class="hr-orange-lg">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <form action="POST" method="{{route('compositions.update',$compositions)}}">
                @csrf
                <div class="card text-center px-3">
                    <label>Nuevo Nombre del Grupo</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>
@endsection