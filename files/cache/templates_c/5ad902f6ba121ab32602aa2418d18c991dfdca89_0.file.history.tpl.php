<?php
/* Smarty version 3.1.30, created on 2018-01-12 22:38:03
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/history.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a592abb21a7b5_37356273',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ad902f6ba121ab32602aa2418d18c991dfdca89' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/history.tpl',
      1 => 1515793080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a592abb21a7b5_37356273 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>
      <div class="btn-group  margin-b-15">
           <a href="#" data-toggle="modal" data-target="#helper_clear" class="btn btn-primary btn-sm">Clear logs</a>
            </div>
<div class="panel">
                      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
                         <div class="panel-body">
						
<?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
     <div class="row" id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
         <div class="col-sm-9 text-justify">
             <h4><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['ip']);?>
</h4>
                    <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['browser']);?>

                       </div>
                        <div class="col-sm-3 ">
                             <span class="label label-default"><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['time']);?>
</span>     
                             </div>
       </div> 
       <hr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
        <div class="pagination pull-right"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
    <?php }?>    
<?php } else { ?>
    <div class="alert alert-danger">Authorization history is empty ...</div>
<?php }?>
</div>
</div>

  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_profile');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div>
<div class="modal fade" id="helper_clear">
   <div class="modal-dialog modal-small" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title"><?php echo $_smarty_tpl->tpl_vars['lang']->value['my_login_history_clear'];?>
</h4>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-12">
              <form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/history/clear" method="post" enctype="multipart/form-data" class="fon">
        <p>Are you sure you want to clear the login history?</p>
        <input type="submit" name="ok" value="OK" class="btn btn-default pull-right">
    </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div><?php }
}
