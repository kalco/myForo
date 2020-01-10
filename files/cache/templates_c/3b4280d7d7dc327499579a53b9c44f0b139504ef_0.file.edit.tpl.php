<?php
/* Smarty version 3.1.30, created on 2018-02-11 11:15:35
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/pages/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8017c74e95d2_81345460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b4280d7d7dc327499579a53b9c44f0b139504ef' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/pages/edit.tpl',
      1 => 1518344133,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8017c74e95d2_81345460 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="vertical-align margin-bottom-1">
   <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
         <code> <?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
 </code>
    </div>
</div>

              <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>  
          <form class="form-horizontal" role="form" action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/pages/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" method="post">
              <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
:</label>
                     <input name="name" class="form-control" id="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" type="text" required />
               </div>
               <div class="form-group">
               	 <label for="text" class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_text'];?>
:</label>
               	 <input name="text" type="hidden">
                 <div id="editor-container"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['text']);?>
</div>
                  </div>
<input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_save'];?>
" class="btn btn-primary">
</form>     

<?php }
}
