<?php
/* Smarty version 3.1.30, created on 2017-05-13 23:55:30
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/users/del.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591772c203a855_23467849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6f98c06f77b8f6f7e9408e8bdb559e516ae1985' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/users/del.tpl',
      1 => 1493624542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591772c203a855_23467849 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users">Пользователи</a> / <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <?php if ($_smarty_tpl->tpl_vars['row']->value['level'] < 100) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" class="fon">
            <div class="alert alert-danger">Вы уверены, что хотите удалить данного пользователя? Вместе с ним с сайта будет удалена вся информация, которую оставил пользователь, включая текстовые сообщения и файлы. Восстановить удаленные данные будет невозможно!</div>
            <p><label><input type="checkbox" name="optimize" value="1"/> Оптимизировать таблицы после удаления</label></p>
            <p><input type="submit" name="ok" value="Удалить" class="btn btn-primary"> <input type="submit" name="close" value="Отмена" class="btn btn-primary"></p>
            <?php } else { ?>
            <div class="alert alert-danger">Вы не можете удалить главного администратора!</div>
        <?php }?>
    </form>
</div><?php }
}
