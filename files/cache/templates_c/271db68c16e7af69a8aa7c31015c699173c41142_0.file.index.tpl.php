<?php
/* Smarty version 3.1.30, created on 2017-12-11 12:44:52
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/ads/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2e5394088f64_97201046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '271db68c16e7af69a8aa7c31015c699173c41142' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/ads/index.tpl',
      1 => 1512985428,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2e5394088f64_97201046 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
    </div>
    <div class="text-right row-phone">
        <a href="#" data-toggle="modal" data-target="#add_banner" class="btn btn-phone btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_new_banner'];?>
</a>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_link'];?>
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
        <div class="modal fade" id="del<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-small">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               <?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
 - <code><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</code>
            </h4>
         </div>
         <div class="modal-body">
               <div class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del_confirm'];?>
</div>
                  </div>
         <div class="modal-footer">
         <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
</a> </div>

</div>
</div>
</div>
        
        <tr>
            <td class="visible-lg hidden-xs"><a href="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['link']);?>
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
} else { ?><span class="badge badge-error"><?php echo $_smarty_tpl->tpl_vars['lang']->value['expired'];?>
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
" class="btn btn-xs btn-info" title=""  rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="#" data-toggle="modal" data-target="#del<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-danger" title=""  rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
"><span class="glyphicon glyphicon-trash"></span></a>
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
<?php }
} else { ?>
<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['banner_empty'];?>
</div>
<?php }?> 
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
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_link'];?>
:</label>
                        <input name="link" class="form-control" id="link" value="<?php echo $_POST['link'];?>
" type="text"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
:</label>
                        <input name="name" class="form-control" id="name" value="<?php echo $_POST['name'];?>
" type="text"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_time'];?>
:
                        <small><i><?php echo $_smarty_tpl->tpl_vars['lang']->value['time_show'];?>
</i></small></label>
                        <input name="ch" class="form-control" id="ch" value="<?php echo $_POST['ch'];?>
" type="text"/>
                        <br>
                        <select class="form-control" name="mn">
                            <option value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_days'];?>
</option>
                            <option value="7" selected="selected"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_weeks'];?>
</option>
                            <option value="31"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_months'];?>
</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['count_views'];?>
:
                        <small><i><?php echo $_smarty_tpl->tpl_vars['lang']->value['count_views_help'];?>
</i></small></label>
                        <input name="count" class="form-control" id="count" value="<?php echo $_POST['count'];?>
" type="text"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_new_window'];?>
:</label>
                        <div class="make-switch switch-small" data-on="success" data-off="danger" data-on-label="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_yes'];?>
" data-off-label="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_no'];?>
">
                            <input type="checkbox" id="target" checked="check" name="target" value="1" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_position'];?>
:</label>
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
                    <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['banner_img'];?>
:</label>
                        <input name="file" class="form-control" id="file" type="file"/>
                    </div>
            </div>
            <div class="modal-footer">
            <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add_banner'];?>
" class="btn btn-primary"></div>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_banner');
}
}
