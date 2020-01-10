<?php
/* Smarty version 3.1.30, created on 2017-09-09 14:37:59
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/users/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b3e0a7900789_21776160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f1e141da9f281e37fcc77c0bfc9013cd6373acb' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/users/index.tpl',
      1 => 1504960677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b3e0a7900789_21776160 (Smarty_Internal_Template $_smarty_tpl) {
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
         <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#add_user"><i class="clip-user-plus"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['add_user'];?>
</a>
      </div>
      <p>&nbsp;</p>
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
                       <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_id'];?>
</th>
                       <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_username'];?>
</th>
                       <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_email'];?>
</th>
                       <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_registered'];?>
</th>
                       <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_last_visit'];?>
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
                        <td><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['id']);?>
</td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
" target="_blank" title=""><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['login']);?>
</a></td>
                        <td><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['email']);?>
</td>
                        <td><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['date_reg']);?>
</td>
                        <td><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['date_last']);?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['ban'] == 0) {?>
                             <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users/ban/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-warning tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_ban'];?>
"><i class="clip-user-block"></i></a>
                                <?php } else { ?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users/unban/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-teal tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_unban'];?>
"><i class="clip-user-minus"></i></a>
                                <?php }?>
                             <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-blue tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><i class="clip-pencil-3"></i></a>
                           <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-bricky tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del_confirm'];?>
');"><i class="clip-remove"></i></a>
                        </td>                    </tr>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                 </tbody>
           </table>
               <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
               <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
               <br/><?php }?>
               <?php } else { ?>
               <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_empty'];?>
</div>
               <?php }?>    
            </div>
         </div>
      </div>
   </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'add_user', null, null);
?>

<div class="modal fade" id="add_user" tabindex="-1" role="dialog" 
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

            <form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users/add" method="post">
               <div class="form-group">
                  <label class="col-sm-5 control-label">Username</label>
                  <div class="col-sm-5">
                     <input name="login" class="form-control" id="login" value="<?php echo $_POST['login'];?>
" type="text"/>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-5 control-label">Password</label>
                  <div class="col-sm-5">
                     <input name="password" class="form-control" id="password" value="<?php echo $_POST['password'];?>
" type="text"/>
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-5 control-label">Email<span class="small-link">от 0,0 до 1,0</span></label>
                  <div class="col-sm-5">
                     <input name="email" class="form-control" id="email" value="<?php echo $_POST['email'];?>
" type="text"/>
                  </div>
               </div>
                              <div class="form-group">
                  <label class="col-sm-5 control-label">Генерация текстовой карты сайта::</label>
                  <div class="col-sm-5">
                     <select class="form-control" name="level">
                <option value="1"<?php if ($_POST['level'] == 1) {?> selected="selected"<?php }?>>пользователь</option>
                <option value="10"<?php if ($_POST['level'] == 10) {?> selected="selected"<?php }?>>младший модератор</option>
                <option value="20"<?php if ($_POST['level'] == 20) {?> selected="selected"<?php }?>>модератор</option>
                <option value="30"<?php if ($_POST['level'] == 30) {?> selected="selected"<?php }?>>старший модератор</option>
                <option value="40"<?php if ($_POST['level'] == 40) {?> selected="selected"<?php }?>>супер модератор</option>
                <option value="50"<?php if ($_POST['level'] == 50) {?> selected="selected"<?php }?>>заместитель администратора</option>
                <option value="100"<?php if ($_POST['level'] == 100) {?> selected="selected"<?php }?>>главный администратор</option>
                     </select>
                  </div>
               </div>
         </div>
         <div class="modal-footer">
         <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add_user'];?>
" class="btn btn-teal"></div>
         </form>
      </div>
   </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_user');
}
}
