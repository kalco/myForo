<?php
/* Smarty version 3.1.30, created on 2017-05-15 11:50:17
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/setting/email.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59196bc9211211_99953896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92e2d53c975ba27691d3235aacb06d6bb212a7e1' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/setting/email.tpl',
      1 => 1493624542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59196bc9211211_99953896 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</a> / Настройка отправки писем</div>
<div class="fon">  
    <form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting/email" method="post" class="fon">
        <p><label><font color="red">*</font>Тип отправки писем:</label><br/>
            <label><input type="radio" name="sendmail" value="mail"<?php if ($_smarty_tpl->tpl_vars['setup']->value['sendmail'] == 'mail') {?> checked="check"<?php }?>> mail</label><br/>
            <label><input type="radio" name="sendmail" value="smtp"<?php if ($_smarty_tpl->tpl_vars['setup']->value['sendmail'] == 'smtp') {?> checked="check"<?php }?>> smtp</label><br/>
        </p>
        <h3>Настройки SMTP</h3>
        <p><label>SMTP порт:</label><br/> <input type="text" class="form-control" name="smtpport" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['smtpport']);?>
"/></p>
        <p><label>SMTP хост:</label><br/> <input type="text" class="form-control" name="smtphost" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['smtphost']);?>
"/></p>
        <p><label>Имя пользователя:</label><br/> <input type="text" class="form-control" name="smtpusername" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['smtpusername']);?>
"/></p>
        <p><label>Пароль:</label><br/> <input type="text" class="form-control" name="smtppassword" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['smtppassword']);?>
"/></p>
        <input type="submit" name="submit" value="Сохранить настройки" class="btn btn-primary">
    </form>
</div><?php }
}
