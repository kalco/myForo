<?php
/* Smarty version 3.1.30, created on 2017-12-09 13:36:15
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/users/ban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2bbc9fcec1a5_62073517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57efc8f80a4cf9ffdbb66ba8201907634ca6e2d9' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/users/ban.tpl',
      1 => 1512815774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2bbc9fcec1a5_62073517 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
        <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
    </div>
</div>
   
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" class="form-horizontal">
        	<div class="form-group">
           <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ban_expire'];?>
:</label>
                <input type="text" name="count" class="form-control"/>
                  </div>
                <div class="form-group">
                <select name="time" class="form-control">
                    <option value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_days'];?>
</option>
                    <option value="7"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_weeks'];?>
</option>
                    <option value="31"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_months'];?>
</option>
                </select>
          </div>
          
        <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ban_reason'];?>
:</label>
                     <input name="text" class="form-control" value="<?php echo htmlspecialchars($_POST['text'], ENT_QUOTES, 'UTF-8', true);?>
" type="text" required />
               </div>
         
            <p><input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_save'];?>
" class="btn btn-primary"></p>

    </form>
            <?php }
}
