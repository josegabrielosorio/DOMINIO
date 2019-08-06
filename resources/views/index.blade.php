@extends('layouts.oof')

@section('titulo','DOMINIO')

@section('contenido')
<main id="product-content" class="card">
<div id="content">
@foreach ($productos as $producto)

    <article>

        <div id="producto-espacio">

                <div class="inner">
                    <img src="imagenes/{{$producto->file}}"> 
                </div>

                <div class="info-product" class="card-body">

                    <p class="card-text">${{$producto->precio}} USD</p>
                    <p class="card-title">{{$producto->nombre}}</p>
                    <p class="card-text">{{$producto->descripcion}}</p>
                    <p class="card-text">{{$producto->color}}/{{$producto->talla}}/{{$producto->tipo}}/{{$producto->material}}</p>

                </div>
                
                <div class="botones-product">
                    <a href="{{route('productos.destroy', $producto->id)}}" onclick="return confirm('¿Seguro que desea eliminar este producto?')" class="btn btn-danger">Eliminar</a>
                    <a href="operacionesBasicas/{{$producto->id}}/edit" class="btn btn-danger">Editar</a>
                </div>



           <!-- <a href="{{route('productos.destroy', $producto->id)}}" onclick="return confirm('¿Seguro que desea eliminar este producto?')" class="btn btn-danger">Eliminar</a>
            <a href="operacionesBasicas/{{$producto->id}}/edit" class="btn btn-danger">Editar</a> -->
        </div>
    </article>    	

@endforeach
</div>
</main>
@endsection