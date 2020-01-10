<?php
/* Smarty version 3.1.30, created on 2017-12-06 21:04:32
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/mail/ban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a284d50093d59_88357640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '831f5ed5d92e16adc4c23ffe6bbc13eb422fbf55' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/mail/ban.tpl',
      1 => 1512461588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a284d50093d59_88357640 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<p>Hi, <?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
!</p>
<p>Ваш аккаунт забанен за нарушение правил сайта.</p>
<?php if (!empty($_smarty_tpl->tpl_vars['banprichina']->value)) {?>Причина бана:<br/><p><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['banprichina']->value, ENT_QUOTES, 'UTF-8', true));?>
</p><?php }?>
<br/><br/><br/>
<p>--<br/>
    С уважением, администрация ресурса <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['setup']->value['namesite'];?>
</a>
</p><?php }
}
