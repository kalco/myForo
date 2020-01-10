<?php
/* Smarty version 3.1.30, created on 2017-09-22 12:09:16
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/pages/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c4e14c6a9012_02702811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e472adc883fbbbcfac569b01fcb8b272745452d0' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/pages/add.tpl',
      1 => 1506074615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c4e14c6a9012_02702811 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="main-content"<?php if ($_COOKIE['filteradmin'] == 1) {?> class="merge-left"<?php }?>>
          <section class="wrapper site-min-height">
<section class="panel"><header class="panel-heading"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Главная</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/pages"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</a> / Добавить страницу</header>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger">
        <button data-dismiss="alert" class="close close-sm" type="button"><i class="fa fa-times"></i></button><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>    
<form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/pages/add" method="post" enctype="multipart/form-data">
	<font color="red">*</font><label>Название страницы, отображается в заголовке:</label> <br/> <input type="text" class="form-control" name="name" value="<?php echo $_POST['name'];?>
" required/><br/><br/>
	<font color="red">*</font><label>Содержимое страницы:</label> <br/> <textarea name="text" id="text" class="form-control"/><?php echo $_POST['text'];?>
</textarea><br/><br/>
	<br/><input type="submit" name="ok" value="Отправить" class="btn">
</form>     
</section>    
          </section>
</section>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/ckeditor.js"><?php echo '</script'; ?>
> <?php }
}
