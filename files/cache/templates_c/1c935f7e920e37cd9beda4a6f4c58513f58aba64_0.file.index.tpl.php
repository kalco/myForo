<?php
/* Smarty version 3.1.30, created on 2017-10-02 21:03:37
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/ads/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d28d89823052_26510871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1c935f7e920e37cd9beda4a6f4c58513f58aba64' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/ads/index.tpl',
      1 => 1506971005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d28d89823052_26510871 (Smarty_Internal_Template $_smarty_tpl) {
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
         <a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#add_banner"><i class="clip-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['add_new_banner'];?>
</a> 
      </div>
      <p>&nbsp;</p>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <div class="panel panel-default">
         <div class="panel-heading">
            <i class="clip-pictures"></i>
            <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>

         </div>
         <p>&nbsp;</p>
         <div class="panel-body">
            <div id="users_block">
               <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
               <table class="table table-striped table-bordered table-hover table-full-width">
                  <thead>
                     <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_link'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_views'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_time'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_position'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_action'];?>
</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>  
                     <tr>
                        <td><a href="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['link']);?>
" target="_blank"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
</a></td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['counts'];?>
</a></td>
                        <td><?php if ($_smarty_tpl->tpl_vars['row']->value['time'] > $_smarty_tpl->tpl_vars['realtime']->value) {
echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['time']);
} elseif ($_smarty_tpl->tpl_vars['row']->value['count']) {
echo $_smarty_tpl->tpl_vars['lang']->value['rev_rem'];?>
: <?php echo $_smarty_tpl->tpl_vars['row']->value['count'];
} else { ?><span class="badge badge-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['expired'];?>
</span><?php }?></td>
                        <td>
                           <?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'head_index') {
echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_1'];
}?>
                           <?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'head') {
echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_2'];
}?>
                           <?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'head_no_index') {
echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_3'];
}?>
                           <?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'foot') {
echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_4'];
}?>
                           <?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'left') {
echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_5'];
}?>
                        </td>
                        <td>
                           <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-blue tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><i class="clip-pencil-3"></i></a>
                           <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-bricky tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del_confirm'];?>
');"><i class="clip-remove"></i></a>
                        </td>
                     </tr>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  </tbody>
               </table>
               <?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?>
               <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['lang']->value['compression_info'];?>
</div>
               <?php }?> 
               <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
               <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
               <?php }?>
               <?php } else { ?>
               <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['banner_empty'];?>
</div>
               <?php }?> 
            </div>
         </div>
      </div>
   </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'add_banner', null, null);
?>

<div class="modal fade" id="add_banner" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               <?php echo $_smarty_tpl->tpl_vars['lang']->value['add_new_banner'];?>

            </h4>
         </div>
         <div class="modal-body">
              <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
              <?php }?> 
            <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads/add" method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_link'];?>
:</label>
                  <div class="col-sm-5">
                     <input name="link" class="form-control" id="link" value="<?php echo $_POST['link'];?>
" type="text"/>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
:</label>
                  <div class="col-sm-5">
                     <input name="name" class="form-control" id="name" value="<?php echo $_POST['name'];?>
" type="text"/>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_time'];?>
:<span class="small-link"><?php echo $_smarty_tpl->tpl_vars['lang']->value['time_show'];?>
</span></label>
                  <div class="col-sm-2">
                     <input name="ch" class="form-control" id="ch" value="<?php echo $_POST['ch'];?>
" type="text"/>
                  </div>
                  <div class="col-sm-3">
                <select class="form-control" name="mn">
                <option value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_days'];?>
</option>
                <option value="7" selected="selected"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_weeks'];?>
</option>
                <option value="31"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_months'];?>
</option>
                     </select>
                     </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['count_views'];?>
:<span class="small-link"><?php echo $_smarty_tpl->tpl_vars['lang']->value['count_views_help'];?>
</span></label>
                  <div class="col-sm-5">
                     <input name="count" class="form-control" id="count" value="<?php echo $_POST['count'];?>
" type="text"/>
                  </div>
                   </div>
                     <div class="form-group">
                                    <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_new_window'];?>
:</label>
                                    <div class="col-sm-5">
                                       <div class="make-switch switch-small" data-on="success" data-off="danger" data-on-label="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_yes'];?>
" data-off-label="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_no'];?>
">
                                          <input type="checkbox" id="target" checked="check" name="target" value="1" >
                                       </div>
                                    </div>
                                 </div>
              
                              <div class="form-group">
                  <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_position'];?>
:</label>
                  <div class="col-sm-5">
                     <select class="form-control" name="type">
                <option value="head_index"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_1'];?>
</option>
                <option value="head_no_index"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_2'];?>
</option>
                <option value="head"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_3'];?>
</option>
                <option value="foot"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_4'];?>
</option>
                <option value="left"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_5'];?>
</option>
                     </select>
                  </div>
               </div>
                   <div class="form-group">
                  <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['count_views'];?>
:<span class="small-link"><?php echo $_smarty_tpl->tpl_vars['lang']->value['count_views_help'];?>
</span></label>
                  <div class="col-sm-5">
                     <input name="file" class="form-control" id="file" type="file"/>
                  </div>
                   </div>
         </div>
         <div class="modal-footer">
         <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add_banner'];?>
" class="btn btn-teal"></div>
         </form>
      </div>
   </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_banner');?>

<?php }
}
