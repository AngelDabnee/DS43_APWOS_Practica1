@extends('layouts.main')

@section('title','update')

@section('body')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <a class = "btn btn-success mt-3" href="{{route ('foods.view',$foods)}}">Regresar</a>
        <h1 class="text-center mb-0 mt-3">Actualizar al Alimento</h1>
    </div>
    <hr class="hr-orange-lg">
    <div class="row">
        <div class="col-6 mb-3 mt-3">
            <div class="card text-center mb-2">
                <form action="POST" method="{{route('foods.store')}}">
                    @csrf
                    <label>Nombre</label>
                    <input class = "form-control" type="text" name="name" placeholder="{{$foods->name}}" required>
                    <label>Imagen</label>
                    <input class = "form-control" type="text" name="img" placeholder="URL de Imagen" required>
                    <label>Descripción</label>
                    <input class = "form-control" type="text" name="description" placeholder="{{$foods->description}}" required>
                    <label>Selecciona la Composición</label>
                    <select class="form-control" name="composition_id" id="" required>
                        <option value="">Selecciona la Composición</option>
                        @foreach ($compositions as $composition)
                            <option value="{{$composition->id}}">{{$composition->name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
                </form>
            </div>
        </div>
        <div class="col-6 text-center mb-3 mt-3">
            <img id = "imgActualizarFood" class = "img-fluid" src="https://www.laloncherademihijo.org/padres/images/47/1.jpg" alt="">
        </div>
    </div>
</div>
@endsection