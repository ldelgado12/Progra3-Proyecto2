<?php
/* Smarty version 4.1.0, created on 2022-03-21 03:14:53
  from 'C:\xampp\htdocs\Progra3-Proyecto2ConPhP\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6237df9daf0552_48011464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d459e1e77dff465743487c08801be9542bbbbab' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra3-Proyecto2ConPhP\\view\\templates\\login.tpl',
      1 => 1647828891,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6237df9daf0552_48011464 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Intra Life</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/iniciar_sesion.css">


</head>

<body>
    <header class="main_header">
        <nav>
            <a href="index.html">
            <img class="img_logo" src="images/Logo.png" width="61" height="80" alt="Logo Costa Rica Educa">
            </a>
            <div class="float-right middle2">
                <div class="float-right mr-2">
                    <p class="white">¿No eres miembro?</p>
                    <a href="registro_centroEdu.html" class="registrar_cuenta ml-1">Registro Centro Educativo</a>
                    <a href="registro_padre.html" class="registrar_cuenta ml-1">Registro Familiar</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="wrapper">
        <div class="section">

            <div class="cont">
                    <h1 class="center inicio color_text">Iniciar sesión</h1>
                <form action="index.php" method="post">
                        <input type="hidden" name="accion" value="login">
                        <label class="label2 color_text" for="txt_correo">Usuario</label>
                        <input class="form-control border_input" name="usuario" type="text" id="txt_correo">
                        <label class="label2 color_text" for="txt_contrasenna">Contraseña</label>
                        <input class="form-control border_input" name="password" type="password" id="txt_contrasenna">
                        <div class="center">
                        <button  class="ingresar" id="btn_ingresar">Ingresar</button>
                        </div>
                        <p class="p color_text"><a href="#" class="p" id="cambiar_clave">¿Se le olvidó la contraseña?</a></p>

                </form>
            </div>
        </div>
    </div>
        <!-- <div class="container">
            <div class="row text-center login-page">
                <div class="col-md-12 login-form">
                    <form action="index.php" method="post">

                        <input type="hidden" name="accion" value="login">

                        <div class="row">
                            <div class="col-md-12 login-form-header">
                                <p class="login-form-font-header">LOGIN<span>NORMAL</span>
                                <p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 login-from-row">
                                <input name="usuario" type="text" placeholder="Usuario" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 login-from-row">
                                <input name="password" type="password" placeholder="Contraseña" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 login-from-row">
                                <button class="btn btn-info">Entrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>



        </div> -->



</body>

</html><?php }
}
