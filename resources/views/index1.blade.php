@extends('layouts.oof')

@section('titulo','DOMINIO')

@section('contenido')
<br>
<br>
<br>
<div class="row">
@foreach ($productos as $producto)
<div class="col-6">   
<div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$producto->nombre}}</h5>
          <p class="card-text">{{$producto->precio}}</p>
          <p class="card-text">{{$producto->descripcion}}</p>
          <p class="card-text">{{$producto->color}}/{{$producto->talla}}/{{$producto->tipo}}/{{$producto->material}}</p>
          <a href="#" class="btn btn-primary">Soy un producto!</a>
        </div>
</div>
</div>
@endforeach
</div>
@endsection