<?php
/* Smarty version 3.1.30, created on 2018-01-12 20:18:31
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/users/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a590a07252b31_40643608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82ee2f90a0083e8851c1c152e59304d524d76cc9' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/users/index.tpl',
      1 => 1515603275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a590a07252b31_40643608 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
 <span class="badge badge-warning" title=""><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span></p>
    </div>
    <div class="text-right row-phone">
       <a href="#" data-toggle="modal" data-target="#add_user" class="btn btn-phone btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_user'];?>
</a>
        </div>
</div>

        <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
          <table class="table table-bordered">
             <thead>
                   <tr>
                       <th class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_id'];?>
</th>
                       <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_username'];?>
</th>
                       <th class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_email'];?>
</th>
                       <th class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_registered'];?>
</th>
                       <th class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_last_visit'];?>
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
 - <code><?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
</code>
            </h4>
         </div>
         <div class="modal-body">
              <div class="text-center"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del_confirm'];?>
</div> </br>
         	         	 <div class="form-group">
                     <input type="checkbox" name="optimize" value="1"/>
                      <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_opotimize'];?>
</label>
                     </div>
                  </div>
         <div class="modal-footer">
        <?php if ($_smarty_tpl->tpl_vars['row']->value['id'] > 1) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
</a> <?php } else { ?> <p class="btn btn-primary disabled"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
</p> <?php }?> </div>

</div>
</div>
</div>
                    <tr>
                        <td class="visible-lg hidden-xs"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['id']);?>
</td>
                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
" target="_blank" title=""><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['login']);?>
</a></td>
                        <td class="visible-lg hidden-xs"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['email']);?>
</td>
                        <td class="visible-lg hidden-xs"><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['date_reg']);?>
</td>
                        <td class="visible-lg hidden-xs"><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['date_last']);?>
</td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['ban'] == 0) {?>
                             <?php if ($_smarty_tpl->tpl_vars['row']->value['id'] > 1) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users/ban/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-warning" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_ban'];?>
"><span class="glyphicon glyphicon-ban-circle"></span></a> <?php } else { ?> <p class="btn btn-xs btn-warning disabled" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['ban_admin'];?>
"><span class="glyphicon glyphicon-ban-circle"></span></p><?php }?>
                                <?php } else { ?>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users/unban/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-default" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_unban'];?>
"><span class="glyphicon glyphicon-ok-circle"></span></a>
                                <?php }?>
                             <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
                          <?php if ($_smarty_tpl->tpl_vars['row']->value['id'] > 1) {?>  <a href="#" data-toggle="modal" data-target="#del<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-danger" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
"><span class="glyphicon glyphicon-trash"></span></a> <?php } else { ?> <p class="btn btn-xs btn-danger disabled" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['del_admin'];?>
"><span class="glyphicon glyphicon-trash"></span></p><?php }?>
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
               <?php echo $_smarty_tpl->tpl_vars['lang']->value['add_user'];?>

            </h4>
         </div>
         <div class="modal-body">

            <form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users/add" method="post">
               <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_username'];?>
:</label>
                     <input name="login" class="form-control" id="login" value="<?php echo $_POST['login'];?>
" type="text"/>
               </div>
               <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_pass'];?>
:</label>
                     <input name="password" class="form-control" id="password" value="<?php echo $_POST['password'];?>
" type="text"/>
               </div>
               <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_email'];?>
:</label>
                     <input name="email" class="form-control" id="email" value="<?php echo $_POST['email'];?>
" type="text"/>
               </div>
                              <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_group'];?>
:</label>
                     <select class="form-control" name="level">
                <option value="1"<?php if ($_POST['level'] == 1) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_user'];?>
</option>
                <option value="90"<?php if ($_POST['level'] == 90) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_moderator'];?>
</option>
                <option value="100"<?php if ($_POST['level'] == 100) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_admin'];?>
</option>
                     </select>
               </div>
         </div>
         <div class="modal-footer">
         <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add_user'];?>
" class="btn btn-primary"></div>
         </form>
      </div>
   </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_user');
}
}
