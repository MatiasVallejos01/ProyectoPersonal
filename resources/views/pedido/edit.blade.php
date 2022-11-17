@extends('layouts.app')

@section('template_title')
    Editor de Pedido
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">
                            <h3>Editor de Pedido</h3>
                        </span>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('pedidos.update', $pedido->id) }}" role="form"
                            enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            <!-- Se incluye el archivo form.blade.php el cual contiene el formulario,
                                    enviandole como parametro [modo] (para diferenciar la accion a realizar) -->
                            @include('pedido.form', ['modo' => 'Editar'])

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
