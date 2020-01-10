<?php
/* Smarty version 3.1.30, created on 2017-09-08 11:25:22
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/ban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b253f22232c4_90325861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd284b1ccc096b1aa683c653e083d27653f7071e0' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/ban.tpl',
      1 => 1493623899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b253f22232c4_90325861 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
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
</div><?php }
}
