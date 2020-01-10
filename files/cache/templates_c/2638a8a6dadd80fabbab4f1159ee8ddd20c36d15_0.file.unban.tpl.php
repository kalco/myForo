<?php
/* Smarty version 3.1.30, created on 2017-12-06 21:04:40
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/mail/unban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a284d58d518e3_73892474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2638a8a6dadd80fabbab4f1159ee8ddd20c36d15' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/mail/unban.tpl',
      1 => 1511555441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a284d58d518e3_73892474 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p>Здравствуйте, <?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
!</p>
<p>Поздравляем! Ваш аккаунт разбанен. Больше не нарушайте правила сайта.</p>
<br/><br/><br/>
<p>--<br/>
    С уважением, администрация ресурса <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['setup']->value['namesite'];?>
</a>
</p><?php }
}
