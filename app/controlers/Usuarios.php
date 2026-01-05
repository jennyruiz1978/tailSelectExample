<?php

class Usuarios extends Controlador
{



    public function __construct()
    {
        session_start();
        $this->controlPermisos();
        $this->modeloUsuarios = $this->modelo('Usuario');
    }

    public function index()
    {
        $users = $this->modeloUsuarios->obtenerUsuarios();


        $datos = [
            "users" => $users,
            "equipos" => $this->modeloUsuarios->obtenerEquiposPorSucursal()
        ];

        $this->vista('usuarios/usuarios', $datos);
    }

}
