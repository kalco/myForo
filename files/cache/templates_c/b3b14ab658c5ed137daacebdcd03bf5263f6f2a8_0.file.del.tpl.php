<?php
/* Smarty version 3.1.30, created on 2017-12-05 21:48:24
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/ads/del.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2706184fb6f1_93693467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3b14ab658c5ed137daacebdcd03bf5263f6f2a8' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/ads/del.tpl',
      1 => 1511555441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2706184fb6f1_93693467 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</a> / Редактирование рекламы <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['link']);?>
</div>
<div class="fon">
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Вы уверены, что хотите удалить данную рекламную ссылку?</div>
        <input type="submit" name="ok" value="Да" class="btn btn-primary"> <input type="submit" name="close" value="Отменить" class="btn btn-primary">
    </form>
</div><?php }
}
