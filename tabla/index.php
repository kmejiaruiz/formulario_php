<?php
include("../conexion.php");
$usuarios = 'select * from user';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Almacenados</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/loader.css">
    <link rel="shortcut icon" href="../img/data.png" type="image/x-icon">
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
        $(window).load(function() {
            $(".loader").fadeOut("slow");
            $(".wrapper").fadeOut("slow");
        });
    </script>
    <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <div class="container-fluid">
            <table class="table table-striped table-bordered" style="overflow-y: scroll;">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $result = mysqli_query($conectar, $usuarios);
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td>
                                <?php
                                echo $row['nombre'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $row['apellido'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $row['edad'];
                                ?>
                            </td>
                            <td>
                                <?php
                                echo $row['cargo'];
                                ?>
                            </td>
                            <td>
                                <a href="
                                ../eliminar.php?id=<?php echo $row['id']; ?>" class="link">Borrar</a>
                            </td>
                        </tr>
                    <?php
                    }
                    mysqli_free_result($result);
                    ?>
                </tbody>
            </table>
            <div style="display: flex; justify-content: center;">
                <a href="../">
                    <button class="btn btn-primary">Volver</button>
                </a>
            </div>
        </div>
    </div>
    <nav class="fixed-bottom d-flex justify-content-center align-items-center" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../">Formulario</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tabla</li>
        </ol>
    </nav>
    <script src="../js/index.js"></script>
</body>



</html>