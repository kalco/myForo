<?php
/* Smarty version 3.1.30, created on 2017-05-15 11:49:42
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/setting/forum.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59196ba66c75f0_93241290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89634ec626d8af29a1a5e4b258582425c45e6115' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/setting/forum.tpl',
      1 => 1493624542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59196ba66c75f0_93241290 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</a> / Настройки форума</div>
<div class="fon">  
    <form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting/forum" method="post" class="fon">
        <p><label><input type="checkbox" name="captcha_add_theme" value="1"<?php if ($_smarty_tpl->tpl_vars['setup']->value['captcha_add_theme'] == 1) {?> checked="check"<?php }?>/> Каптча при создании новой темы</label></p>
        <p><label><input type="checkbox" name="captcha_add_post" value="1"<?php if ($_smarty_tpl->tpl_vars['setup']->value['captcha_add_post'] == 1) {?> checked="check"<?php }?>/> Каптча при добавлении поста (при ответе на пост и цитировании тоже)</label></p>
        <p><label><font color="red">*</font>Типы файлов для загрузки:</label><br/> <input type="text" class="form-control" name="filetype_forum" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['filetype_forum']);?>
"/></p>
        <p><label><font color="red">*</font>Максимальный размер 1 файла для загрузки, в мб:</label><br/> <input type="text" class="form-control" name="filesize_forum" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['filesize_forum']);?>
"/></p>
        <p><label><font color="red">*</font>Разрешенное кол-во файлов к 1 посту:</label><br/> <input type="text" class="form-control" name="filecount_forum" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['filecount_forum']);?>
"/></p>
        <p><label><font color="red">*</font>Время, по истечение которого темы и посты не будут считаться новыми, в секундах:</label><br/> <input type="text" class="form-control" name="time_forum" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['time_forum']);?>
"/></p>
        <p><label><font color="red">*</font>Кол-во вариантов ответов при голосовании:</label><br/> <input type="text" class="form-control" name="vote_forum" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['vote_forum']);?>
"/></p>
        <p><label><font color="red">*</font>Кол-во новых тем на главной странице:</label><br/> <input type="text" class="form-control" name="lastthems" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['lastthems']);?>
"/></p>
        <p><label><font color="red">*</font>Время для изменения своего поста пользователем, в минутах:</label><br/> <input type="text" class="form-control" name="forum_time_edit_post" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['forum_time_edit_post']);?>
"/></p>
        <input type="submit" name="submit" value="Сохранить настройки" class="btn btn-primary">
    </form>
    <p>* Типы файлов, максимальный размер 1 файла для загрузки и разрешенное кол-во файлов используются также в модуле личных сообщений.</p>  
</div><?php }
}
