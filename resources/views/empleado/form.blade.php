<h1>{{$modo}} Empleado</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach( $errors->all() as $error)
            <li> {{ $error }} </li>
            @endforeach
        </ul>
    </div>


@endif

<div class="form-group">
<label for="Nombre"> Nombre</label>
<input type="text" class="form-control" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" name="Nombre" id="Nombre">
</div>

<div class="form-group">
<label for="ApellidoPaterno"> Apellido Paterno</label>
<input type="text" class="form-control" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" name="ApellidoPaterno" id="ApellidoPaterno">
</div>

<div class="form-group">
<label for="ApellidoMaterno"> Apellido Materno</label>
<input type="text" class="form-control" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" name="ApellidoMaterno" id="ApellidoMaterno">
</div>

<div class="form-group">
<label for="Correo"> Correo</label>
<input type="email" class="form-control" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" name="Correo" id="Correo">
</div>

<div class="form-group">
<label for="Foto"> Foto: </label>
@if(isset($empleado->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto}}" height="150px" width="160px" alt="">
@endif
<input type="file" class="form-control" value="" name="Foto" id="Foto">
</div>

<input class="btn btn-success" type="submit" value="{{$modo}} datos">

<a class="btn btn-primary" href="{{ url('empleado/') }}">Volver</a>
