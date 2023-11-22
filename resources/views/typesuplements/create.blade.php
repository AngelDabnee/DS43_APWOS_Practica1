@extends('layouts.main')
@section('title','Crear Nuevo')
@section('body')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
            <a class = "btn btn-success" href="{{route ('typesuplements.list')}}">Regresar</a>
            <h1 class="text-center mb-0">Añadir Nuevo Tipo de Suplemento</h1>
        </div>
        <hr class="hr-orange-lg">
    </div>
</div>


@endsection