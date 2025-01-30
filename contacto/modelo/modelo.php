<?php

class Consulta
{

    private $consultas = [];

    private $dbc;

    public function __construct()
    {
        $this->dbc = new PDO("mysql:host=localhost;dbname=fol", "root", "");
    }

    public function setConsulta($nombre, $correo, $telefono, $pregunta) {
        $sql = "INSERT INTO consultas (nombre, correo, telefono, pregunta) VALUES ('{$nombre}', '{$correo}', '{$telefono}', '{$pregunta}')";
        $resultado = $this->dbc->query($sql);
        return $resultado;
    }

    public function getConsultas() {
        $sql = "SELECT * FROM consultas";
        foreach ($this->dbc->query($sql) as $row) {
            $this->consultas[] = $row;
        }
        return $this->consultas;
    }

    public function getConsulta($id) {
        $sql = "SELECT * FROM consultas WHERE id = '{$id}'";
        foreach ($this->dbc->query($sql) as $row) {
            $this->consultas[] = $row;
        }
        return $this->consultas;
    }

    public function eliminarConsulta($id) {
        $sql = "DELETE FROM consultas WHERE id = '{$id}'";
        $resultado = $this->dbc->query($sql);
        return $resultado;
    }
}