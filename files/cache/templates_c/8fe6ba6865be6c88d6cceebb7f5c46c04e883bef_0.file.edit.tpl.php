<?php
/* Smarty version 3.1.30, created on 2018-02-11 10:10:56
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/users/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8008a011aba0_09626879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fe6ba6865be6c88d6cceebb7f5c46c04e883bef' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/users/edit.tpl',
      1 => 1515603292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8008a011aba0_09626879 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
    </div>
</div>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post"  class="form-horizontal">
    	 <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['user_group'];?>
:</label>
            <select name="level" class="form-control">
                <option value="1"<?php if ($_smarty_tpl->tpl_vars['row']->value['level'] == 1) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_user'];?>
</option>
                <option value="90"<?php if ($_smarty_tpl->tpl_vars['row']->value['level'] == 90) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_moderator'];?>
</option>
                <option value="100"<?php if ($_smarty_tpl->tpl_vars['row']->value['level'] == 100) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_admin'];?>
</option>
            </select>
            </div>
         <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_username'];?>
:</label>
            <input type="text" name="login" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['login']);?>
" class="form-control"/>
            	</div>
            	<div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_pass'];?>
:</label>
            <input type="password" name="pass" value="<?php echo $_POST['pass'];?>
" class="form-control"/>
            	</div>
            	<div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_email'];?>
:</label>
           <input type="text" name="email" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['email']);?>
" class="form-control"/>
            	</div>
          <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_name'];?>
:</label>
           <input type="text" name="firstname" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['firstname']);?>
" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_surname'];?>
:</label>
           <input type="text" name="lastname" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['lastname']);?>
" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_phone'];?>
:</label>
           <input type="text" name="phone" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['phone']);?>
" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_city'];?>
:</label>
            <input type="text" name="city" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['city']);?>
" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_skype'];?>
:</label>
           <input type="text" name="skype" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['skype']);?>
" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_icq'];?>
:</label>
            <input type="text" name="icq" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['icq']);?>
" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_points'];?>
:</label>
            <input type="text" name="balls" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['balls']);?>
" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_about'];?>
:</label>
           <textarea name="about" class="form-control"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['about']);?>
</textarea>
            	</div>
       
       <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_save'];?>
" class="btn btn-primary">
    </form>



<?php }
}
