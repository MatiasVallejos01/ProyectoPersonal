<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">
            <div class="col-md-6 offset-md-6" align="right">
                <a class="btn btn-warning" href="{{ url('pedidos/') }}">Volver</a>
            </div>
        </div>

        <div class="form-group mt-3">
            {{ Form::label('categoria_id') }}
            {{ Form::select('categoria_id', $categorias, $pedido->categoria_id, ['class' => 'form-control' . ($errors->has('categoria_id') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Id']) }}
            {!! $errors->first('categoria_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mt-3">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $pedido->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @if($modo=='Generar')
        <div class="form-group mt-3">
            {{ Form::label('estado') }}
            {{ Form::select('estado', ['0' => 'En espera'], ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @else
        <div class="form-group mt-3">
            {{ Form::label('estado') }}
            {{ Form::select('estado', [$pedido->estado => (old('estado')=='estado'?'selected':''),'0' => 'En espera', '1' => 'Trabajando'], ['class' => 'form-control' . (old('estado')=='estado'?'selected':''), 'value' => old('estado'), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        @endif

        <div class="form-group mt-3">
            {{ Form::label('cantidad') }}
            {{ Form::number('cantidad', $pedido->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad', 'min' => '1']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">{{ $modo }} pedido</button>
        </div>
    </div>
</div>
