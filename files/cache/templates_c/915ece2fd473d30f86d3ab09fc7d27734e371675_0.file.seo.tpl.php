<?php
/* Smarty version 3.1.30, created on 2017-12-05 21:37:07
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/seo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a270373661027_40574222',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '915ece2fd473d30f86d3ab09fc7d27734e371675' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/seo.tpl',
      1 => 1512506222,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a270373661027_40574222 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'add_seo', null, null);
?>

<div class="form-group">
   <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_keyword'];?>
:</label>
      <textarea rows="3" name="keywords" class="form-control"><?php echo $_POST['keywords'];?>
</textarea>
</div>
<div class="form-group">
   <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_description'];?>
:</label>
      <textarea rows="3" name="description" class="form-control"><?php echo $_POST['description'];?>
</textarea>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'edit_seo', null, null);
?>

<div class="form-group">
   <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_keyword'];?>
:</label>
      <textarea rows="3" name="keywords" class="form-control"><?php echo $_smarty_tpl->tpl_vars['row']->value['keywords'];?>
</textarea>
</div>
<div class="form-group">
   <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_description'];?>
:</label>
      <textarea rows="3" name="description" class="form-control"><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</textarea>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
