<?php
/* Smarty version 4.1.0, created on 2022-04-03 08:53:14
  from 'C:\xampp\htdocs\proyectoProgra\view\templates\updateStudent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6249445adf04f7_96251129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77dae75443265694da71c8c9554420c7b2983cd7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoProgra\\view\\templates\\updateStudent.tpl',
      1 => 1648968792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6249445adf04f7_96251129 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1>Actualizar Notas/Usuario</h1>
    <form action="index.php" method="post">
      <input type="hidden" name="accion" value="editarUsuario">
      <label>
        <p class="label-txt">ID de estudiante</p>
        <input type="text" class="input" name="id_usuario" value="<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
">
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
        <label>
          <p class="label-txt">Edite nombre de usuario</p>
          <input type="text" class="input" name="usuario" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
" required>
          <div class="line-box">
            <div class="line"></div>
          </div>
        </label>
        <label>
          <p class="label-txt">Edite nombre</p>
          <input type="text" class="input" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
" required>
          <div class="line-box">
            <div class="line"></div>
          </div>
        </label>
        <label>
            <p class="label-txt">Edite primer apellido</p>
            <input type="text" class="input" name="apell1" value="<?php echo $_smarty_tpl->tpl_vars['apell1']->value;?>
" required>
            <div class="line-box">
              <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">Ingrese su segundo apellido</p>
            <input type="text" class="input" name="apell2" value="<?php echo $_smarty_tpl->tpl_vars['apell2']->value;?>
" required>
            <div class="line-box">
              <div class="line"></div>
            </div>
        </label>
        <label>
          <p class="label-txt">Nota de Matematicas</p>
          <input type="text" class="input" name="matematica" value="<?php echo $_smarty_tpl->tpl_vars['matematica']->value;?>
" required>
          <div class="line-box">
            <div class="line"></div>
          </div>
      </label>
      <label>
        <p class="label-txt">Nota de Español</p>
        <input type="text" class="input" name="espaniol" value="<?php echo $_smarty_tpl->tpl_vars['espaniol']->value;?>
" required>
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
      <label>
        <p class="label-txt">Nota de Ciencias</p>
        <input type="text" class="input" name="ciencias" value="<?php echo $_smarty_tpl->tpl_vars['ciencias']->value;?>
" required>
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
      <label>
        <p class="label-txt">Nota de Estudios Sociales</p>
        <input type="text" class="input" name="estudios_sociales" value="<?php echo $_smarty_tpl->tpl_vars['estudios_sociales']->value;?>
" required>
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
      <label>
        <p class="label-txt">Nota de Ingles</p>
        <input type="text" class="input" name="ingles" value="<?php echo $_smarty_tpl->tpl_vars['ingles']->value;?>
" required>
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
        <button type="submit" value="editarUsuario">submit</button>
      </form>
</body>
</html><?php }
}
