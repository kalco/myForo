<?php
/* Smarty version 3.1.30, created on 2017-09-23 19:02:15
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/pages/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c69397d3e5d0_35133065',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed7ce50b6f59befd93dc1725b0434f07b208f305' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/pages/index.tpl',
      1 => 1506186133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c69397d3e5d0_35133065 (Smarty_Internal_Template $_smarty_tpl) {
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
         <a href="#" class="btn btn-xs btn-success" data-toggle="modal" data-target="#add_page"><i class="clip-plus-circle"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['pages_add'];?>
</a> 
      </div>
      <p>&nbsp;</p>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <div class="panel panel-default">
                   <div class="panel-heading">
            <i class="clip-book"></i>
            <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>

         </div>
 <p>&nbsp;</p>
           <div class="panel-body">
            <div id="users_block">
<?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
<table class="table table-striped table-bordered table-hover table-full-width">
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
 - <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>

            </h4>
         </div>
         <div class="modal-body">
               <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del_confirm'];?>
</div>
                  </div>
         <div class="modal-footer">
         <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/pages/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-teal"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
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
" class="btn btn-xs btn-blue tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><i class="clip-pencil-3"></i></a>
                                <a href="#" data-toggle="modal" data-target="#del<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-bricky tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
"><i class="clip-remove"></i></a></td>
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
            </div>
         </div>
      </div>
   </div>
</div>
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
                  <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
:</label>
                  <div class="col-sm-5">
                     <input name="name" class="form-control" id="name" value="<?php echo $_POST['name'];?>
" type="text" required />
                  </div>
               </div>
               <div class="form-group">
                   <label class="col-sm-1 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_text'];?>
:</label>
                  <div class="col-sm-11">
                     <textarea name="text" id="summernote" class="form-control" rows="20"><?php echo $_POST['text'];?>
 </textarea>
                  </div>
               </div>
         </div>
         <div class="modal-footer">
         <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add_new_page'];?>
" class="btn btn-teal"></div>
         </form>
      </div>
   </div>
</div>
<?php echo '<script'; ?>
>
$(document).ready(function() {
   $('#summernote').summernote({
        height: 300,
         toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['fontsize', ['fontsize']],
    ['color', ['color']],
    ['para', ['ul', 'ol', 'paragraph']],
    ['height', ['height']]
  ]
      });
});
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_page');?>

<?php }
}
