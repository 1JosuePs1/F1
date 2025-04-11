<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="../../img/F1/iconos/favicon.ico" />
    

    <!-- Metadatos SEO -->
    <title>Watch live Dazn F1 - Sports and More </title>
    <meta name="description"
        content="Watch live Dazn F1 - Sports and More">
    <meta name="keywords"
        content="Watch live Dazn F1, Dazn F1">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">

    <!-- Cache -->
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <!-- Metadatos para redes sociales -->
    <meta property="og:title" content="Watch live Dazn F1 - Sports and More">
    <meta property="og:description"
        content="Watch live Dazn F1  - Sports and More">
    <meta property="og:image" content="../../img/F1/iconos/favicon.ico">
    <meta property="og:type" content="website">

    <!-- Metadatos para redes sociales TWITER -->
    <meta property="twitter:site_name" content="Deportes y mas" />
    <meta property="twitter:title" content="Watch live Dazn F1 - Sports and More" />
    <meta property="twitter:description"
        content="Watch live Dazn F1 - Sports and More" />
    <meta property="twitter:image" content="../../img/F1/iconos/favicon.ico" />

    <link rel="alternate" hreflang="en" href="https://deportesymas.com.es/F1/EnVivo/DAZN-C4.php">
    <link rel="alternate" hreflang="es" href="https://deportesymas.com.es/es/F1/EnVivo/DAZN-C4.php">


    <link rel="stylesheet" href="../../css/general.css" />
    <link rel="stylesheet" href="../../css/enVivo/EnVivoMejoradoV4.css" />
    <link rel="stylesheet" href="../../css/enVivo/blob.css" />

    <script src="https://kit.fontawesome.com/c56cdedc82.js" crossorigin="anonymous"></script>

    <style>
        .blob-4 {
            z-index: 1;
            background: black;
            border-radius: 50%;
            box-shadow: 0 0 0 0 rgba(0, 0, 0, 1);
            margin-left: 10px;
            height: 10px;
            width: 10px;
            transform: scale(1);
            animation: pulse-black 2s infinite;
        }


        .red-4 {
            background: rgb(255, 24, 1);
            box-shadow: 0 0 0 0 rgba(255, 24, 1, 1);
            animation: pulse-red 2s infinite;
        }

        @keyframes pulse-red {
            0% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(255, 82, 82, 0.7);
            }

            70% {
                transform: scale(1);
                box-shadow: 0 0 0 10px rgba(255, 82, 82, 00);
            }

            100% {
                transform: scale(0.95);
                box-shadow: 0 0 0 0 rgba(255, 82, 82, 00);
            }
        }
    </style>

</head>

<body>
    <div class="container">
        <iframe id="myFrame" src="https://deportesymas.com.es/F1/canales/DAZN-C4.html" class="video-iframe" allowfullscreen>
        </iframe>

        <div class="channel-container">
        <?php require('./componente/navSide.php')?>
        </div>
    </div>

   
                  
</body>

</html>