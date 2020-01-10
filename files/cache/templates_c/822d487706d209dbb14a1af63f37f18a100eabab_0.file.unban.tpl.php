<?php
/* Smarty version 3.1.30, created on 2017-09-07 09:44:20
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/users/unban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b0f8d48c3254_01315272',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '822d487706d209dbb14a1af63f37f18a100eabab' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/users/unban.tpl',
      1 => 1493624542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b0f8d48c3254_01315272 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users">Пользователи</a> / <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Вы уверены, что хотите разбанить данного пользователя?</div>
        <input type="submit" name="ok" value="Да" class="btn btn-primary"> <input type="submit" name="close" value="Отменить" class="btn btn-primary">
    </form>
</div>



<?php }
}
