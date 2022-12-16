<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<!-- <script>
    let timer = setTimeout(function() {
        document.querySelector('alert').style.display = 'none';
    }, 3500);
</script> -->
<?php
include("./conexion.php");

if (isset($_POST['enviar-btn'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1) {
        $nombre = trim($_POST['nombre']);
        $apellido = trim($_POST['apellido']);
        $edad = trim($_POST['edad']);
        $cargo = trim($_POST['ocupacion']);

        $insertar = "INSERT INTO user(nombre, apellido, edad, cargo) VALUES('$nombre', '$apellido', '$edad', '$cargo')";
        
        $verificar = mysqli_query($conectar, "SELECT * FROM user where nombre = '$nombre' and apellido = '$apellido'");

        if (mysqli_num_rows($verificar) > 0) {
            ?>
            <div class="alert alert-danger" style="display: flex; justify-content: center; flex-direction: column; margin-top: -75px;">
                <div style="display: flex; justify-content: center;" >
                    <i class="bi bi-x-circle"></i>
                </div>
                Este usuario ya ha sido registrado.
            </div>
            <?php
            die();
        }

        $resultado = mysqli_query($conectar, $insertar);

        if ($resultado) {
        ?>
            <div class="alert alert-success" style="display: flex; justify-content: center; flex-direction: column; margin-top: -75px;">
                <div style="display: flex; justify-content: center;">
                    <i class="bi bi-check-circle-fill"></i>
                </div>
                &Eacute;xito en la operaci&oacute;n.
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-danger" style="display: flex; justify-content: center; flex-direction: column;">
                <div style="display: flex; justify-content: center;">
                    <i class="bi bi-x-circle"></i>
                </div>
                Algo ha salido mal, por favor intente nuevamente.
            </div>
        <?php
        }
    } else {
        ?>
        <div class="alert alert-warning" style="display: flex; justify-content: center; flex-direction: column; margin-top: -75px;">
            <div style="display: flex; justify-content: center;">
                <i class="bi bi-exclamation-circle-fill"></i>
            </div>
            Favor rellene los campos para continuar.
        </div>
        <?php
    }
}
