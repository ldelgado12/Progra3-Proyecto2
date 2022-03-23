<?php

    require_once 'libs/smarty_4_1_0/config_smarty.php'; 

    class control{

        private $smarty;
        function __construct(){
            $this->smarty = new config_smarty();
        } 

        function menu(){
                //SIEMPRE PRIMERO LOS ASSIGN ANTES QUE EL DISPLAY
            
            $nombre = "Luis";
            $this->smarty ->setAssign("nombre",$nombre);

            $this->smarty ->setDisplay("login.tpl");
        }


    }


?>