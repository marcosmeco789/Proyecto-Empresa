<?php 

class Consulta {

    private $consultas = [];

    private $dbc;

    public function __construct() {
        $this->dbc = new PDO("mysql:host=localhost;dbname=fol","root","");
    }
}

?>