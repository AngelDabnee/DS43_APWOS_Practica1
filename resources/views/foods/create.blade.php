@extends('layouts..main')
@section('title','create')
@section('body')
<div class="container">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <div class="container-fluid">
        <div id = "opcionesIniciales" class="row">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a class = "btn btn-success" href="{{route ('foods.list')}}">Regresar</a>
                <h1 class="text-center mb-0">Añadir al Alimento</h1>
            </div>
            <hr class="hr-orange-lg">
        </div>
        <div class="row">
            <div class="col-6">
                <form action="POST" method="{{route ('foods.store')}}">
                    @csrf
                    <div id = "cardFoods" class="card text-center">
                        <label>Nombre</label>
                        <input type="text" name = "name" class="form-control" placeholder="Nombre del Alimento" required>
                        <label>URL de la Imagen</label>
                        <input type="text" name="img" class="form-control" placeholder="Imagen del Alimento">
                        <label>Descripción</label>
                        <input type="text" name = "description" class="form-control" placeholder="Descripción" required>
                        <label>Composición MacroNutriente</label>
                        <select name="composition_id" id="" required>
                            <option value="">Selecciona la Composición</option>
                            @foreach ($compositions as $composition)
                                <option value="{{$composition->micro}}">{{$composition->micro}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-lg btn-success mt-3" type="submit">Confirmar</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</div>



@endsection