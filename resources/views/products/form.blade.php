{!! Form::open(['url' => $url, 'method' => $method])!!}
<div class="form-group">
    {{ Form::text('title',$product->title,['class' => 'form-control', 'placeholder' =>'Titulo...']) }}
</div>

<div class="form-group">
    {{ Form::text('pricing',$product->pricing,['class' => 'form-control', 'placeholder' =>'Precio de tu producto en dolares']) }}
</div>

<div class="form-group">
    {{ Form::text('description',$product->description,['class' => 'form-control', 'placeholder' =>'Describa el producto']) }}
</div>

<div class="form-group text-right">
   <a href="{{url('/products')}}">Regresar al listado de productos</a>
   <input type="submit" value="Enviar" class="btn btn-success">
</div>

{!! Form::close() !!}