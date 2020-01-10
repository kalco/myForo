<?php
/* Smarty version 3.1.30, created on 2017-09-06 08:20:17
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/setting/smiles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59af93a1a827c4_45282212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eec3295a98e006de3aac9ba40b309f088e1accf' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/setting/smiles.tpl',
      1 => 1504678814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59af93a1a827c4_45282212 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
?>
<div class="row">
   <div class="col-sm-12">
      <div class="page-header">
         <h3> <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 </h3>
         <p class="title-description"> <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
 </p>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <div class="text-center">
         <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting/smiles/update" class="btn btn-xs btn-success"><i class="clip-spinner-6"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['smiles_update'];?>
</a>
      </div>
      <p>&nbsp;</p>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <div class="panel panel-default">
         <div class="panel-heading">
            <i class="clip-settings"></i>
            <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 <span class="badge badge-warning" title=""><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['count']->value);?>
</span>
         </div>
         <p>&nbsp;</p>
         <div class="panel-body">
            <div id="users_block">
               <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
               <table class="table table-striped table-bordered table-hover table-full-width">
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
               <?php }?> 
            </div>
         </div>
      </div>
   </div>
</div>

<?php }
}
