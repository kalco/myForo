<?php
/* Smarty version 3.1.30, created on 2017-12-06 17:16:42
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/templates/email.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2817ea8be089_97068390',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59f9d82d0005b14682d30955757a6308eb7e06d3' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/templates/email.tpl',
      1 => 1512577001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2817ea8be089_97068390 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
       <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
    </div>
</div>

               <table class="table table-bordered">
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
" class="btn btn-xs btn-info" title=""rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
                     </tr>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  </tbody>
               </table>
<?php }
}
