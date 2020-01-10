<?php
/* Smarty version 3.1.30, created on 2017-09-08 12:10:07
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/seo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b26c7f0c2408_74832859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fe8f1319f8decfd1d4401746d3c43af93d82988' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/seo.tpl',
      1 => 1504865404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b26c7f0c2408_74832859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'add_seo', null, null);
?>

<div class="form-group">
   <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_keyword'];?>
:</label>
   <div class="col-sm-5">
      <textarea rows="3" name="keywords" class="form-control"><?php echo $_POST['keywords'];?>
</textarea>
   </div>
</div>
<div class="form-group">
   <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_description'];?>
:</label>
   <div class="col-sm-5">
      <textarea rows="3" name="description" class="form-control"><?php echo $_POST['description'];?>
</textarea>
   </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'edit_seo', null, null);
?>

<div class="form-group">
   <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_keyword'];?>
:</label>
   <div class="col-sm-5">
      <textarea rows="3" name="keywords" class="form-control"><?php echo $_smarty_tpl->tpl_vars['row']->value['keywords'];?>
</textarea>
   </div>
</div>
<div class="form-group">
   <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_description'];?>
:</label>
   <div class="col-sm-5">
      <textarea rows="3" name="description" class="form-control"><?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
</textarea>
   </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
