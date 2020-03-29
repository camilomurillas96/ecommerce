@extends('layouts.app')

@section('content')
    
    <div class="container white">
        <h1>Nuevo Producto</h1>

        {{-- formulario --}}
    {!! Form::open(['url' => '/products', 'method' => 'POST'])!!}
        <div class="form-group">
            {{ Form::text('title','',['class' => 'form-control', 'placeholder' =>'Titulo...']) }}
        </div>

        <div class="form-group">
            {{ Form::text('pricing','',['class' => 'form-control', 'placeholder' =>'Precio de tu producto en dolares']) }}
        </div>

        <div class="form-group">
            {{ Form::text('description','',['class' => 'form-control', 'placeholder' =>'Describa el producto']) }}
        </div>

        <div class="form-group text-right">
           <a href="{{url('/products')}}">Regresar al listado de productos</a>
           <input type="submit" value="Enviar" class="btn btn-success">
        </div>
        
    {!! Form::close() !!}

    </div>

@endsection