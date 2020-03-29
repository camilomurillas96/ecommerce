@extends('layouts.app')

@section('content')
 
<div class="container text-center">

    <div class="card product text-left" style="width: 600px;
    max-width: 100%; padding: 1em; position: relative;">

@if(Auth::check() && $product->user_id == Auth::user()->id)
<div class="absolute actions" style="right: 1em;
top: 10px; position: absolute;">
    <a href="{{url('/products/'.$product->id.'/edit')}}">
        Editar
        </a>
        
        @include('products.delete',['product' => $product])

</div>
@endif

        <h1 style="padding-bottom: 10px;
        border-bottom: solid 1px;">{{$product->title}}</h1>
        <div class="row">
            <div class="col-sm-6 col-xs-12">

            </div>
            <div class="col-sm-6 col-xs-12">
                <p>
                    <strong>Descripción</strong>
                </p>
                <p>{{$product->description}}</p>
                <p>
                    <a href="" class="btn btn-success">
                        Agregar al carrito
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection