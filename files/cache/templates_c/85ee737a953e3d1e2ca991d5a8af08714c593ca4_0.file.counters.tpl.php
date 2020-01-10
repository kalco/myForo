<?php
/* Smarty version 3.1.30, created on 2017-05-15 11:51:25
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/setting/counters.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59196c0d7ad050_20451918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85ee737a953e3d1e2ca991d5a8af08714c593ca4' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/setting/counters.tpl',
      1 => 1493624542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59196c0d7ad050_20451918 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</a> / Счетчики посещаемости</div>
<div class="fon">
    <form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting/counters" method="post" class="fon">
        <textarea name="counters" class="form-control" rows="25"/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['setup']->value['counters'], ENT_QUOTES, 'UTF-8', true);?>
</textarea><br/>
        <input type="submit" name="submit" value="Сохранить" class="btn btn-primary"><br/><br/>
    </form>
    <?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?><div class="alert alert-danger">Включёно сжатие HTML. Перед редактированием его рекомендуется <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting">выключить</a>.</div><?php }?> 
</div><?php }
}
