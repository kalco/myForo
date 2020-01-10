<?php
/* Smarty version 3.1.30, created on 2017-08-26 22:04:59
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/forums/add_forum.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a1c65bdb1a28_63474711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32f8c7a63420926c9121937e220961dbffc3b50e' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/forums/add_forum.tpl',
      1 => 1503774298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/seo.tpl' => 1,
  ),
),false)) {
function content_59a1c65bdb1a28_63474711 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
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
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>  
   
<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
<p><font color="red">*</font><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms'];?>
 <br/>
            <select name="type" class="form-control">
                <option value="0"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 0) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms_all'];?>
</option>
                <option value="1"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 1) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms_users'];?>
</option>
                <option value="2"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 2) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms_admins'];?>
</option>
            </select>
        </p>
        
        <p><font color="red">*</font>Название раздела: <br/> <input type="text" class="form-control" name="name" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
"/></p>
            <?php $_smarty_tpl->_subTemplateRender("file:admin/seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'edit_seo');?>

        </p>
        <input type="submit" name="ok" value="Отправить" class="btn btn-primary">
</form> <?php }
}
