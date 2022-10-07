<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">>
    <title>Sistema Gestion administrativa
    </title>
    <style>
        body {
            padding: 0;
            margin: 0;
            height: 100vh;
            font-family: "Nunito Sans";
        }

        .form-control {
            line-height: 2;
        }

        .bg-custom {
            background-color: #09090a;
        }

        .btn-custom {
            background-color: #3e3d56;
            color: #fff;
        }

        .btn-custom:hover {
            background-color: #33313f;
            color: #fff;
        }

        label {
            color: #fff;
        }

        a,
        a:hover {
            color: #fff;
            text-decoration: none;
        }

        a,
        a:hover {
            text-decoration: none;
        }

        @media(max-width: 932px) {
            .display-none {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="row m-0 h-100">
        <div class="col p-0 text-center d-flex justify-content-center align-items-center display-none">
            <img src="public/img/s.png" class="#">
        </div>
        <div class="col p-0 bg-custom d-flex justify-content-center align-items-center flex-column w-100">
            <div>
                <h1>SGA</h1>
            </div>
        <img src="public/img/logo.png" class="#">
        <br>
        <br>
            <form class="w-75" action="#">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="usuario"
                        required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleFormControlInput2" placeholder="contraseña"
                        required>
                </div>
                <!-- TODO: quitar etiqueta <a> y dejar solo boton -->
                <a href="Inicio.php">
                    <button type="button" class="btn btn-custom btn-lg btn-block mt-3">Ingresar</button>
                </a>
                <div class="d-flex justify-content-center mt-1">
                    <label for="exampleFormControlInput1" class="form-label">Version 1.0</label>
                </div>

            </form>
        </div>
    </div>
</body>
</html>

<br>
<br>
<?php 
    include('piedepagina.php');
?>