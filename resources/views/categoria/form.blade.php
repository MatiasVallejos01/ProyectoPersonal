<div class="box box-info padding-1">
    <div class="box-body">

        <div class="row">
            <div class="col-md-6 offset-md-6" align="right">
                <a class="btn btn-warning" href="{{ url('categorias/') }}">Volver</a>
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $categoria->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <button type="submit" class="btn btn-primary">{{$modo}} Categoria</button>
        </div>
    </div>
</div>
