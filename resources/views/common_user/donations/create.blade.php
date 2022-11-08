@extends('common_user.layouts.base')

@section('content')
    <div class="container">
        <h1 class="text-white mt-5 mb-4">Doe para {{ $pedidos->name }}</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="card mt-3">
                    <div class="card-body pt-2">
                        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Contemplado</span>
                        <h5 class="card-title h5 d-block text-darker">
                            {{ $pedidos->name}}
                        </h5>
                        <div class="card-description mb-4">
                            <p>{{ $pedidos->infoPedido}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mt-3">
                    <div class="card-body pt-2">
                        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Resposta</span>
                        <h5 class="card-title h5 d-block text-darker">
                            {{ Auth::user()->name }}
                        </h5>
                        <form action="{{ route('doacao.store', $pedidos->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Resposta ao pedido</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" minlength="10" style="min-height: 100px" name="infoDoacao"></textarea>
                            </div>                        
                                <input type="hidden" value="{{ $pedidos->id }}" name="pedidoId">
                            <div class="d-flex align-items-end">
                                
                                <a href="{{ route('pedidos.index') }}" class="btn btn-primary btn-sm ms-auto">Voltar</a>
                                <button type="submit" class="btn btn-brown btn-sm ms-2">Doar</button>
                            </div> 
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
