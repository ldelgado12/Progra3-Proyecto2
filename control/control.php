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

            //Login
            // $usuario = '';
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
                if($rs["id_usuario"] >0){
                    $this->smarty->setAssign('title', 'Progra III   ');
                    $this->smarty->setDisplay('header.tpl');
                    $this->smarty->setDisplay('Frm_principal.tpl');
                    $this->smarty->setDisplay('footer.tpl');
                    // echo "Aqui";
                }else{
                    $this->smarty->setDisplay('login.tpl');
                }
            }else{
                $this->smarty->setDisplay('login.tpl');
            }

            
        }

        function c_editarUsuario(){
            // $rs = $this->ins_model->m_editarUsuario([],1);
        }

        function c_borrarUsuario(){
            // $rs = $this->ins_model->m_borrarUsuario(1);
        }

        function c_crearUsuario(){
            // $rs = $this->ins_model->m_CrearUsuario([]);
        }

        function mostrarFrmLogin(){
            $nombre ='Test';
            $this->smarty->setAssign('nombre', $nombre);
            $this->smarty->setDisplay('index.tpl');
        }
    }
?>