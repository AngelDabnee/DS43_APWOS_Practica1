@extends('layouts.main')
@section('title','create')
@section('body')
<div class="container">
    @if (isset($foods))
        <h1 class="text-center mb-0">Actualizar al Alimento: {{old('name',isset($foods->name))}}</h1>
    @else
        <h1 class="text-center mb-0">Añadir al Alimento</h1>
    @endif
    <div id = "opcionesIniciales" class="row">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a class = "btn btn-success" href="{{route ('foods.list')}}">Regresar</a>
        </div>
        <hr class="hr-orange-lg">
    </div>
    <div class="row">
        <div class="col-6">
            @if ($errors->any())
                <div class="alrt alert-danger">
                    <p class="bold">Errores Encontrados
                        @foreach ($errors->all() as $error)
                            <p><li>{{$error}}</li></p>
                        @endforeach
                    </p>
                </div>
               
            @endif
            @if (isset($foods))
                <form method="POST" action="{{route ('foods.update') }}">
                    @method('PATCH')
                    <input type="hidden" name="id" value="{{old('name',isset($foods->id))}}">

            @else
                <form method="POST" action="{{route ('foods.store') }}">
            @endif

                @csrf  
                <div id = "cardFoods" class="card text-center">
                    <label>Nombre</label>
                    <input type="text" name = "name" class="form-control" placeholder="Nombre del Alimento" value = "{{old('name',isset($foods->name))}}" required>
                    @if ($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>                        
                    @endif
                    <label>URL de la Imagen</label>
                    <input type="text" name="img" class="form-control" placeholder="Imagen del Alimento" value="{{old('img',isset($foods->img))}}">
                    @if ($errors->has('img'))
                        <p class="text-danger">{{$errors->first('img')}}</p>                        
                    @endif
                    <label>Descripción</label>
                    <input type="text" name = "description" class="form-control" placeholder="Descripción" value="{{old('description',isset($foods->description))}}" required>
                    @if ($errors->has('description'))
                        <p class="text-danger">{{$errors->first('description')}}</p>                        
                    @endif
                    <label>Composición Nutricional</label>
                    <select name="composition_id" id="" class = "form-control" required>
                        
                        @if (!isset($foods))
                            <option value="">Selecciona la Composición</option>
                            @foreach ($compositions as $composition)
                                <option value="{{$composition->id}}">{{$composition->name}}</option>
                        @endforeach
                        @else
                            @foreach ($compositions as $composition)
                            <option value="{{$composition->id}}">{{$composition->name}}</option>
                                @if ($composition != $composition)
                                    <option value="{{$composition->id}}">{{$composition->name}}</option>
                                @endif
                            @endforeach
                        @endif
                    </select>
                    @if ($errors->has('composition_id'))
                        <p class="text-danger">{{$errors->first('composition_id')}}</p>                        
                    @endif
                    <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
                </div>
            </form>
        </div>
        <div class="col-6 mb-3">
            <div class="card">
                @if (old('img',isset($foods->img)))
                    <img id = "imgFoodUpdate" src="{{$foods->img}}" class="img-fluid d-block w-100" >
                @else
                    <img src="https://canalsalud.imq.es/hubfs/imq-blog/alimentos-saludables.jpg" class="d-block w-100" alt="Comida 1">
                @endif
            </div>
        </div>
    </div>
</div>
@endsection