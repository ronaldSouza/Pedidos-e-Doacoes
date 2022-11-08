@extends('admin.layouts.base')

@section('content')
<div class="container">
    <h1 class="text-white my-4">Seu perfil</h1>
    <div class="card py-2">
        <div class="card-header pb-0">
          <div class="d-flex align-items-center">
            <p class="mb-0">Seu perfil</p>
            <button class="btn btn-brown btn-sm ms-auto">Confirmar</button>
          </div>
        </div>
        <div class="card-body">
          <p class="text-uppercase text-sm">Informações de usuário</p>
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Nome</label>
                  <input class="form-control" type="text" value="Matheus Silva">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">Endereço de e-mail</label>
                  <input class="form-control" type="email" value="matheus@gmail.com">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="example-text-input" class="form-control-label">CPF</label>
                  <input class="form-control" type="text" value="********134-69">
                </div>
              </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Data de nascimento</label>
                <input class="form-control" type="date" value="2022-03-13">
              </div>
            </div>
            
            
          </div>
          <hr class="horizontal dark">
          <p class="text-uppercase text-sm">Informações para contato</p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Endereço</label>
                <input class="form-control" type="text" value="Rua dos Bobos - Nº 0">
              </div>
            </div>
            <div class="col-md-4">
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
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nº de telefone</label>
                <input class="form-control" type="tel" value="84998564188">
              </div>
            </div>
          </div>                  
        </div>
      </div>
</div>
@endsection