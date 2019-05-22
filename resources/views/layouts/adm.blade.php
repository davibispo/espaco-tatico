<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Espaço Tático</title>
        <!-- Fontawesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/favicon.png') !!}">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SiteSUD') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- JQuery -->
        <script src="js/jquery-3.2.1.min.js"></script>


    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/site') }}">
                            Voltar à Página Principal
                        </a>
                        <a class="navbar-brand" href="{{ route('cadastros.create') }}">Associados</a>
                        <a class="navbar-brand" href="{{ route('calendario.create') }}">Eventos</a>
                        <a class="navbar-brand" href="{{ route('resultados.create') }}">Resultados</a>
                        <a class="navbar-brand" href="{{ route('contatos.index') }}">Contatos</a>

                    </div>
                </nav>

            <div id="app">
                <!--alertas-->
                @if (session('alertSuccess'))
                    <div class="alert alert-success text-center">
                        {{ session('alertSuccess') }}
                    </div>
                    @elseif(session('alertDanger'))
                        <div class="alert alert-danger text-center">
                            {{ session('alertDanger') }}
                        </div>
                @endif
            <!--fim do alerta-->
            @yield('content')
            </div>

        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Tooltip -->
        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>

    </body>
</html>
