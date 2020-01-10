<?php
/* Smarty version 3.1.30, created on 2017-05-05 10:09:49
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/seo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c253da90889_31530757',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef3eef5e69c492c5206264591b6675623c3f9c13' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/seo.tpl',
      1 => 1493623899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590c253da90889_31530757 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'add_seo', null, null);
?>

    <h3>Для поисковиков</h3>
    <p><label>Keywords:</label> <br/> <textarea name="keywords" class="form-control"/><?php echo $_POST['keywords'];?>
</textarea></p>
<p><label>Description:</label> <br/> <textarea name="description" class="form-control"/><?php echo $_POST['description'];?>
</textarea></p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'edit_seo', null, null);
?>

    <h3>Для поисковиков</h3>
    <p><label>Keywords:</label> <br/> <textarea name="keywords" class="form-control"/><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['keywords']);?>
</textarea></p>
<p><label>Description:</label> <br/> <textarea name="description" class="form-control"/><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['description']);?>
</textarea></p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
