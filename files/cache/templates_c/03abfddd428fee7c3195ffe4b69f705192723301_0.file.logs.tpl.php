<?php
/* Smarty version 3.1.30, created on 2017-09-06 10:48:15
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/logs/logs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59afb64fa8b898_79006492',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03abfddd428fee7c3195ffe4b69f705192723301' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/logs/logs.tpl',
      1 => 1504687693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/user.tpl' => 1,
  ),
),false)) {
function content_59afb64fa8b898_79006492 (Smarty_Internal_Template $_smarty_tpl) {
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
      <div class="text-center">
         <a href="#" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#log_clear"><i class="clip-loop"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['clear_logs'];?>
</a>
      </div>
      <p>&nbsp;</p>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <div class="panel panel-default">
         <div class="panel-heading">
            <i class="clip-file-2"></i>
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
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_module'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_action'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_ip'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_browser'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_date'];?>
</th>
                     </tr>
                  </thead>
                  <tr>
                  </tr>
                  </thead>
                  <tbody>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>    
                     <?php $_smarty_tpl->_subTemplateRender("file:system/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                     <tr>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id_user'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
" target="_blank"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['login']);?>
</a></td>
                        <td><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['modul']);?>
</td>
                        <td><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'text');?>
</td>
                        <td><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['ip']);?>
</td>
                        <td><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['browser']);?>
</td>
                        <td><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['time']);?>
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
               <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['logs_empty'];?>
</div>
               <?php }?>  
            </div>
         </div>
      </div>
   </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'log_clear', null, null);
?>

<div class="modal fade" id="log_clear" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-small">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               <?php echo $_smarty_tpl->tpl_vars['lang']->value['clear_logs'];?>

            </h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/logs/clear" method="post">
               <div class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['clear_logs_confirm'];?>
</div>
         </div>
         <div class="modal-footer">
         <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_clear'];?>
" class="btn btn-teal"></div>
         </form>
      </div>
   </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'log_clear');
}
}
