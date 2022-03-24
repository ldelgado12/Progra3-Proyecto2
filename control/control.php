<?php

    require_once 'libs/smarty_4_1_0/config_smarty.php'; 

    class control{

        private $smarty;
        private $accion;

        function __construct(){
            $this->smarty = new config_smarty();
            $this->accion = "";
        } 

        function menu(){
            //SIEMPRE PRIMERO LOS ASSIGN ANTES QUE EL DISPLAY

            if(isset($_REQUEST['accion'])){
                $this->accion = $_REQUEST['accion'];
            }

            switch($this->accion){
                case "":
                    $this->MostrarFRMLogin();
                break;
                case "login":
                    $this->validarLogin();
                break;
                
            }
        }

        function validarLogin(){

            $usuario = $_REQUEST['usuario'];
            $password = $_REQUEST['password'];


        }


        function MostrarFRMLogin(){
            try{
                $nombre = "Luis";
                $this->smarty->setAssign("nombre", $nombre);
                $this->smarty->setAssign("x", $nombre);
                $this->smarty->setDisplay("login.tpl");  
            }catch(Exception $e){
                echo "error de variable smarty";
            }
        }


    }


?>