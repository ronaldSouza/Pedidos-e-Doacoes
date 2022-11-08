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
    <link href="{{ asset('assets/css/cover.css') }}" rel="stylesheet">

</head>

<body class="bg-secondary">
    <div class="d-flex text-white top-0 end-0 text-center justify-content-center flex-column"
        style="position: static; height: 90vh;">
        <div class="position-relative h-100 d-flex flex-column justify-content-center overflow-hidden img-bg-1">
            <span class="mask bg-gradient-dark opacity-4"></span>
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column position-relative">
                <header class="mb-auto">
                    <div>
                        <h3 class="float-md-start mb-0 text-white">Christmas Mail</h3>
                        
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
                    <p class="lead mt-4">
                        <a href="{{ route('login') }}" class="btn btn-lg btn-primary fw-bold border-white">Entrar</a>
                    </p>
                </div>

                <div class="mt-auto">
                </div>
            </div>
        </div>
    </div>

    <main class="container py-5 text-white overflow-hidden my-5">
        <div class="row mb-4">
            <div class="col-lg-6">
                <h1 class="text-white mt-5 mb-4 font-verdana fst-italic" style="font-size: 4rem">SOBRE NOSSO SOFTWARE
                </h1>
                <p class="lh-base font-trebuchet-ms" style="font-size: 1.5rem;">Ele oferece uma funcionalidade eficiente
                    que pretende atingir todos os objetivos que facilitem o processo de solicitar e atender as cartinhas
                    de natal.</p>
                <p class="lh-base font-trebuchet-ms" style="font-size: 1.5rem;">O programa tem o público-alvo toda a
                    população desde crianças até adultos que buscam fazer ou atender um pedido natalino. É um sistema
                    bem completo e que atende as necessidades do seu público.</p>
            </div>
            <div class="col-lg-6 d-none d-lg-flex space-between">
                <div class="img-bg-kid me-auto position-relative"
                    style="width: 47%; height: 85%; background-position-x: -150px; transform: translate(0px, 0px); display: inline-block">
                </div>
                <div class="img-bg-girl ms-auto position-relative"
                    style="width: 47%; height: 85%; background-position-x: -250px; transform: translate(0px, 30%); display: inline-block">
                </div>

            </div>
        </div>
    </main>
    {{-- <div class="container">
        <span class="mask bg-gradient-primary opacity-6"></span>
    </div> --}}
    <div class="top-0 end-0 text-center justify-content-center flex-column">
        <div
            class="position-relative bg-primary w-100 d-flex flex-column justify-content-center overflow-hidden img-bg-2">
            <span class="mask bg-primary opacity-9"></span>
            <div class="container pt-4 pb-2">
                <h4 class="mt-5 text-white font-weight-bolder position-relative" style="font-size: 3.8rem;">Nós
                    oferecemos...</h4>
                <div class="row my-5 px-lg-5" style="min-height: 70vh">
                    <a href="{{ route('login') }}" class="col-lg-6 d-flex h-100 text-center justify-content-center flex-column" style="height: 50vh">
                        <div class="position-relative bg-gradient-dark btn mt-4 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden img-bg-gifts"
                            style="background-position-x: -150px; height: 60vh;">
                            <span class="mask bg-gradient-dark opacity-5"></span>
                            <h2 class="text-white position-relative">Doe para uma criança</h2>
                        </div>

                    </a>
                    <a href="{{ route('login') }}" class="col-lg-6 d-flex h-100 text-center justify-content-center flex-column ms-auto" style="height: 50vh">
                        <div class="position-relative bg-gradient-dark btn mt-4 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden img-bg-1"
                            style="background-position-x: -150px; height: 60vh;">
                            <span class="mask bg-gradient-dark opacity-5"></span>
                            <h2 class="text-white position-relative">Faça um pedido</h2>
                        </div>

                    </a>

                </div>
            </div>

        </div>
    </div>

    <div class="top-0 end-0 text-center justify-content-center flex-column">
        <div
            class="position-relative w-100 d-flex flex-column justify-content-center overflow-hidden">
            <div class="container pt-4 pb-2">
                <h4 class="mt-5 text-white font-weight-bolder position-relative" style="font-size: 3.8rem;">Equipe</h4>
                <div class="row my-5 px-lg-5">
                    <a href="https://www.instagram.com/samuellddantas/" target="_blank" class="col-3 d-flex text-center justify-content-center flex-column m-0 px-2 px-lg-3">
                        <div class="bg-gradient-dark w-100 btn img-samuel"
                            style="border-radius: 50%; aspect-ratio: 1 / 1;">
                        </div>
                        <p class="text-white font-lucida-sans fs-5 mb-0">Samuel</p>
                        <p class="text-white-50 font-lucida-sans">Designer</p>
                    </a>
                    <a href="https://www.instagram.com/sayonarasoares__/" target="_blank" class="col-3 d-flex text-center justify-content-center flex-column m-0 px-2 px-lg-3">
                        <div class="bg-gradient-dark btn img-sayonara"
                            style="border-radius: 50%; aspect-ratio: 1 / 1;">
                        </div>
                        <p class="text-white font-lucida-sans fs-5 mb-0">Sayonara</p>
                        <p class="text-white-50 font-lucida-sans">Gerente</p>

                    </a>

                    <a href="https://www.instagram.com/ronaldt.aragao/" target="_blank" class="col-3 d-flex text-center justify-content-center flex-column m-0 px-2 px-lg-3">
                        <div class="bg-gradient-dark btn img-ronald"
                            style="border-radius: 50%; aspect-ratio: 1 / 1;">
                        </div>
                        <p class="text-white font-lucida-sans fs-5 mb-0">Ronald</p>
                        <p class="text-white-50 font-lucida-sans">Desenvolvedor</p>

                    </a>
                    <a href="https://www.instagram.com/julio_azevedo07/" target="_blank" class="col-3 d-flex text-center justify-content-center flex-column m-0 px-2 px-lg-3">
                        <div class="bg-gradient-dark btn img-julio"
                            style="border-radius: 50%; aspect-ratio: 1 / 1;">
                        </div>
                        <p class="text-white font-lucida-sans fs-5 mb-0">Júlio</p>
                        <p class="text-white-50 font-lucida-sans">Analista</p>

                    </a>
                </div>
            </div>

        </div>
    </div>

    <footer class="footer py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-4 mb-0 mx-auto text-center">
                    <p class="text-white-50">
                        Endereço: RN-288, s/n - Nova, Caicó - RN, 59300-000

                    </p>
                </div>
                <div class="col-lg-4 mb-0 mx-auto text-center">
                    <p class="text-white-50">
                        E-mail: gabin.ca@ifrn.edu.br

                    </p>
                </div>
                <div class="col-lg-4 mb-0 mx-auto text-center">
                    <p class="text-white-50">
                        Telefone: (84) 4005-4102
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mx-auto text-center mt-1">
                    <p class="mb-0 text-white-50">
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
