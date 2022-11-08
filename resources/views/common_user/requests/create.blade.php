@extends('common_user.layouts.base')
@section('content')
    <div class="container">
        <h1 class="text-white mt-5 mb-4">Faça um pedido</h1>
        <div class="row">
            <div class="card mt-3">
                <div class="card-body pt-3">
                    <div class="d-flex">
                        <h3 class="fs-3">Escreva sua carta abaixo</h3>
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm ms-auto">Voltar</a>
                    </div>
                    

                    <form action="{{ route('pedidos.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Fale um pouco sobre você e porque merece ser presenteado</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" minlength="50" style="min-height: 300px" name="infoPedido"></textarea>
                        </div>
                        <div class="d-flex align-items-end">

                            <button type="submit" class="btn btn-brown btn-sm ms-auto">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
