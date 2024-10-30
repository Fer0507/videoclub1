<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">VIDEOCLUB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Inicio</a>
                </li>

                @if (Auth::check())
                    <!-- Verificar si el usuario está autenticado -->
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/videoclub1/public/catalog">Listado Películas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/videoclub1/public/catalog/create">Añadir Película</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                @endif
            </ul>

            <!-- Mover el formulario de Logout a la derecha con ml-auto -->
            @if (Auth::check())
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                            @csrf <!-- Incluye el token CSRF -->
                            <button type="submit" class="nav-link btn btn-link btn btn-success"
                                style="padding: 0;">Logout</button>

                        </form>
                    </li>
                </ul>
            @endif
        </div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
