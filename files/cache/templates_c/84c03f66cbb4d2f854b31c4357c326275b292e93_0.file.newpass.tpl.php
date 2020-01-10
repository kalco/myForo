<?php
/* Smarty version 3.1.30, created on 2017-12-15 11:43:10
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/mail/newpass.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a338b1ef2c580_78981556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84c03f66cbb4d2f854b31c4357c326275b292e93' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/mail/newpass.tpl',
      1 => 1512635509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a338b1ef2c580_78981556 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Здравствуйте, <?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
!</p>
<p>Вы успешно сменили пароль на сайте <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['setup']->value['namesite'];?>
</a></p>
<p>Ваш новый пароль - <b><?php echo $_smarty_tpl->tpl_vars['newpassword']->value;?>
</b></p>
<br/><br/><br/>
<p>--<br/>
    С уважением, администрация ресурса <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['setup']->value['namesite'];?>
</a>
</p><?php }
}
