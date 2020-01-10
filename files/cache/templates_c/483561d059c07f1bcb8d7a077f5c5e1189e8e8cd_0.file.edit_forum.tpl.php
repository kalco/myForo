<?php
/* Smarty version 3.1.30, created on 2017-12-05 21:35:33
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/forums/edit_forum.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a270315169073_77513560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '483561d059c07f1bcb8d7a077f5c5e1189e8e8cd' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/forums/edit_forum.tpl',
      1 => 1512506130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/seo.tpl' => 1,
  ),
),false)) {
function content_5a270315169073_77513560 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
    </div>
</div>
<div class="row">
   <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>    
<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
    <div class="form-group">
                                    <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms'];?>
:</label>
                                        <select name="type" class="form-control">
                <option value="0"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 0) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms_all'];?>
</option>
                <option value="1"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 1) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms_users'];?>
</option>
                <option value="2"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 2) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms_admins'];?>
</option>
            </select>
    </div>
 <div class="form-group">
                                    <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
:</label>
            <input type="text" class="form-control" name="name" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
"/>
            <?php $_smarty_tpl->_subTemplateRender("file:admin/seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'edit_seo');?>


        	</div>
        <input type="submit" name="ok" value="Отправить" class="btn btn-primary">
</form> 
</div> 
<?php }
}
