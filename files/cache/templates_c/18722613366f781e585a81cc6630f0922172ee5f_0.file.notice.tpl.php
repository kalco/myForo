<?php
/* Smarty version 3.1.30, created on 2017-09-06 10:54:00
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/notice.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59afb7a864db25_76934413',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '18722613366f781e585a81cc6630f0922172ee5f' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/notice.tpl',
      1 => 1504688040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/user.tpl' => 1,
  ),
),false)) {
function content_59afb7a864db25_76934413 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
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
      <div class="panel panel-default">
         <div class="panel-heading">
            <i class="clip-alarm"></i>
            <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 <span class="badge badge-warning" title=""><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
         </div>
         <p>&nbsp;</p>
         <div class="panel-body">
            <div id="users_block">
               <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
               <table class="table table-striped table-bordered table-hover table-full-width">
                  <thead>
                     <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_username'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_action'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_date'];?>
</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'rows', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['rows']->value) {
?>  
                     <?php $_smarty_tpl->_subTemplateRender("file:system/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                     <tr>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
" target="_blank"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['login']);?>
</a></td>
                        <td><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'text');?>
</td>
                        <td><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['time']);?>
</td>
                     </tr>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  <tbody>
               </table>
               <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
               <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
               <br/><?php }?>
               <?php } else { ?>
               <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['notice_empty'];?>
</div>
               <?php }?>    
            </div>
         </div>
      </div>
   </div>
</div><?php }
}
