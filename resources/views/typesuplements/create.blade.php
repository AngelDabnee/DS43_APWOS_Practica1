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
    <div class="row">
        <div class="col-5">
            <div class="card text-center">
                <form method="POST" action="{{route('typesuplements.store')}}">
                    @csrf
                    <label>Nombre del Grupo</label>
                    <input type="text" name="name" class="form-control" required>
                    <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
                </form>
            </div>
        </div>
        <div class="col-5">
            <div class="card text-center px-5 mb-3">
                <h3 class="mt-2">Ya contamos con;</h3>
                @foreach ($types as $type)
                    <table class="table table-bordered">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th>{{$type->id}}</th>
                                <th>{{$type->name}}</th>
                            </tr>
                        </tbody>
                    </table>
                @endforeach
            </div>
        </div>
        <div class="col-2"></div>
    </div>
</div>


@endsection