<?php
/* Smarty version 3.1.30, created on 2017-09-26 21:48:45
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/history.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59caaf1d8cb022_74601465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2e2dcd75f9731881e161dd2a0255474763c7611' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/history.tpl',
      1 => 1506455323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59caaf1d8cb022_74601465 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>
      <div class="btn-group  margin-b-15">
           <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/history/clear" class="btn btn-primary btn-sm">Clear logs</a>
            </div>
<div class="panel">
                      <div class="panel-heading"><h4><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h4></div>
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
    <div class="alert alert-danger">История авторизаций пуста...</div>
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
<?php }
}
