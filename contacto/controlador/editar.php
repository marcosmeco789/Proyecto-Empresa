<?php 

if (isset($_GET['id']) && is_numeric($_GET['id'])){
    require_once "../modelo/modelo.php";
    $consulta = new Consulta;
    $datos = $consulta->getConsulta($_GET['id']);
    require_once "../vista/vistaEditar.php";
} else {
    echo "Error al obtener la consulta";
}
?>