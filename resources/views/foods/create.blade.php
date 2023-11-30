@extends('layouts.main')
@section('title','create')
@section('body')
<div class="container">
    <div id = "opcionesIniciales" class="row">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <a class = "btn btn-success" href="{{route ('foods.list')}}">Regresar</a>
            <h1 class="text-center mb-0">Añadir al Alimento</h1>
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
            <form method="POST" action="{{route ('foods.store')}}">
                @csrf   
                <div id = "cardFoods" class="card text-center">
                    <label>Nombre</label>
                    <input type="text" name = "name" class="form-control" placeholder="Nombre del Alimento" required>
                    @if ($errors->has('name'))
                        <p class="text-danger">{{$errors->first('name')}}</p>                        
                    @endif
                    <label>URL de la Imagen</label>
                    <input type="text" name="img" class="form-control" placeholder="Imagen del Alimento">
                    @if ($errors->has('img'))
                        <p class="text-danger">{{$errors->first('img')}}</p>                        
                    @endif
                    <label>Descripción</label>
                    <input type="text" name = "description" class="form-control" placeholder="Descripción" required>
                    @if ($errors->has('description'))
                        <p class="text-danger">{{$errors->first('description')}}</p>                        
                    @endif
                    <label>Composición Nutricional</label>
                    <select name="composition_id" id="" class = "form-control" required>
                        <option value="">Selecciona la Composición</option>
                        @foreach ($compositions as $composition)
                            <option value="{{$composition->id}}">{{$composition->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('composition_id'))
                        <p class="text-danger">{{$errors->first('composition_id')}}</p>                        
                    @endif
                    <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
                </div>
            </form>
        </div>
        <div class="col-6 mb-3">
            <div class="">
                <div id="carruselFoods" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://canalsalud.imq.es/hubfs/imq-blog/alimentos-saludables.jpg" class="d-block w-100" alt="Comida 1">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.proyectosendo.es/wp-content/uploads/2020/03/verduras1.jpg" class="d-block w-100" alt="Comida 2">
                        </div>
                        <div class="carousel-item">
                            <img src="https://www.aquateknica.com/wp-content/uploads/2016/02/Alimentos-de-colores.jpg" class="d-block w-100" alt="Comida 3">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carruselFoods" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carruselFoods" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection