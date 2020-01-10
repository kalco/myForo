<?php
/* Smarty version 3.1.30, created on 2017-12-09 13:37:04
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/user/ban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2bbcd0e56a17_52781439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52eaff7ced5902808987f14fd0a826d0702ea85f' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/user/ban.tpl',
      1 => 1511555441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a2bbcd0e56a17_52781439 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <div class="alert alert-info">Бан истекает: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['user']->value['bantime'],"d.m.o, H:i");?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['user']->value['banprichina']) {?>
        <div class="alert alert-danger"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['banprichina']->value, ENT_QUOTES, 'UTF-8', true));?>
</div>
    <?php }?>
</div>

  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>

      <div class="hidden-xs">
    </div>      
  </div><?php }
}
