<?php 
    require_once("../modelo/modelo.php");

    $consulta = new Consulta;
    $datos = $consulta->getConsultas();

    require_once("../vista/vista.php");
?>