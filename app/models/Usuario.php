<?php


class Usuario{

    private $db;


    public function __construct(){
        $this->db = new Base;
    }

    public function obtenerEquipos()
    {
        $this->db->query("SELECT id, nombre FROM equipos");
        $resultado = $this->db->registros();
        return $resultado;
    }
}