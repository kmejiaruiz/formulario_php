<?php
include("./conexion.php");
$users = "SELECT * from personas";
?>




<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/loader.css">
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/reloj.js"></script>
    <link rel="shortcut icon" href="./img/icon2.png" type="image/x-icon">
</head>

<body>

    <!-- div de carga -->
    <div class="wrapper" style="color: #fff;">
        <div class="loader flex" id="loader1">
            <div class="loader flex" id="loader2">
                <div class="loader flex" id="loader3">
                    <!-- <div class="loader flex" id="loader4"></div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- fin div -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>
        $(window).load(function () {
            $(".loader").fadeOut("slow");
            $(".wrapper").fadeOut("slow");
        });
        setTimeout(function () {
            $(".alert").fadeOut("slow")
        }, 2500);
    </script>

    <div class="padre"
        style="display: flex; flex-direction: column-reverse; justify-content: center; align-items: center; height: 100vh; width: 100%;">

        <div class="hijo" style="display: flex; align-items: center; width: 25%;">
            <div class="card w-100">
                <div class="card-body">
                    <form id="enviar" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputName" class="form-label">Nombre</label>
                            <div class="input-group w-100">
                                <span class="input-group-text">
                                    <i class="bi bi-person-circle"></i>
                                </span>
                                <input type="text" class="form-control" name="nombre" id="exampleInputName"
                                    placeholder="Nombre">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputApellido" class="form-label">Apellido</label>
                            <div class="input-group w-100">
                                <span class="input-group-text">
                                    <i class="bi bi-person-circle"></i>
                                </span>
                                <input type="text" class="form-control" name="apellido" id="exampleInputApellido"
                                    placeholder="Apellido">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEdad" class="form-label">Edad</label>
                            <div class="input-group w-100">
                                <span class="input-group-text">
                                    <i class="bi bi-person-circle"></i>
                                </span>
                                <input type="text" class="form-control" name="edad" id="exampleInputEdad"
                                    placeholder="Edad">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputOcupa" class="form-label">Ocupacion</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person-circle"></i>
                                </span>
                                <input type="text" class="form-control" name="ocupacion" id="exampleInputEdad"
                                    placeholder="Cargo/Ocupacion">
                            </div>
                        </div>
                        <hr>
                    </form>
                    <div class="button"
                        style="display: flex; justify-content: center; align-items: center; gap: 20px; ">
                        <button class="btn btn-success" form="enviar" name="enviar-btn">Enviar</button>
                        <button class="btn btn-primary" id="registro">Observar registro</button>
                        <!-- <button class="btn btn-light">By Kleyser</button> -->
                    </div>
                </div>
            </div>
            <script>
                document.getElementById('registro').addEventListener('click', () => {
                    window.location = './tabla';
                });
            </script>
        </div>
        <div id="alert" style="display: flex;">
            <?php
            include("./insertar.php");
            ?>
        </div>
    </div>
    <nav class="fixed-bottom d-flex justify-content-center align-items-center"
        style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
        aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Formulario</li>
            <!-- <li class="breadcrumb-item" aria-current="page"><a href="./tabla">Tabla</a></li> -->
        </ol>
    </nav>
</body>

</html>