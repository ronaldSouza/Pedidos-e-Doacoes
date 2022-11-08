<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}">
    <title>
        Christmas Mail
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    {{-- <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" /> --}}
    @vite(['resources/js/app.js'])
    {{-- @vite(['public/assets/css/nucleo-icons.css'])
  @vite(['public/assets/css/nucleo-svg.css']) --}}

    <!-- Font Awesome Icons -->
    {{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
    <script src="https://kit.fontawesome.com/e2c480ca8e.js" crossorigin="anonymous"></script>
    {{-- <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" /> --}}

    <!-- CSS Files -->
    {{-- <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css?v=2.0.4') }}" rel="stylesheet" /> --}}
    {{-- <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" /> --}}
    {{-- @vite(['public/assets/css/argon-dashboard.css?v=2.0.4']) --}}
    @vite(['public/assets/scss/argon-dashboard.scss'])
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />


</head>

<body class="bg-secondary">
    <div class="min-height-300 position-absolute w-100 img-bg-1 filter-dark-50"></div>


    <main class="main-content position-relative border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                {{-- <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Christmas Mail</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Christmas Mail</h6>
        </nav> --}}
                <ul class="navbar-nav justify-content-start">
                    <li class="nav-item d-flex alig-item-center">
                        <a href="{{ route('admin.index') }}" class="nav-link text-white px-0 me-3 fs-6">
                            <i class="fa-solid fa-home me-sm-1"></i>
                            <span class="d-sm-inline d-none">Principal</span>
                        </a>
                        {{-- Fazer um if identificando se o usuário é admin para mostrar a opção abaixo --}}
                        <a href="{{ route('admin.list') }}" class="nav-link text-white px-0 me-3 fs-6">
                            <i class="fa-solid fa-envelopes-bulk me-sm-1"></i>
                            <span class="d-sm-inline d-none">Solicitações de Doações</span>
                        </a>                        
                    </li>
                </ul>
                
                <ul class="navbar-nav justify-content-end">
                  <div class="nav-item btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="{{ route('users.show', Auth::user()->id) }}" class="nav-link text-white fs-6">
                      <i class="fa fa-user me-sm-1"></i>
                      <span>Perfil</span>
                    </a>
                    <form action="{{route('logout')}}" method="POST">
                      @csrf
                      <a href="{{ route('logout') }}" class="nav-link text-white fs-6" onclick="this.closest('form').submit();return false;">
                        <span>Sair</span>
                      </a>
                    </form>
                  </div>
                </ul>
            </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- COLOCAR CONTEÚDO AQUI -->

        @yield('content')

    </main>




    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>

    {{-- @vite(['public/assets/js/core/popper.min.js'])
  @vite(['public/assets/js/core/bootstrap.min.js'])
  @vite(['public/assets/plugins/perfect-scrollbar.min.js'])
  @vite(['public/assets/plugins/smooth-scrollbar.min.js'])
  @vite(['public/assets/plugins/chartjs.min.js']) --}}



    @yield('scripts')
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/argon-dashboard.min.js?v=2.0.4') }}"></script>
    {{-- @vite(['public/assets/js/argon-dashboard.min.js?v=2.0.4']) --}}

</body>

</html>
