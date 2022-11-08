@extends('common_user.layouts.base')
@section('content')
    <div class="container py-4">
        <div class="row my-3">
            <h1 class="text-white">Cartas</h1>
        </div>
        <div class="row g-2">
        
        @foreach($pedidos as $pedido)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body pt-2">
                        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Carta</span>
                        <a href="#" class="card-title h5 d-block text-darker">
                            Para o Papai Noel
                        </a>
                        <p class="card-description mb-4">
                            {{ $pedido->infoPedido }}
                        </p>
                        <div class="author align-items-center">
                            <div class="name ps-3">
                                <span>{{ $pedido->name}}</span>
                                <div class="stats">
                                    <small>{{ $pedido->dataPedido }}</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-end">
                            <a href="{{ route('doacao.show', [$pedido->id]) }}" class="btn btn-primary btn-sm ms-auto">Doar</a>
                        </div> 
                    </div>
                </div>
            </div>
            @endforeach
        </div>
       
    </div>
@endsection
