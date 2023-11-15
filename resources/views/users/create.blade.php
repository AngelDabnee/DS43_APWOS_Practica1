@extends('layouts.main')
@section('body')
<div class="container-fluid">
    <h1>Añadir Usuario</h1>
    <h1 class="text-center py-2">Añadir Nuevo.</h1>
    <div class="row mt-2 text-center">
        <hr class="hr-orange-lg">
       <div class="col-4 m-3">
        <div id = "cardImgUser" class="card-body text-center">
            <img id = "addImgUser" src="https://static.vecteezy.com/system/resources/previews/008/018/058/non_2x/icon-add-image-upload-image-file-photo-outline-design-free-vector.jpg" class="img-fluid">
        </div>
       </div>
       <div class="col-8 text-center">
        <form action="POST" method="{{route('users.store')}}">
        @csrf
        
        
        </form>
       </div>
</div>
@endsection