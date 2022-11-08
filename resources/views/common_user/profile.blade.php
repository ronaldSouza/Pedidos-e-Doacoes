@extends('common_user.layouts.base')

@section('content')


<form action="{{ route('users.update', Auth::user()->id) }}" method="POST">
  @csrf
  @method('PUT')

  <div class="container">
      <h1 class="text-white my-4">Seu perfil</h1>
      <div class="card py-2">
          <div class="card-header pb-0">
            <div class="d-flex align-items-center">
              <p class="mb-0">Seu perfil</p>
              <input type="submit" class="btn btn-brown btn-sm ms-auto" value="Confirmar">
            </div>
          </div>
          <div class="card-body">
            <p class="text-uppercase text-sm">Informações de usuário</p>
            <div class="row">
              <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Nome</label>
                    <input class="form-control" type="text" value="{{ $users->name }}" name="name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Endereço de e-mail</label>
                    <input class="form-control" type="email" value="{{ $users->email }}" name="email">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">CPF</label>
                    <input class="form-control" type="text" value="{{ $users->cpf}}" name="cpf">
                  </div>
                </div>
              {{-- <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Data de nascimento</label>
                  <input class="form-control" type="date" value="2022-03-13">
                </div>
              </div> --}}
              
              
            </div>
            <hr class="horizontal dark">
            <p class="text-uppercase text-sm">Informações para contato</p>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Endereço</label>
                  <input class="form-control" type="text" value="{{ $users->logradouro }}" name="logradouro">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Número</label>
                  <input class="form-control" type="number" value="{{ $users->casaNumero}}" name="casaNumero">
                </div>
              </div>
              {{-- <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Cidade</label>
                  <input class="form-control" type="text" value="Caicó">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Estado</label>
                  <input class="form-control" type="text" value="RN">
                </div>
              </div> --}}
              <div class="col-md-4">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nº de telefone</label>
                  <input class="form-control" type="tel" value="{{ $users->tel}}" name="tel">
                </div>
              </div>
            </div>                  
          </div>
        </div>
  </div>
  
</form>
@endsection