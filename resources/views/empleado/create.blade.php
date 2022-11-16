@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title"><h3>Registro de Empleados</h3></span>
                </div>
                <div class="card-body">
                    <form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('empleado.form',['modo'=>'Crear']);
                    </form>
                </div>
            </div>
        </div>
    </div>




</div>
@endsection
