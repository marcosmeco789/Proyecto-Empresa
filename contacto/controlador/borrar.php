<?php 

require_once "../modelo/modelo.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])){
    $consulta = new Consulta;
    $resultado = $consulta->eliminarConsulta($_GET['id']);
    $datos = $consulta->getConsultas();
    require_once "../vista/vista.php";
} else {
    echo "Error al eliminar la consulta";
}

?>