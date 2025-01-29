<?php 

require_once "../modelo/modelo.php";

$consulta = new Consulta;

if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['pregunta'])) {
    $resultado = $consulta->actualizarConsulta($_POST['id'], $_POST['nombre'], $_POST['correo'], $_POST['telefono'], $_POST['pregunta']);

    if ($resultado) {
        $mensaje = "<div class='alert alert-success text-center'>Consulta actualizada correctamente</div>";
    } else {
        $mensaje = "<div class='alert alert-danger text-center'>Error al actualizar la consulta</div>";
    }
} else {
    $mensaje = "<div class='alert alert-danger text-center'>Todos los campos son obligatorios</div>";
}

$datos = $consulta->getConsultas();
require_once "../vista/vista.php";

?>