<?php

class conn{

    private $server;
    private $user;
    private $password;
    private $dataBase;
    private $conexion;

    function __construct(){
        $this->server = "localhost";
        $this->user = "root";
        $this->password = "";
        $this->dataBase = "proyecto";

    }

    function AbrirBD(){

        $this->conexion = new mysqli($server, $user, $password, $dataBase);

        if(!$conexion){
            echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
            echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
            echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }

        return $this->conexion;

    }

    function CerrarBD(){
        $this->conexion->close();
    }


}

?>