<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="F1 REPETICIONES" />

    <link rel="shortcut icon" href="./img/F1/iconos/favicon.ico">

    <!--CSS-->
    <link rel="stylesheet" href="../css/boostrap/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/index/index.css" />
    <link rel="stylesheet" href="../css/generalV2.css" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="https://burnoutf1.com/" class="navbar-brand"><img loading="lazy"
                src="../img/F1/iconos/logo.png" width="100px" alt=""></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="https://burnoutf1.com/" class="nav-link" rel="category tag">Inicio</a>
                </li>

                <li class="nav-item">
                    <a href="https://burnoutf1.com/formula1Contenido.php" rel="category tag" class="nav-link">Formula 1</a>
                </li>

                <li class="nav-item">
                    <a href="https://burnoutf1.com/MotoGP-Contenido.php" rel="category tag" class="nav-link">MotoSport</a>
                </li>

            </ul>
        </div>
    </nav>

    <!--scripts-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>

    <script>
        function myFunction() {
            var rutaActual = window.location.href;
            if (rutaActual.includes('/es/')) {
                var nuevaRuta = rutaActual.replace('/es/', '/');
                window.location.replace(nuevaRuta);
            }
        }
    </script>
</body>