<?php
/* Smarty version 3.1.30, created on 2017-09-05 09:23:42
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/sitemap/setup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ae42eed7cb48_52725835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56886641fd94e7c9e32732e831cb761028530163' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/sitemap/setup.tpl',
      1 => 1504519303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ae42eed7cb48_52725835 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</a> / Настройка генерации</div>
<div class="fon">
    <form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/setup" method="post" class="fon">
        <p><font color="red">*</font><label>Генерация индексного файла:</label><br/>
            <label><input type="radio" name="sitemap_index" value="1"<?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_index'] == 1) {?> checked="check"<?php }?>> включена</label><br/>
            <label><input type="radio" name="sitemap_index" value="2"<?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_index'] == 2) {?> checked="check"<?php }?>> отключена</label><br/>
        </p>
        <p>
        <font color="red">*</font><label>Генерация текстовой карты сайта:</label><br/>
        <label><input type="radio" name="sitemap_txt" value="1"<?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_txt'] == 1) {?> checked="check"<?php }?>> включена</label><br/>
        <label><input type="radio" name="sitemap_txt" value="2"<?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_txt'] == 2) {?> checked="check"<?php }?>> отключена</label><br/>
        </p>
        <p>
        <font color="red">*</font><label>Вероятная частота изменения:</label> <select class="form-control" name="sitemap_changefreq">
            <option value="always" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'always') {?>selected="selected"<?php }?>>всегда</option>
            <option value="hourly" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'hourly') {?>selected="selected"<?php }?>>каждый час</option>
            <option value="daily" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'daily') {?>selected="selected"<?php }?>>ежедневно</option>
            <option value="weekly" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'weekly') {?>selected="selected"<?php }?>>еженедельно</option>
            <option value="monthly" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'monthly') {?>selected="selected"<?php }?>>ежемесячно</option>
            <option value="yearly" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'yearly') {?>selected="selected"<?php }?>>ежегодно</option>
            <option value="never" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'never') {?>selected="selected"<?php }?>>никогда</option>
        </select>
        </p>
        <p>
        <font color="red">*</font><label>Приоритет, допустимый диапазон значений — от 0,0 до 1,0:</label> <br/> 
        <input type="text" class="form-control" name="sitemap_priority" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['sitemap_priority']);?>
" required/>
        </p>
        <input type="submit" name="submit" value="Сохранить настройки" class="btn btn-primary">
    </form>
</div><?php }
}
