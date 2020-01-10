<?php
/* Smarty version 3.1.30, created on 2017-12-06 17:45:27
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/forums/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a281ea7ed7261_99230289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16f1012a863baad69b4ab7d3227805a78ea4edc3' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/forums/index.tpl',
      1 => 1512576829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/seo.tpl' => 1,
  ),
),false)) {
function content_5a281ea7ed7261_99230289 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/function.counter.php';
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
    </div>
    <div class="text-right row-phone">
       <a href="#" data-toggle="modal" data-target="#add_forum" class="btn btn-phone btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_forums_add'];?>
</a>
        </div>
</div>
               <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_id'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_action'];?>
</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
                     <?php smarty_function_counter(array('name'=>'num','assign'=>'num'),$_smarty_tpl);?>

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
/forums/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
</a> </div>

</div>
</div>
</div>
                     <tr>
                        <td class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
                        <td><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
</td>
                        <td><?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 0) {?><span class="badge badge-success" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['perms_desc_1'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms_all'];?>
</span>
                            <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['type'] == 1) {?><span class="badge badge-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['perms_desc_2'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms_users'];?>

                            <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['type'] == 2) {?><span class="badge badge-error" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['perms_desc_3'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms_admins'];?>
</span><?php }?></td>
                        <td>
                           <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/forums/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="#" data-toggle="modal" data-target="#del<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-danger" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
"><span class="glyphicon glyphicon-trash"></span></a>
                           <?php if ($_smarty_tpl->tpl_vars['num']->value > 1) {?>
                           <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/forums/up/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-default" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_up'];?>
"><span class="glyphicon glyphicon-chevron-up"></span></a>
                           <?php }?>
                           <?php if ($_smarty_tpl->tpl_vars['num']->value != $_smarty_tpl->tpl_vars['count']->value) {?>            
                         <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/forums/down/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-default" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_down'];?>
"><span class="glyphicon glyphicon-chevron-down"></span></a>
                           <?php }?>
                        </td>
                     </tr>
                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                  </tbody>
               </table>
               <?php } else { ?>
               <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['categories_empty'];?>
</div>
               <?php }?> 

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'add_forum', null, null);
?>

<div class="modal fade" id="add_forum" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               <?php echo $_smarty_tpl->tpl_vars['lang']->value['a_forums_add'];?>

            </h4>
         </div>
         <div class="modal-body">
            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
            <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php }?>  
            <form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/forums/add" method="post">
               <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms'];?>
:</label>
                     <select name="type" class="form-control">
                     <option value="0"<?php if ($_POST['type'] == 0) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms_all'];?>
</option>
                     <option value="1"<?php if ($_POST['type'] == 1) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms_users'];?>
</option>
                     <option value="2"<?php if ($_POST['type'] == 2) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_perms_admins'];?>
</option>
                     </select>
               </div>
               <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
</label>
                     <input name="name" class="form-control" id="name" value="<?php echo smarty_modifier_esc($_POST['name']);?>
" type="text"/>
               </div>
               <?php $_smarty_tpl->_subTemplateRender("file:admin/seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

               <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_seo');?>

         </div>
         <div class="modal-footer">
         <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add_cat'];?>
" class="btn btn-primary"></div>
         </form>
      </div>
   </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_forum');
}
}
