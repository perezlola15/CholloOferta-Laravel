<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            padding-top: 70px;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .container {
            flex: 1;
        }

        footer {
            margin-top: auto;
        }
    </style>
</head>

<body class="d-flex flex-column">

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="{{ route('chollos.index') }}">
                <img src="{{ asset('logo.png') }}" alt="Logo de Chollo Ofertas" height="50">
                Chollo Ofertas
            </a>
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('chollos.index') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Nuevos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Destacados</a>
                </li>
            </ul>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <div style="background-color: #FDFBFB">
        <footer class="text-center">
            <p>Lola Pérez Ruiz &copy;CholloOfertas {{ date('Y') }}</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
