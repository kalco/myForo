<?php
/* Smarty version 3.1.30, created on 2017-12-06 20:14:10
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/system/captcha.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a284182a72a55_41713116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8eb0a9d41cc29128457b37c1ae0fd8f68e6d4b25' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/system/captcha.tpl',
      1 => 1511555441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a284182a72a55_41713116 (Smarty_Internal_Template $_smarty_tpl) {
?>
<p><img name="captcha" src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/captcha"/><a href="javascript:void(0);" onclick="reload();" title="Reload"><i class="fa fa-refresh"></i></a><br/>
    Code: <br/> <input type="text" name="captcha" class="form-control"/>
</p><?php }
}
