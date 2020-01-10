<?php
/* Smarty version 3.1.30, created on 2017-09-23 23:48:28
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c6d6acde03c5_37270995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dc8caa75314cb021b2eba742f160157179b28a7' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/login.tpl',
      1 => 1506203299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59c6d6acde03c5_37270995 (Smarty_Internal_Template $_smarty_tpl) {
?>
      <div class="panel panel-primary">
          <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
         <div class="panel-body">
              <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
           <div class="form-horizontal">
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post">
            <div class="fieldset">
                 <div class="form-group">
                          <label class="col-lg-3" for="field_username">Username</label>
                          <div class="col-lg-8">
                              <input id="field_username" name="login" value="<?php echo $_POST['login'];?>
" class="form-control" type="text" required>
                          </div>
                      </div>
                                            <div class="form-group">
                          <label class="col-lg-3" for="field_password">Password</label>
                           <div class="col-lg-8">
                              <input id="field_password" name="password" value="<?php echo $_POST['password'];?>
" class="form-control" type="password" required>
                         </div>
                      </div>
               <div class="form-group">
                          <label class="control-label col-sm-3 ">&nbsp;</label>
          								  <div class="col-sm-9">  
                              <small>Forget password?  <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/lostpass">Reset password</a></small>
                            </div>
                          </div>
            <input class="btn btn-primary center-block" type="submit" name="ok" value="Log in">
          </div>
        </form>
          </div>
        </div>
	</div>
	
	  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>

      <div class="hidden-xs">
    </div>      
  </div><?php }
}
