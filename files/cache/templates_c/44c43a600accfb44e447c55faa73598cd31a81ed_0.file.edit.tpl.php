<?php
/* Smarty version 3.1.30, created on 2017-05-03 21:19:17
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/users/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590a1f2555f610_73426041',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44c43a600accfb44e447c55faa73598cd31a81ed' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/users/edit.tpl',
      1 => 1493624542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590a1f2555f610_73426041 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users">Пользователи</a> / <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" class="fon">
        <p><font color="red">*</font><label>Должность на сайте:</label> <br/>
            <select name="level" class="form-control">
                <option value="1"<?php if ($_smarty_tpl->tpl_vars['row']->value['level'] == 1) {?> selected="selected"<?php }?>>пользователь</option>
                <option value="10"<?php if ($_smarty_tpl->tpl_vars['row']->value['level'] == 10) {?> selected="selected"<?php }?>>младший модератор</option>
                <option value="20"<?php if ($_smarty_tpl->tpl_vars['row']->value['level'] == 20) {?> selected="selected"<?php }?>>модератор</option>
                <option value="30"<?php if ($_smarty_tpl->tpl_vars['row']->value['level'] == 30) {?> selected="selected"<?php }?>>старший модератор</option>
                <option value="40"<?php if ($_smarty_tpl->tpl_vars['row']->value['level'] == 40) {?> selected="selected"<?php }?>>супер модератор</option>
                <option value="50"<?php if ($_smarty_tpl->tpl_vars['row']->value['level'] == 50) {?> selected="selected"<?php }?>>заместитель администратора</option>
                <option value="100"<?php if ($_smarty_tpl->tpl_vars['row']->value['level'] == 100) {?> selected="selected"<?php }?>>главный администратор</option>
            </select>
        </p>
        <p><font color="red">*</font><label>Логин:</label> <br/><input type="text" name="login" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['login']);?>
" class="form-control"/></p>
        <p><label>Имя:</label> <br/><input type="text" name="firstname" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['firstname']);?>
" class="form-control"/></p>
        <p><label>Фамилия:</label> <br/><input type="text" name="lastname" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['lastname']);?>
" class="form-control"/></p>
        <p><label>Город:</label> <br/><input type="text" name="city" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['city']);?>
" class="form-control"/></p>
        <p><font color="red">*</font><label>E-mail:</label> <br/><input type="text" name="email" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['email']);?>
" class="form-control"/></p>
        <p><label>Телефон:</label> <br/><input type="text" name="phone" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['phone']);?>
" class="form-control"/></p>
        <p><label>Skype:</label> <br/><input type="text" name="skype" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['skype']);?>
" class="form-control"/></p>
        <p><label>ICQ:</label> <br/><input type="text" name="icq" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['icq']);?>
" class="form-control"/></p>
        <p><label>Баллы:</label> <br/><input type="text" name="balls" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['balls']);?>
" class="form-control"/></p>
        <p><label>О себе:</label> <br/><textarea name="about" class="form-control"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['about']);?>
</textarea></p>
        <p><input type="submit" name="ok" value="Сохранить изменения" class="btn btn-primary"></p>
    </form>
</div><?php }
}
