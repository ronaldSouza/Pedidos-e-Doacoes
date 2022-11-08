@extends('common_user.layouts.base')
@section('content')
    <div class="container">
        <h1 class="text-white mt-5 mb-4">Seu pedido</h1>
        <div class="row">
            <div class="card mt-3">
                <div class="card-body pt-3">
                    <h3 class="fs-3">Veja o que você escreveu</h3>
                    <form action="#">
                        <div class="form-group mb-4">
                            <label>Sua carta</label>
                            <p>
                                {{ $pedidos->infoPedido }}
                            </p>
                            <p class="text-sm">{{ $pedidos->dataPedido}}</p>
                        </div>
                        <div class="d-flex align-items-end">
                            {{-- <a href="{{ route('common_user.requests.index') }}" class="btn btn-brown btn-sm me-auto">Excluir</a> --}}
                            {{-- <a href="{{ route('common_user.requests.index') }}" class="btn btn-primary btn-sm ms-auto">Voltar</a> --}}
                            {{-- <a href="{{ route('common_user.requests.edit') }}" class="btn btn-brown btn-sm ms-2">Editar</a> --}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
