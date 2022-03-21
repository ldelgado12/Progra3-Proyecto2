<?php
/* Smarty version 4.1.0, created on 2022-03-21 02:54:23
  from 'C:\xampp\htdocs\Progra3-Proyecto2ConPhP\view\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6237dacf92c897_34550823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0e2847ffe4ae07e4bf4c3c29f8e587a9a16f755' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Progra3-Proyecto2ConPhP\\view\\templates\\index.tpl',
      1 => 1646102254,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:login.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6237dacf92c897_34550823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>


<?php $_smarty_tpl->_subTemplateRender("file:login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>'foo'), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
