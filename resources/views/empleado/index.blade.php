@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <div class="row">

                        <div class="col-md-6">
                            <span class="card-title"><h2>Empleados</h2></span>
                        </div>

                        <div class="col-md-6 " align="right">
                            <a href="{{ url('empleado/create') }}" class="btn btn-primary"> Registrar nuevo empleado</a>
                        </div>

                        <div class="col-md-12">
                            @if(Session::has('mensaje'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                                {{ Session::get('mensaje') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>

                            </div>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="card-body">

                    <table class="table table-light">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Correo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->id }}</td>
                                <td>
                                    <img class="img-thumbnail img-fluid" src="{{ asset('storage'.'/'.$empleado->Foto)}}" height="150px" width="160px" alt="">
                                </td>
                                <td>{{ $empleado->Nombre }}</td>
                                <td>{{ $empleado->ApellidoPaterno }}</td>
                                <td>{{ $empleado->ApellidoMaterno }}</td>
                                <td>{{ $empleado->Correo }}</td>
                                <td>
                                    <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}" class="btn btn-warning">
                                    Editar
                                    </a>

                                    |

                                    <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <input type="submit" onclick="return confirm('Quieres eliminar?')" class="btn btn-danger" value="Eliminar">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $empleados->Links() !!}

                </div>
            </div>
        </div>
    </div>


<br>

</div>
@endsection
