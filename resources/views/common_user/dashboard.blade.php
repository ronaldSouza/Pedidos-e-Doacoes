<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        Dashboard - Christmas Mail
    </title>

    @vite(['resources/js/app.js'])
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    @vite(['public/assets/scss/argon-dashboard.scss'])
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/cover.css') }}" rel="stylesheet">

</head>

<body class="d-flex text-white vh-100 top-0 end-0 text-center justify-content-center flex-column">
    <div class="position-relative h-100 d-flex flex-column justify-content-center overflow-hidden img-bg-1">
        <span class="mask bg-gradient-dark opacity-4"></span>
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column position-relative">
            <header class="mb-auto">
                <div>
                    <nav class="nav nav-masthead justify-content-center float-start">
                        {{-- Fazer um if identificando se o usuário é admin para mostrar a opção abaixo --}}
                        <a class="nav-link text-white fs-4" href="{{ route('pedidos.index') }}">Doe</a>
                        <a class="nav-link text-white fs-4" href="{{ route('pedidos.create') }}">Fazer Pedido</a>
                    </nav>
                        <form action="{{ route('logout') }}" method="POST" class="float-end">
                            @csrf
                            <input type="submit" class="btn btn-md btn-primary border-white" value="Sair">
                        </form>
                </div>
            </header>

            <div class="px-3">
                <h1 class="text-white">Christmas Mail</h1>
                <p class="lead">
                    Natal é tempo de partilhar amor. Faça o Natal de uma criança mais feliz e, com isso,
                    seja mais feliz também.
                </p>
                <p class="lead">
                    É uma criança carente? Faça seu pedido!
                </p>
                
            </div>

            <div class="mt-auto">
            </div>
        </div>
    </div>

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
