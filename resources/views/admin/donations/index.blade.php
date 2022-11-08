@extends('admin.layouts.base')

@section('content')
    <div class="container py-4">
        <div class="row my-3">
            <h1 class="text-white">Doações</h1>
        </div>
        
        <div class="row g-3">
            @foreach ($doacoes_dos_pedidos as $info)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body pt-2">
                        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Doação</span>
                        <a href="#" class="card-title h5 d-block text-darker">
                            {{$info->nomeDoacao}}
                        </a>
                        <p class="card-description mb-4">
                            {{$info->infoDoacao}}
                        </p>
                        <div class="author align-items-center">
                            <div class="name ps-2">
                                <span>Para: {{$info->nomePedido}}</span>
                                <div class="stats">
                                    <small>Pedido em {{$info->dataPedido}}</small>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-end mt-2">
                            <a href="{{ route('admin.show', [$info->id]) }}" class="btn btn-secondary btn-sm ms-auto">Ver solicitação</a>
                        </div> 
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
       
    </div>
@endsection
