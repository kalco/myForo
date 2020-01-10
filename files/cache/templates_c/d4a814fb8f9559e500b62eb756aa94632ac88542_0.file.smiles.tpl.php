<?php
/* Smarty version 3.1.30, created on 2017-12-07 23:24:54
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/setting/smiles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a29a3962e5c98_09544937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4a814fb8f9559e500b62eb756aa94632ac88542' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/setting/smiles.tpl',
      1 => 1512678290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a29a3962e5c98_09544937 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
?>
<div class="vertical-align margin-bottom-1">
   <div class="text-left row-phone">
      <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
      <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
 <span class="badge badge-warning" title=""><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['count']->value);?>
</span></p>
   </div>
   <div class="text-right row-phone">
      <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting/smiles/update" class="btn btn-phone btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['smiles_update'];?>
</a>
   </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
<table class="table table-bordered">
   <thead>
      <tr>
         <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_image'];?>
</th>
         <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_code'];?>
</th>
      </tr>
   </thead>
   <tbody>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>  
      <tr>
         <td><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/smiles/<?php echo $_smarty_tpl->tpl_vars['rows']->value['photo'];?>
"/></td>
         <td><?php echo $_smarty_tpl->tpl_vars['rows']->value['code'];?>
</td>
      </tr>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

   </tbody>
</table>
<?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
<div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
<br/><?php }?>     
<?php } else { ?>
<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['smiles_empty'];?>
</div>
<?php }
}
}
