@extends('layouts.app')

@section('template_title')
    Pedido
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Pedido') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pedidos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Pedido') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>#</th>

										<th>Categoria</th>
										<th>Nombre</th>
                                        <th>Estado</th>
                                        <th>Cantidad</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pedidos as $pedido)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $pedido->categoria->nombre }}</td>
											<td>{{ $pedido->nombre }}</td>
                                            @if($pedido->estado ==0)
                                                <td>{{$resultado = 'No disponible';}}</td>
                                            @else
                                                <td>{{$resultado = 'Disponible';}}</td>
                                            @endif
                                            <td>{{ $pedido->cantidad }}</td>

                                            <td>
                                                <form action="{{ route('pedidos.destroy',$pedido->id) }}" method="POST">
                                                    <!-- <a class="btn btn-sm btn-primary " href="{ { route('pedidos.show',$pedido->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a> -->
                                                    <a class="btn btn-sm btn-warning" href="{{ route('pedidos.edit',$pedido->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pedidos->links() !!}
            </div>
        </div>
    </div>
@endsection
