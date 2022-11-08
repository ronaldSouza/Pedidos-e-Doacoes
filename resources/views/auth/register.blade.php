<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        Registrar-se - Christmas Mail
    </title>
    
    @vite(['resources/js/app.js'])
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    @vite(['public/assets/scss/argon-dashboard.scss']) 
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
</head>

<body class="">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
        <div class="container-fluid">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-secondary"
                href="{{ route('landing_page') }}">
                <i class="fa fa-door-open"></i>
                Christmas Mail
            </a>         
        </div>
    </nav>
    <!-- End Navbar -->
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg img-bg-1">
            <span class="mask bg-gradient-secondary opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Registrar-se</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-n12 justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                    <div class="card z-index-0">                    
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form role="form" class="user" action="{{ url('/register') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" placeholder="Digite seu nome" aria-label="Nome" name="name">
                                </div>
                                <div class="mb-3">
                                    <label for="email">E-mail</label>
                                    <input type="text" class="form-control" placeholder="Digite seu email"
                                        aria-label="Email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" placeholder="Digite seu CPF"
                                        aria-label="CPF" name="cpf">
                                </div>
                                <div class="mb-3">
                                    <label for="tel">Número de telefone</label>
                                    <input type="tel" class="form-control" placeholder="Digite seu número de telefone"
                                        aria-label="Número de telefone" name="tel">
                                </div>
                                <div class="mb-3">
                                    <label>Seu endereço</label>
                                    <input type="text" class="form-control" placeholder="Número da casa"
                                        aria-label="Número da casa" name="casaNumero">
                                    <input type="text" class="form-control mt-2" placeholder="Rua"
                                        aria-label="Rua" name="logradouro">
                                    <input type="text" class="form-control mt-2" placeholder="Bairro"
                                        aria-label="Bairro" name="bairro">
                                    <input type="text" class="form-control mt-2" placeholder="Cidade"
                                        aria-label="Cidade" name="cidade">
                                    {{-- <input type="text" class="form-control mt-2" placeholder="UF/Estado"
                                        aria-label="UF/Estado"> --}}
                                </div>
                                <div class="mb-3">
                                    <label for="password">Senha</label>
                                    <input type="password" class="form-control" placeholder="Crie uma senha"
                                        aria-label="Senha" name="password">
                                </div>
                                <div class="mb-3">
                                    <label for="password-confirmation">Confirmar senha</label>
                                    <input type="password" class="form-control" placeholder="Digite a confirmação de senha"
                                        aria-label="Confirmar senha" name="password_confirmation">
                                </div>
                                <div class="form-check form-check-info text-start">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault" checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Eu aceito os <a href="javascript:;"
                                            class="text-secondary font-weight-bolder">Termos e condições</a>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <input type="submit"
                                        class="btn bg-gradient-secondary w-100 my-4 mb-2" value="Registrar">
                                </div>
                                
                            </form>
                            <p class="text-sm mt-3 mb-0">Já tem uma conta? <a href="{{ route('login') }}"
                                class="text-secondary font-weight-bolder">Entrar</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-4 mx-auto text-center">
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Compania
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Sobre
                    </a>
                    <a href="javascript:;" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
                        Time
                    </a>
                </div>                
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-secondary">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Soft by Creative Tim.
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
</body>

</html>
