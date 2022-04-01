<?php
/* Smarty version 4.1.0, created on 2022-04-01 08:20:31
  from 'C:\xampp\htdocs\proyectoProgra\view\templates\grades.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624699af98b9c0_47386426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2d0287257ff90abac2d7b5178210a5f0644a098' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectoProgra\\view\\templates\\grades.tpl',
      1 => 1648794016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624699af98b9c0_47386426 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Table with Add and Delete Row Feature</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<style>
body {
    color: #404E67;
    background: #F5F7FA;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: auto;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style>
<?php echo '<script'; ?>
>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	var actions = $("table td:last-child").html();
	// Append table with add row form on add new button click
    $(".add-new").click(function(){
		$(this).attr("disabled", "disabled");
		var index = $("table tbody tr:last-child").index();
        var row = '<tr>' +
            '<td><input type="text" class="form-control" name="name" id="name"></td>' +
            '<td><input type="text" class="form-control" name="department" id="department"></td>' +
            '<td><input type="text" class="form-control" name="phone" id="phone"></td>' +
			'<td>' + actions + '</td>' +
        '</tr>';
    	$("table").append(row);		
		$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
        $('[data-toggle="tooltip"]').tooltip();
    });
	// Add row on add button click
	$(document).on("click", ".add", function(){
		var empty = false;
		var input = $(this).parents("tr").find('input[type="text"]');
        input.each(function(){
			if(!$(this).val()){
				$(this).addClass("error");
				empty = true;
			} else{
                $(this).removeClass("error");
            }
		});
		$(this).parents("tr").find(".error").first().focus();
		if(!empty){
			input.each(function(){
				$(this).parent("td").html($(this).val());
			});			
			$(this).parents("tr").find(".add, .edit").toggle();
			$(".add-new").removeAttr("disabled");
		}		
    });
	// Edit row on edit button click
	$(document).on("click", ".edit", function(){		
        $(this).parents("tr").find("td:not(:last-child)").each(function(){
			$(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
		});		
		$(this).parents("tr").find(".add, .edit").toggle();
		$(".add-new").attr("disabled", "disabled");
    });
	// Delete row on delete button click
	$(document).on("click", ".delete", function(){
        $(this).parents("tr").remove();
		$(".add-new").removeAttr("disabled");
    });
});
<?php echo '</script'; ?>
>
</head>
<body>
<div class="container-lg">
    <div>
        <p>Usuario: <em><?php echo $_smarty_tpl->tpl_vars['usuario']->value;?>
</em></p>
        <button type="button" class="btn btn-warning">Cerrar Sesión</button>
    </div>
    <div class="table-responsive">
        <div class="table-wrapper">
            <?php ob_start();
echo $_smarty_tpl->tpl_vars['role']->value;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1 == "alumno") {?>
            <div class="table-title">
              <div class="row">
                  <?php ob_start();
echo $_smarty_tpl->tpl_vars['role']->value;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2 == "alumno") {?>
                  <div class="col-sm-8"><h2>My <b>Grades</b></h2></div>
                  <?php } else { ?>
                  <div class="col-sm-8"><h2>Manage <b>Grades</b></h2></div>
                  <?php }?>
              </div>
          </div>
            <table class="table table-bordered grades">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>User</th>
                      <th>Nombre</th>
                      <th>Primer Apellido</th>
                      <th>Segundo Apellido</th>
                      <th>Matematicas</th>
                      <th>Español</th>
                      <th>Ciencias</th>
                      <th>Estudios Sociales</th>
                      <th>Ingles</th>
                  </tr>
              </thead>
          </table>
          <button type="button" class="btn btn-primary btn-lg btn-block desplegar_notas_button" onclick='desplegarNota(<?php echo $_smarty_tpl->tpl_vars['id_usuario']->value;?>
);'>Haga click para desplegar sus notas.</button>
            <?php } else { ?>
            <div class="table-title">
              <div class="row">
                  <?php ob_start();
echo $_smarty_tpl->tpl_vars['role']->value;
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3 == "alumno") {?>
                  <div class="col-sm-8"><h2>My <b>Grades</b></h2></div>
                  <?php } else { ?>
                  <div class="col-sm-8"><h2>Manage <b>Grades</b></h2></div>
                  <?php }?>
                  <div class="col-sm-4">
                      <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                  </div>
              </div>
          </div>
            <table class="table table-bordered grades">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Nombre</th>
                        <th>Primer Apellido</th>
                        <th>Segundo Apellido</th>
                        <th>Matematicas</th>
                        <th>Español</th>
                        <th>Ciencias</th>
                        <th>Estudios Sociales</th>
                        <th>Ingles</th>
                    </tr>
                </thead>
            </table>
            <button type="button" class="btn btn-primary btn-lg btn-block desplegar_notas_button" onclick='desplegarNotas();'>Haga click para desplegar las notas de los estudiantes.</button>
            <?php }?>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
  src="js/utils.js"><?php echo '</script'; ?>
>     
</body>
</html><?php }
}
