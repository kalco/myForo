<?php
/* Smarty version 3.1.30, created on 2017-12-04 19:59:28
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/forums/del_forum.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a259b10403a08_51167331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2edebe03e44bda4ba6fbbec94fd506b39019eb1' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/forums/del_forum.tpl',
      1 => 1511555441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a259b10403a08_51167331 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
						<div class="col-sm-12">
					
							<div class="page-header"> <h3> <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 </h3>
							<p class="title-description"> <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
 </p>
							</div>
						</div>
</div> 

<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Вы уверены, что хотите удалить данную категорию? Вместе с ней будут удалены и все записи, которые в ней содержатся.</div>
        <input type="submit" name="ok" value="Да" class="btn btn-primary"> <input type="submit" name="close" value="Отменить" class="btn btn-primary">
</form><?php }
}
