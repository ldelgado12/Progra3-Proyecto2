<?php
/* Smarty version 4.1.0, created on 2022-03-01 03:06:12
  from 'C:\xampp\htdocs\primerProyectoPHP\view\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_621d7f94973a38_17249617',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb20e259676c78624d5bbb05163bd9a9d58f9567' => 
    array (
      0 => 'C:\\xampp\\htdocs\\primerProyectoPHP\\view\\templates\\login.tpl',
      1 => 1646100215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_621d7f94973a38_17249617 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Intra Life</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">



</head>
<body>
<div class="container">
<div class="row text-center login-page">
<div class="col-md-12 login-form">
<form action="index.php" method="post">



<div class="row">
<div class="col-md-12 login-form-header">
<p class="login-form-font-header">Intra<span>Life</span><p>
</div>
</div>
<div class="row">
<div class="col-md-12 login-from-row">
<input name="usuario" type="text" placeholder="Usuario" required/>
</div>
</div>
<div class="row">
<div class="col-md-12 login-from-row">
<input name="password" type="password" placeholder="Contraseña" required/>
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



</div>



</body>
</html><?php }
}
