<?php
/* Smarty version 3.1.30, created on 2017-09-23 19:19:49
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/pages/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c697b552e8c0_10045223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '53ee14404d44e2dd36d2573a77741f0f68bf9536' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/pages/edit.tpl',
      1 => 1506187188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c697b552e8c0_10045223 (Smarty_Internal_Template $_smarty_tpl) {
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
      <div class="panel panel-default">
                   <div class="panel-heading">
            <i class="clip-book"></i>
            <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 <span class="label label-primary"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</span>
         </div>
 <p>&nbsp;</p> 
            <div class="panel-body">
            <div id="users_block">
              <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>  
          <form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/pages/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" method="post">
              <div class="form-group">
                  <label class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
:</label>
                  <div class="col-sm-5">
                     <input name="name" class="form-control" id="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" type="text" required />
                  </div>
               </div>
                 <div class="form-group">
                   <label class="col-sm-2 control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_text'];?>
:</label>
                  <div class="col-sm-10">
                     <textarea name="text" id="summernote" class="form-control" rows="20"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['text']);?>
</textarea>
                  </div>
               </div>
<input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_save'];?>
" class="btn btn-teal">
</form>     
           </div>
            </div>
                </div>
   </div>
</div>

<?php echo '<script'; ?>
>
$(document).ready(function() {
   $('#summernote').summernote({
        height: 500,
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
<?php }
}
