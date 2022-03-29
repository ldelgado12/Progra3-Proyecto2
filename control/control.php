<?php

    require_once 'libs/smarty_4_1_0/config_smarty.php';
    require_once 'model/model.php';
    class control{
        private $smarty;
        private $accion;
        private $ins_model;

        function __construct(){
            $this->smarty = new config_smarty();
            $this->accion = '';
            $this->ins_model = new model();
        }

        function menu(){

            if(isset($_REQUEST['accion'])){
                $this->accion = $_REQUEST['accion'];
            }

            switch($this->accion){
                case "":
                    $this->mostrarFrmLogin();
                    break;
                case "login":
                    $this->validarLogin();  
                    break;
            }


        }

        function validarLogin(){
            $usuario = $_REQUEST['usuario'];
            $password = $_REQUEST['password'];
            $rs = $this->ins_model->m_validarLogin($usuario, $password);

            
            if(sizeof($rs)>0){
                if($rs["id_usuario"] > 0){

                    
                    foreach($rs as $dataColum){
                        // echo $dataColum . "\n";
                    }
                    if($rs["role"]==1){
                        $this->smarty->setAssign('role', "maestro");
                    }else{
                        $this->smarty->setAssign('role', "alumno");
                    }
                    $this->smarty->setAssign('usuario', $rs["usuario"]);

                    $this->smarty->setDisplay('grades.tpl');
                }else{
                    echo "<h2>Usuario o Contrasenia incorrecto. Por favor verifique o registrese para continuar.</h2>";
                    $this->smarty->setDisplay('login.tpl');
                    
                }
            }else{
                echo "<h2>Usuario o Contrasenia incorrecto. Por favor verifique o registrese para continuar.</h2>";
                $this->smarty->setDisplay('login.tpl');
                
            }

            
        }

        function mostrarFrmLogin(){
            $this->smarty->setDisplay('login.tpl');
        }
    }
?>