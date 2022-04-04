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
                case "mostrarFormRegistro":
                    $this->mostrarRegistroEstudiante();  
                    break;
                case "registrarUsuario":
                    $this->registrarUsuario();
                    $this->registrarNotaEstudiante();
                    $this->mostrarFrmLogin();
                    break;
                case "abrirFormActualizarNotas":
                    $this->abrirFormularioActualizacion();
                    break;
                case "editarUsuario":
                    $this->actualizarNotas();
                    // $this->validarLogin();  
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
                    if($rs["role"]==2){
                        $this->smarty->setAssign('role', "alumno");
                    }else{
                        $this->smarty->setAssign('role', "maestro");
                    }
                    $this->smarty->setAssign('usuario', $rs["usuario"]);
                    $this->smarty->setAssign('id_usuario', $rs["id_usuario"]);

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
        function mostrarRegistroEstudiante(){
            $this->smarty->setDisplay('signUpTeacher.tpl');
        }
        function registrarUsuario(){

            $nombre =  $_REQUEST["nombre"];
            $apell1 =  $_REQUEST["apell1"];
            $apell2 =  $_REQUEST["apell2"];
            $usuario =  $_REQUEST["usuario"];
            $pass =  $_REQUEST["pass"];
            $role =  $_REQUEST["role"];
            if ($role == "profesor") {
                $role = 1;
            }else {
                $role = 2;
            }

            echo($role);

            $arr = array();
            $arr[] = $usuario;
            $arr[] = $pass;
            $arr[] = $nombre;
            $arr[] = $apell1;
            $arr[] = $apell2;
            $arr[] = $role;


            $rs =  $this->ins_model->m_crearUsuario($arr);

            if($rs){
                // $this->smarty->setAssign("mensaje","Usuario creado Correctamente");
                // $this->smarty->setDisplay("login.tpl");
                echo("Usuario creado Correctament");
            }else {
                // $this->smarty->setAssign("mensaje","Error creando usuario");
                // $this->smarty->setDisplay("login.tpl");
                echo("Usuario no fue creado correctament");
            }

        }
        function registrarNotaEstudiante(){
            $usuario = $_REQUEST['usuario'];
            $password = $_REQUEST['pass'];
            $rs = $this->ins_model-> m_crearNota($usuario, $password);

        }
        function abrirFormularioActualizacion(){
            $id_usuario = $_REQUEST['id_usuario'];
            $rs =  $this->ins_model->m_obtenerNota($id_usuario);
            echo $id_usuario;
            echo $rs['nombre'];
            $this->smarty->setAssign("id_usuario",$id_usuario);
            $this->smarty->setAssign("usuario",$rs['usuario']);
            $this->smarty->setAssign("nombre",$rs['nombre']);
            $this->smarty->setAssign("apell1",$rs['apell1']);
            $this->smarty->setAssign("apell2",$rs['apell2']);
            $this->smarty->setAssign("matematica",$rs['matematica']);
            $this->smarty->setAssign("espaniol",$rs['espaniol']);
            $this->smarty->setAssign("ciencias",$rs['ciencias']);
            $this->smarty->setAssign("estudios_sociales",$rs['estudios_sociales']);
            $this->smarty->setAssign("ingles",$rs['ingles']);
            $this->smarty->setDisplay('updateStudent.tpl');
        }
        function actualizarNotas(){
            $id_usuario =  $_REQUEST["id_usuario"];
            $usuario =  $_REQUEST["usuario"];
            $nombre =  $_REQUEST["nombre"];
            $apell1 =  $_REQUEST["apell1"];
            $apell2 =  $_REQUEST["apell2"];
            $matematica =  $_REQUEST["matematica"];
            $espaniol =  $_REQUEST["espaniol"];
            $ciencias =  $_REQUEST["ciencias"];
            $estudios_sociales =  $_REQUEST["estudios_sociales"];
            $ingles =  $_REQUEST["ingles"];

            $arr = array();
            $arr[] = $id_usuario;
            $arr[] = $usuario;
            $arr[] = $nombre;
            $arr[] = $apell1;
            $arr[] = $apell2;
            $arr[] = $matematica;
            $arr[] = $espaniol;
            $arr[] = $ciencias;
            $arr[] = $estudios_sociales;
            $arr[] = $ingles;

            $rs =  $this->ins_model->m_editarUsuario($arr, $id_usuario);

            if($rs){
                // $this->smarty->setAssign("mensaje","Usuario creado Correctamente");
                // $this->smarty->setDisplay("login.tpl");
                echo("Notas Actualizadas");
            }else {
                // $this->smarty->setAssign("mensaje","Error creando usuario");
                // $this->smarty->setDisplay("login.tpl");
                echo("Notas no actualizadas");
            }


        }
    }
?>