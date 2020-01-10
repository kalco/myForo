<?php
/* Smarty version 3.1.30, created on 2017-09-23 23:28:37
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/history_clear.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c6d2057e1da1_63228002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33aea5dbf4dba8ffb1357b82894f97987320eb8c' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/history_clear.tpl',
      1 => 1506202081,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59c6d2057e1da1_63228002 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile">Мой кабинет</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/notice"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</a> / Очистить уведомления</div>
<div class="fon">
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Вы уверены, что хотите очистить уведомления?</div>
        <input type="submit" name="ok" value="Да" class="btn btn-primary"> <input type="submit" name="close" value="Отменить" class="btn btn-primary">
    </form>
</div>
  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_profile');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
