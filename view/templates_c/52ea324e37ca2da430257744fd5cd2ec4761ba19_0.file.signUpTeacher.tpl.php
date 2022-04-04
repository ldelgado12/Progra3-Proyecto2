<?php
/* Smarty version 4.1.0, created on 2022-04-04 04:41:28
  from 'C:\xampp\htdocs\proyectoProgra\view\templates\signUpTeacher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624a5ad8477001_24059016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52ea324e37ca2da430257744fd5cd2ec4761ba19' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoProgra\\view\\templates\\signUpTeacher.tpl',
      1 => 1648969779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624a5ad8477001_24059016 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Profesor</title>
    <link rel="stylesheet" href="css/signUpTeacher.css">
</head>
<body>
    <form action="index.php" method="post">
        <input type="hidden" name="accion" value="registrarUsuario">
        <label>
          <p class="label-txt">Ingrese su nombre de usuario</p>
          <input type="text" class="input" name="usuario" required>
          <div class="line-box">
            <div class="line"></div>
          </div>
        </label>
        <label>
          <p class="label-txt">Ingrese su contraseña</p>
          <input type="text" class="input" name="pass" required>
          <div class="line-box">
            <div class="line"></div>
          </div>
        </label>
        <label>
          <p class="label-txt">Ingrese su nombre</p>
          <input type="text" class="input" name="nombre" required>
          <div class="line-box">
            <div class="line"></div>
          </div>
        </label>
        <label>
            <p class="label-txt">Ingrese su primer apellido</p>
            <input type="text" class="input" name="apell1" required>
            <div class="line-box">
              <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">Ingrese su segundo apellido</p>
            <input type="text" class="input" name="apell2" required>
            <div class="line-box">
              <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">Ingrese su role(estudiante o profesor)</p>
            <input type="text" class="input" name="role" required>
            <div class="line-box">
              <div class="line"></div>
            </div>
        </label> 
        <button type="submit" value="registrarUsuario">submit</button>
      </form>
</body>
</html><?php }
}
