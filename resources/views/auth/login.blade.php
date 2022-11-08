<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        Christmas Mail
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
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-primary text-gradient"
                            href="{{ route('landing_page') }}">
                            <i class="fa fa-door-open"></i>
                            Christmas Mail
                        </a>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Entrar</h4>
                                    <p class="mb-0">Insira seu e-mail e senha para entrar</p>
                                </div>
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
                                    <form role="form" class="user" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <input type="email" class="form-control form-control-lg"
                                                placeholder="Email" aria-label="Email" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" class="form-control form-control-lg"
                                                placeholder="Senha" aria-label="Senha" name="password">
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Permanecer
                                                conectado</label>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" value="Entrar">
                                            {{-- Substitua o botão acima pelo botão apaixo --}}
                                            {{-- <button type="button" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Entrar</button> --}}
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Não tem uma conta?
                                        <a href="{{ route('register') }}"
                                            class="text-primary text-gradient font-weight-bold">Registrar-se</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('{{ asset('assets/img/two-trees.jpg') }}');
          background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-5"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">Natal é tempo de
                                    partilhar amor</h4>
                                <p class="text-white position-relative">Faça seu acesso e realize o sonho de uma criança
                                    no Natal.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
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
