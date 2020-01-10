<?php
/* Smarty version 3.1.30, created on 2017-09-09 08:32:49
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/templates/email.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b38b11f0fe82_01519282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b49a264c8404f6ae2f1ccf1decf1d07e5762579' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/templates/email.tpl',
      1 => 1504938766,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b38b11f0fe82_01519282 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
   <div class="col-sm-12">
      <div class="page-header">
         <h3> <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 </h3>
         <p class="title-description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <div class="panel panel-default">
         <div class="panel-heading">
            <i class="clip-stack"></i>
            <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>

         </div>
         <p>&nbsp;</p>
         <div class="panel-body">
            <div id="users_block">
               <table class="table table-striped table-bordered table-hover table-full-width">
                  <thead>
                     <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_template_name'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_action'];?>
</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowtemplate']->value, 'template');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['template']->value) {
?>
                     <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['template']->value;?>
</td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/email/edit/<?php echo $_smarty_tpl->tpl_vars['setup']->value['skin'];?>
/templates/mail/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
" class="btn btn-xs btn-blue tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><i class="clip-pencil-3"></i></a> </td>
                     </tr>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div><?php }
}
