<?php
/* Smarty version 3.1.30, created on 2018-01-10 20:16:03
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/user/smiles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a564a5364f215_60501820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6bdcf105f64f3498be233a0a60eb76257a7d5d4' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/user/smiles.tpl',
      1 => 1515604556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a564a5364f215_60501820 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><?php echo $_smarty_tpl->tpl_vars['title2']->value;
if ($_smarty_tpl->tpl_vars['user']->value['id']) {?> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/smiles">smiles</a><?php }?></div>
<div class="fon">
    <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
            <table width="100%" border="2" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                <tr>
                  
                    <th style="text-align:center;"><b>Image </b></th>
                    <th style="text-align:center;"><b>Code </b></th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>  
                    <tr>  
                      
                        <td style="text-align:center;"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/smiles/<?php echo $_smarty_tpl->tpl_vars['rows']->value['photo'];?>
"/></td>
                        <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['rows']->value['code'];?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table>

            <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?><div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div><br/><?php }?>
        <?php } else { ?>
            <div class="alert alert-danger">No smiels yet ...</div>
        <?php }?> 
    </div>
    <div class="menu"><a href="<?php echo $_SESSION['referer'];?>
"><i class="fa fa-angle-left"></i> Back</a></div>
    
      <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>

      <div class="hidden-xs">
    </div>      
  </div><?php }
}
