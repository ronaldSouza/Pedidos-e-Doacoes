@extends('layouts.base')

@section('content')
    <div class="container">
        <h1 class="text-white mt-5 mb-4">Doe para Matheus</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="card mt-3">
                    <div class="card-body pt-2">
                        <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Contemplado</span>
                        <h5 class="card-title h5 d-block text-darker">
                            Matheus Silva
                        </h5>
                        <div class="card-description mb-4">
                            <p>Olá, pessoa! Seja meu Papai Noel esse ano! Tenho um pedido para você! Minha mãe e eu temos
                                passado muita necessidade recentemente devido às chuvas atingindo nosso bairro aqui em
                                Caicó. Devido as chuvas, há alguns meses perdi meu único computador, o qual usava para
                                estudos há muito tempo. Gostaria de saber se você poderia ser gentil o suficiente para me
                                doar algum computador ou notebook para que eu consiga estudar melhor a partir desse natal.
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
                            Mara Silva
                        </h5>
                        <form action="#">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Resposta ao pedido</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" minlength="10" style="min-height: 100px"></textarea>
                            </div>                        
                            <div class="d-flex align-items-end">
                                
                                {{-- <a href="{{ route('admin.donations.index') }}" class="btn btn-primary btn-sm ms-auto">Voltar</a> --}}
                                {{-- <a href="{{ route('donations.create') }}" class="btn btn-brown btn-sm ms-2">Doar</a> --}}
                            </div> 
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
