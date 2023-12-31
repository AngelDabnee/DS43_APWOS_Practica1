@extends('layouts.main')
@section('title','update')
@section('body')
<div class="container"> 
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mt-3">
                <a class = "btn btn-success" href="{{route ('groups.view',$groupFood)}}">Regresar</a>
                <h1 class="text-center mb-0">Actualizar al Grupo</h1>
            </div>
        </div>
    </div>
    <hr class="hr-orange-lg">
    <div class="row">
        <div class="col-12 m-3 text-center">
            <div class="card">
                <form method="POST" action="{{route('groups.update',$groupFood)}}">
                    @csrf
                    <label>Nombre del Grupo de Alimentos</label>
                    <input type="text" name="name" class = "form-control" placeholder="{{$groupFood->name}}" required>
                    <label>Selecciona el Alimento Relacionado</label>
                    <select class = "form-control" name="food_id" id="">
                        <option>Selecciona el Alimento</option>
                        @foreach ($foods as $food)
                            <option value="{{$foods->id}}">{{$foods->name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection