<?php
/* Smarty version 3.1.30, created on 2017-10-03 20:20:23
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/notice.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d3d4e703e330_44406277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '496da4a89ca30db2faff761cd40f5ca54b6d6d4c' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/notice.tpl',
      1 => 1507054821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59d3d4e703e330_44406277 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>
<div class="panel">
                      <div class="panel-heading"><h4><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h4></div>
                         <div class="panel-body">
    <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
         <div class="row" id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
         <div class="col-sm-9 text-justify">
           <h4><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['login']);?>
</a></h4>
                <?php echo nl2br(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['text']->value[$_smarty_tpl->tpl_vars['k']->value], ENT_QUOTES, 'UTF-8', true)));?>

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
            <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
        <?php }?>    
    <?php } else { ?>
        <div class="alert alert-danger">Уведомлений ещё нет...</div>
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
