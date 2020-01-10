<?php
/* Smarty version 3.1.30, created on 2018-01-11 10:57:21
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/tema_del.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5718e1ce8fa6_75059783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '696e391035b531f7dd65d0086d9dfe407e1c94c7' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/tema_del.tpl',
      1 => 1515610952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5718e1ce8fa6_75059783 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title2']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
<div class="fon">
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Are you sure you want to delete this thread?</div>
        <input type="submit" name="ok" value="Yes" class="btn btn-primary"> <input type="submit" name="close" value="No" class="btn btn-primary">
    </form>
</div>
<div class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
"><i class="fa fa-angle-left"></i> Thread <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['tema']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</a></div> <?php }
}
