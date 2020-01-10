<?php
/* Smarty version 3.1.30, created on 2017-12-15 11:25:32
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/sitemap/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3386fc191212_53104176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adde89728ac6056e59e3e12abc3a361f7747310e' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/sitemap/index.tpl',
      1 => 1513326329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a3386fc191212_53104176 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="text-right row-phone">
    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/generate" class="btn btn-phone btn-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_generate'];?>
</a>
    <a href="#" class="btn btn-phone btn-warning"  data-toggle="modal" data-target="#robots"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_robots'];?>
</a>
    <a href="#" class="btn btn-phone btn-info" data-toggle="modal" data-target="#config"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_sitemap_conf'];?>
</a>
</div>
<hr>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['arrayrow']->value) {?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
</th>
            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_link'];?>
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
  <div class="modal fade" id="del" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-small">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               <?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
 - <code><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
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
/sitemap/del/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
</a> </div>

</div>
</div>
</div>
        <tr>
            <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/sitemap/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a></td>
            <td>
                <div class="row">
                    <div class="col-md-12" style="margin-right:10px">
                        <div class="form-group">
                            <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/sitemap/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" readonly="readonly" type="text">
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="#" data-toggle="modal" data-target="#del" class="btn btn-xs btn-danger" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
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
<?php } else { ?>
<div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sitemap_empty'];?>
</div>
<?php }?> 
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'robots', null, null);
?>

<div class="modal fade" id="robots" tabindex="-1" role="dialog" 
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" 
                    data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel1">
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['robot_edit'];?>

                </h4>
            </div>
            <div class="modal-body">
                <?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?>
                <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['lang']->value['compression_info'];?>
</div>
                <?php }?>
                <form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap" method="post">
                    <div class="form-group">
                        <textarea name="text" class="form-control" rows="10"/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                    </div>
            </div>
            <div class="modal-footer">
            <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_save'];?>
" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'config', null, null);
?>

<div class="modal fade" id="config" tabindex="-1" role="dialog" 
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" 
                    data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value['a_sitemap_conf'];?>

                </h4>
            </div>
            <div class="modal-body">
                <?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?>
                <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['lang']->value['compression_info'];?>
</div>
                <?php }?>
                <form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/config" method="post">
                    <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sitemap_index'];?>
:</label>
                        <select class="form-control" name="sitemap_index">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_index'] == '1') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_on'];?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_index'] == '2') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_off'];?>
</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sitemap_text'];?>
:</label>
                        <select class="form-control" name="sitemap_txt">
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_txt'] == '1') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_on'];?>
</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_txt'] == '2') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_off'];?>
</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sitemap_probable'];?>
:</label>
                        <select class="form-control" name="sitemap_changefreq">
                        <option value="always" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'always') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['always'];?>
</option>
                        <option value="hourly" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'hourly') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['hourly'];?>
</option>
                        <option value="daily" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'daily') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['daily'];?>
</option>
                        <option value="weekly" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'weekly') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['weekly'];?>
</option>
                        <option value="monthly" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'monthly') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['monthly'];?>
</option>
                        <option value="yearly" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'yearly') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['yearly'];?>
</option>
                        <option value="never" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'never') {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['never'];?>
</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sitemap_priority'];?>
: <span class="small-link">0,0 - 1,0</span></label>
                        <input name="sitemap_priority" class="form-control" id="sitemap_priority" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['sitemap_priority']);?>
" type="text"/>
                    </div>
            </div>
            <div class="modal-footer">
            <input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_save'];?>
" class="btn btn-primary"></div>
            </form>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'config');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'robots');
}
}
