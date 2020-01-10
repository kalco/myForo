<?php
/* Smarty version 3.1.30, created on 2017-09-06 22:04:09
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/forum/setup_del.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b054b9662786_35873058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee6b64003d348db8edee78f564115c7e1741b9c7' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/forum/setup_del.tpl',
      1 => 1493623899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b054b9662786_35873058 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
">Форум</a><?php if ($_smarty_tpl->tpl_vars['forum']->value['id']) {?> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['forum']->value['name']);?>
</a><?php }?> / <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Вы уверены, что хотите удалить данный раздел?</div>
        <input type="submit" name="ok" value="Да" class="btn btn-primary"> <input type="submit" name="close" value="Отменить" class="btn btn-primary">
    </form>
</div><?php }
}
