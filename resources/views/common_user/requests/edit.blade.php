@extends('common_user.layouts.base')
@section('content')
    <div class="container">
        <h1 class="text-white mt-5 mb-4">Faça um pedido</h1>
        <div class="row">
            <div class="card mt-3">
                <div class="card-body pt-3">
                    <h3 class="fs-3">Editar a carta abaixo</h3>
                    {{-- <form action="{{ route('doacoes.show') }}"> --}}
                        <div class="form-group">
                            <label for="carta">Fale um pouco sobre você e porque merece ser presenteado</label>
                            <textarea class="form-control" name="carta" id="carta" rows="10" minlength="50" style="min-height: 300px">Olá, pessoa! Seja meu Papai Noel esse ano! Tenho um pedido para você! Minha mãe e eu temos passado muita necessidade recentemente devido às chuvas atingindo nosso bairro aqui em Caicó. Devido as chuvas, há alguns meses perdi meu único computador, o qual usava para estudos há muito tempo. Gostaria de saber se você poderia ser gentil o suficiente para me doar algum computador ou notebook para que eu consiga estudar melhor a partir desse natal.</textarea>
                        </div>
                        <div class="d-flex align-items-end">
                            {{-- <a href="{{ route('c_user.requests.index') }}" class="btn btn-brown btn-sm me-auto">Excluir</a> --}}
                            {{-- <a href="{{ route('c_user.requests.index') }}" class="btn btn-primary btn-sm ms-auto">Voltar</a> --}}
                            <button type="submit" class="btn btn-brown btn-sm ms-2">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
