<?php
/* Smarty version 4.1.0, created on 2022-04-03 02:06:34
  from 'C:\xampp\htdocs\proyectoProgra\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6248e50a29f262_77815069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad04970ddfa74c71225a2b0e46e5fdf7c2514f4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoProgra\\view\\templates\\login.tpl',
      1 => 1648944392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6248e50a29f262_77815069 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Costa Rica Educa - Registro</title>
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
                    <a class="registrar_cuenta ml-1" href="index.php?accion=mostrarFormRegistro">Registrar el usuario</a>
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



</body>

</html><?php }
}
