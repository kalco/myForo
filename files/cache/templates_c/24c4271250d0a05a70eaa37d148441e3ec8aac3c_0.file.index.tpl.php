<?php
/* Smarty version 3.1.30, created on 2018-02-11 12:48:57
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/pages/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a802da9311cb1_90308370',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24c4271250d0a05a70eaa37d148441e3ec8aac3c' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/pages/index.tpl',
      1 => 1518349721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a802da9311cb1_90308370 (Smarty_Internal_Template $_smarty_tpl) {
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
       <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_page"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pages_add'];?>
</a>
        </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
<table class="table table-bordered">
                  <thead>
			<tr>
                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
</th>
                            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_url'];?>
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
/pages/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
</a> </div>

</div>
</div>
</div>
				<tr>  
                                <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/pages/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['translate'];?>
" target="_blank"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
</a></td>
                                                        <td>    <div class="row">
                              <div class="col-md-12" style="margin-right:10px">
                                 <div class="form-group">
                                    <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/pages/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['translate'];?>
" readonly="readonly" type="text">
                                 </div>
                              </div>
                           </div> </td>
                                <td><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['time']);?>
</td>
				<td>            
                                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/pages/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="#" data-toggle="modal" data-target="#del<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-danger" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
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
<?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?><div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div><br/><?php }
} else { ?>
    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['page_empty'];?>
</div>
    <?php }?>    

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'add_page', null, null);
?>

<div class="modal fade" id="add_page" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               <?php echo $_smarty_tpl->tpl_vars['lang']->value['pages_add'];?>

            </h4>
         </div>
         <div class="modal-body">
              <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
              <?php }?> 
            <form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/pages/add" method="post">
               <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
:</label>
                     <input name="name" class="form-control" id="name" value="<?php echo $_POST['name'];?>
" type="text" required />
               </div>
                <div class="form-group">
               	 <label for="text" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_text'];?>
:</label>
               	 <input name="text" type="hidden">
                 <div id="editor-container"><?php echo $_POST['text'];?>
</div>
                  </div>
         </div>
         <div class="modal-footer">
         <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add_new_page'];?>
" class="btn btn-primary"></div>
         </form>
      </div>
   </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_page');?>

<?php }
}
