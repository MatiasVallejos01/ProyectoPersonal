@extends('layouts.app')
@section('content')
<div class="container">

    <div class="">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <span class="card-title"><h3>Editor de Empleados</h3></span>
                </div>
                <div class="card-body">
                    <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PATCH')}}
                        @include('empleado.form',['modo'=>'Editar']);
                        </form>
                </div>
            </div>
        </div>
    </div>




</div>
@endsection
