@extends('common_user.layouts.base')

@section('content')
    <div class="container">
        <h1 class="text-white mt-5 mb-4">Doação de Mara para Matheus</h1>
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
                                    {{ $pedidos->name }}
                                </a>
                                <div class="card-description mb-4">
                                    <p>Nome: {{ $pedidos->name }}</p>
                                    <p>Email: {{ $pedidos->email }}</p>
                                    <p>Endereço: {{ $pedidos->logradouro}} - Nº {{ $pedidos->casaNumero }}</p>
                                    <p>Bairro: {{ $pedidos->bairro }}</p>
                                    <!-- <p>Cidade: Caicó</p> -->
                                    <h6>Carta</h6>
                                    <p>{{ $pedidos->infoPedido }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body pt-2">
                                <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">
                                    Doador
                                </span>
                                <a href="#" class="card-title h5 d-block text-darker">
                                    Mara Silva
                                </a>
                                <div class="card-description mb-4">
                                    <p>Nome: Matheus Silva</p>
                                    <p>Email: matheus@gmail.com</p>
                                    <p>Endereço: Rua dos bobos - Nº 0</p>
                                    <p>Bairro: Barra Novíssima</p>
                                    <p>Cidade: Caicó</p>
                                    <h6>Resposta</h6>
                                    <p>Olá, Matheus! Serei sua Mamãe Noel esse ano! Tenho um presente especial para você...</p>
                                </div>


                            </div>
                        </div>

                    </div>
                    <div class=" mt-2">
                        <div class="row">
                            <div class="col-md-6 d-flex align-items-end">
                                {{-- <a href="{{ route('donations.edit') }}" class="btn btn-brown btn-sm me-2">Editar</a> --}}
                                {{-- <a href="{{ route('admin.donations.index') }}" class="btn btn-brown btn-sm me-auto">Deletar</a> --}}
                            </div>
                            <div class="col-md-6 d-flex align-items-end">
                                {{-- <a href="{{ route('admin.donations.index') }}" class="btn btn-primary btn-sm ms-auto">Voltar</a> --}}
                                {{-- <a href="{{ route('donations.show') }}" class="btn btn-brown btn-sm ms-2"> --}}
                                    Confirmar doação
                                </a>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>

                
            </div>


        </div>
    </div>
@endsection
