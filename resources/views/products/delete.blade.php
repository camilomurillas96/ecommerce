
    
    {!! Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE', 'class' => 'inline-block' ])!!}
    <input type="submit" class="btn btn-link" style="color: red;  margin: 0px; padding: 0px; text-transform: none;" value="Eliminar">
    {!! Form::close()!!}

