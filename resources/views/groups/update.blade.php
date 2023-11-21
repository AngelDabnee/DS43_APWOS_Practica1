@extends('layouts.main')
@section('title','update')
@section('body')
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <a class = "btn btn-success" href="{{route ('groups.view',$foods)}}">Regresar</a>
                    <h1 class="text-center mb-0">Actualizar al Grupo</h1>
                </div>
            </div>
        </div>
        <hr class="hr-orange-lg">
        <div class="row">
            <div class="col-12 m-3 text-center">
                <div class="card">
                    <form action="POST" method="{{route('groups.store')}}">
                        @csrf
                        <label>Nombre</label>
                        <input type="text" name="name" class = "form-control" placeholder="{{$groupFood->name}}" required>
                        <label>Selecciona el Alimento Relacionado</label>
                        <select class = "form-control" name="food_id" id="">
                            <option>Selecciona el Alimento</option>
                            @foreach ($foods as $food )
                                <option value="{{$groupFood->food->id}}">{{$groupFood->food->name}}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>
@endsection