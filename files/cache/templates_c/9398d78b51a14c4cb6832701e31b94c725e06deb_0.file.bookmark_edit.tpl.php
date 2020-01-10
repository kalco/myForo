<?php
/* Smarty version 3.1.30, created on 2017-09-23 15:50:34
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/bookmark_edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c666aa5232f8_48230544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9398d78b51a14c4cb6832701e31b94c725e06deb' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/bookmark_edit.tpl',
      1 => 1493623899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c666aa5232f8_48230544 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile">Мой кабинет</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/bookmark">Закладки</a> / <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" class="fon" enctype="multipart/form-data">
    <p>Название: <br/><input type="text" name="name" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
" class="form-control"/></p>
    <p>Ссылка: <br/><textarea name="url" class="form-control"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['url'], ENT_QUOTES, 'UTF-8', true));?>
</textarea></p>
    <p><input type="submit" name="ok" value="Сохранить" class="btn btn-primary"></p>
</form>
</div><?php }
}
