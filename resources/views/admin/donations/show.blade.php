@extends('admin.layouts.base')

@section('content')
    <div class="container">

        <form action="{{ route('admin.update', [$info[1]->id]) }}" method="post">
            @csrf
            @method('PUT')
            <h1 class="text-white mt-5 mb-4">Doação de {{ $info[0]->name }} para {{ $info[1]->name }}</h1>
            <div class="row">
                <div class="card">
                    <div class="card-body pt-3">
                        <h5 class="mb-3">Confirme se os dados abaixo conferem</h5>
                        <div class="card-group mb-3">
                            <div class="card">
                                <div class="card-body pt-2">
                                    <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">
                                        Contemplado
                                    </span>
                                    <a href="#" class="card-title h5 d-block text-darker">
                                        {{ $info[0]->name }}
                                    </a>
                                    <div class="card-description mb-4">
                                        <p>Nome: {{ $info[0]->name}}</p>
                                        <p>Email: {{ $info[0]->email }}</p>
                                        <p>Endereço: {{ $info[0]->logradouro }} - Nº {{ $info[0]->casaNumero}}</p>
                                        <p>Bairro: {{ $info[0]->bairro }}</p>
                                        <p>Cidade: {{ $info[0]->cidade }}</p>
                                        <h6>Carta</h6>
                                        <p>
                                            {{ $info[0]->infoPedido }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body pt-2">
                                    <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">
                                        Doador
                                    </span>
                                    <a href="#" class="card-title h5 d-block text-darker">
                                        {{ $info[1]->name }}
                                    </a>
                                    <div class="card-description mb-4">
                                        <p>Nome: {{ $info[1]->name }}</p>
                                        <p>Email: {{ $info[1]->email }}</p>
                                        <p>Endereço: {{ $info[1]->logradouro }} - Nº {{ $info[1]->casaNumero }}</p>
                                        <p>Bairro: {{ $info[1]->bairro }}</p>
                                        <p>Cidade: {{ $info[1]->cidade }}</p>
                                        <h6>Resposta</h6>
                                        <p>
                                            {{ $info[1]->infoDoacao }}
                                        </p>
                                    </div>


                                </div>
                            </div>

                        </div>
                        <div class=" mt-2">
                            <div class="d-flex align-items-end">                            
                                <a href="{{ route('admin.list') }}" class="btn btn-primary btn-sm ms-auto">Voltar</a>
                                <a href="{{ route('admin.update', [$info[1]->id]) }}" class="btn btn-brown btn-sm ms-2" onclick="this.closest('form').submit();return false;">
                                    Confirmar doação
                                </a>
                            </div>
                        </div>
                    </div>           
                </div>


            </div>
        </form>
        
    </div>
@endsection
