@extends('layouts.main')
@section('title','update')
@section('body')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center mt-3">
            <a class = "btn btn-success" href="{{route ('suplements.view',$suplements)}}">Regresar</a>
            <h1 class="text-center py-2">Modificar Suplementos.</h1>
            <hr class="hr-orange-lg">
        </div>
    </div>
        <hr class="hr-orange-lg">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img id = "imgFoods" class="img-fluid" src="{{$suplements->img}}" alt="">
                </div>
            </div>
            <div class="col-8 px-5">
                <div class="card text-center">
                    <form action="POST" method="{{route('suplements.update',$suplements)}}">
                        @csrf
                        <label>Nombre</label>
                        <input type="text" name="name" class="form-control" placeholder="{{$suplements->name}}" required>
                        <label>Tipo de Suplemento</label>
                        <select name="type_id" class="form-control">
                            <option>Seleciona el Tipo de Suplemento</option>
                            @foreach ($typesSuplement as $type)
                                <option id = "typeSuplement" value="{{$type->id}}">{{$type ->name}}</option>
                            @endforeach
                        </select>
                        <label>Efectos Biológicos</label>
                        <input type="text" name="effects" class="form-control" required>
                        <label>Beneficios del Consumo</label>
                        <input type="text" name="benefits" class="form-control" required>
                        <label>Dosis Recomendada</label>
                        <input type="text" name="dosis" class="form-control" required>
                        <label>Riesgos del Consumo</label>
                        <input type="text" name="risk" class="form-control" required>
                        <label>Actualizar Imagen</label>
                        <input type="text" name="img" class="form-control" value="{{$suplements->img}}" required>
                        <button class="btn btn-lg btn-success m-3" type="submit">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
</div>




@endsection