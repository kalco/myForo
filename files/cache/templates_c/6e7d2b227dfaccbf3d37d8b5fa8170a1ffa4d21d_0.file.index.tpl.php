<?php
/* Smarty version 3.1.30, created on 2017-09-09 18:41:55
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/sitemap/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b419d31c7674_45151456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e7d2b227dfaccbf3d37d8b5fa8170a1ffa4d21d' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/sitemap/index.tpl',
      1 => 1504975313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b419d31c7674_45151456 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
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
         <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/generate" class="btn btn-xs btn-bricky"><i class="clip-tree"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['a_generate'];?>
</a> 
         <a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#robots"><i class="clip-file"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['a_robots'];?>
</a>
         <a href="#" class="btn btn-xs btn-blue" data-toggle="modal" data-target="#config"><i class="clip-settings"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['a_sitemap_conf'];?>
</a> 
      </div>
      <p>&nbsp;</p>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <div class="panel panel-default">
         <div class="panel-heading">
            <i class="clip-tree"></i>
            <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>

         </div>
         <p>&nbsp;</p>
         <div class="panel-body">
            <div id="users_block">
               <?php if ($_smarty_tpl->tpl_vars['arrayrow']->value) {?>
               <table class="table table-striped table-bordered table-hover table-full-width">
                  <thead>
                     <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_link'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_time'];?>
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
                        <td><?php echo smarty_modifier_times(filectime($_smarty_tpl->tpl_vars['time']->value));?>
</td>
                        <td>
                           <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="btn btn-xs btn-blue tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><i class="clip-pencil-3"></i></a>
                           <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/del/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="btn btn-xs btn-bricky tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
"><i class="clip-remove"></i></a>
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
            </div>
         </div>
      </div>
   </div>
</div>
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
                  <div class="col-sm-12">
                     <textarea name="text" class="textarea-tags" rows="15"/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                  </div>
               </div>
         </div>
         <div class="modal-footer">
         <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_save'];?>
" class="btn btn-teal">
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
                  <label class="col-sm-5 control-label">Генерация индексного файла:</label>
                  <div class="col-sm-5">
                     <select class="form-control" name="sitemap_index">
                     <option value="1" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_index'] == '1') {?>selected="selected"<?php }?>>включена</option>
                     <option value="2" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_index'] == '2') {?>selected="selected"<?php }?>>отключена</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-5 control-label">Генерация текстовой карты сайта::</label>
                  <div class="col-sm-5">
                     <select class="form-control" name="sitemap_txt">
                     <option value="1" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_txt'] == '1') {?>selected="selected"<?php }?>>включена</option>
                     <option value="2" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_txt'] == '2') {?>selected="selected"<?php }?>>отключена</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-5 control-label">Вероятная частота изменения:</label>
                  <div class="col-sm-5">
                     <select class="form-control" name="sitemap_changefreq">
                     <option value="always" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'always') {?>selected="selected"<?php }?>>всегда</option>
                     <option value="hourly" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'hourly') {?>selected="selected"<?php }?>>каждый час</option>
                     <option value="daily" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'daily') {?>selected="selected"<?php }?>>ежедневно</option>
                     <option value="weekly" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'weekly') {?>selected="selected"<?php }?>>еженедельно</option>
                     <option value="monthly" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'monthly') {?>selected="selected"<?php }?>>ежемесячно</option>
                     <option value="yearly" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'yearly') {?>selected="selected"<?php }?>>ежегодно</option>
                     <option value="never" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sitemap_changefreq'] == 'never') {?>selected="selected"<?php }?>>никогда</option>
                     </select>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-5 control-label">Приоритет, допустимый диапазон значений: <span class="small-link">от 0,0 до 1,0</span></label>
                  <div class="col-sm-5">
                     <input name="sitemap_priority" class="form-control" id="sitemap_priority" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['sitemap_priority']);?>
" type="text"/>
                  </div>
               </div>
         </div>
         <div class="modal-footer">
         <input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_save'];?>
" class="btn btn-teal"></div>
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
