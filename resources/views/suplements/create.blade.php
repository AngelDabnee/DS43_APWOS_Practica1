@extends('layouts.main')
@section('titile','create')
@section('body')
<div class="container">
    <div class="row">
        <div class="d-flex justify-content-between align-items-center mb-3 mt-3">
            <a class = "btn btn-success" href="{{route ('suplements.list')}}">Regresar</a>
            <h1 class="text-center mb-0">Añadir Suplemento</h1>
        </div>
        <hr class="hr-orange-lg">
    </div>
    <div class="row">
        <div class="col-4 mt-5">
            <div class="card">
                <img id = "suplementoNuevo" class = "img-fluid" src="https://designfactory.com.mx/wp-content/uploads/LogoFinalSUPLER.jpg" alt="ImgNuevoSuplement"></img>
            </div>
        </div>
        <div class="col-8 card text-center mb-3">
            <form method="POST" action="{{route('suplements.store')}}">
                @csrf
                <label>Nombre</label>
                <input type="text" name="name" id="" class="form-control" required>
                @if ($errors->has('name'))
                    <p class="text-danger">{{$errors->first('name')}}</p>
                @endif
                <label>Tipo</label>
                <select name="type_id" class="form-control">
                    <option>Seleciona el Tipo de Suplemento</option>
                    @foreach ($types as $type)
                        <option id = "typeSuplement" value="{{$type->id}}">{{$type ->name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('type_id'))
                    <p class="text-danger">{{$errors->first('type_id')}}</p>
                @endif
                <label>Efectos</label>
                <input type="text" name="effects" id="" class="form-control" required>
                @if ($errors->has('effects'))
                    <p class="text-danger">{{$errors->first('effects')}}</p>
                @endif
                <label>Beneficios</label>
                <input type="text" name="benefits" id="" class="form-control" required>
                @if ($errors->has('benefits'))
                    <p class="text-danger">{{$errors->first('benefits')}}</p>
                @endif
                <label>Dosis Recomendada</label>
                <input type="text" name="dosis" id="" class="form-control" required>
                @if ($errors->has('dosis'))
                    <p class="text-danger">{{$errors->first('dosis')}}</p>
                @endif
                <label>Riesgos del Consumo</label>
                <input type="text" name="risk" id="" class="form-control" required>
                @if ($errors->has('risk'))
                    <p class="text-danger">{{$errors->first('risk')}}</p>
                @endif
                <label>Imagen</label>
                <input type="text" name="img" id="" class="form-control" placeholder="Dirección URL de la Imagen" required>
                @if ($errors->has('img'))
                    <p class="text-danger">{{$errors->first('img')}}</p>
                @endif
                <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
            </form>
        </div>
    </div>
</div>
@endsection