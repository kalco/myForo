<?php
/* Smarty version 3.1.30, created on 2017-09-27 19:40:38
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/friends_yes.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cbd486cfad58_38311513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27502da3dec4a415fa8735a4851dc2c3ec7abac0' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/friends_yes.tpl',
      1 => 1506202199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59cbd486cfad58_38311513 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile">Мой кабинет</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/friends">Друзья</a> / <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <div class="alert alert-success">Заявка в друзья от пользователя <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</a> принята!</div>
</div>

  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_profile');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
