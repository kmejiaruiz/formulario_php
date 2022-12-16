<?php
include('./conexion.php');
$id = $_GET['id'];
$eliminar = "delete from user where id = '$id'";
$resultado = mysqli_query($conectar,$eliminar);

if ($resultado) {
    header("Location: ./tabla");
}
?>