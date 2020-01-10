<?php
/* Smarty version 3.1.30, created on 2018-01-12 19:06:50
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/user/lostpass.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a58f93ae35308_40917768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af93cb2f9d8e1a95dc0c9b65c12927b417c4b5c8' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/user/lostpass.tpl',
      1 => 1515604818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a58f93ae35308_40917768 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-primary">
          <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="panel-body">
        <div class="alert alert-info">A link to reset your password will be sent to your e-mail.</div>
         <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?><div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</div><?php }?>    
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
        <?php if ($_POST['ok'] && !isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-success">Password recovery link has been successfully sent to your e-mail!</div><?php }?>
         <div class="form-horizontal">
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post">
            <div class="fieldset">
                                 <div class="form-group">
                          <label class="col-lg-3" for="field_password">Email</label>
                           <div class="col-lg-8">
                              <input name="email" value="<?php echo $_POST['email'];?>
" class="form-control" type="email" required>
                         </div>
                      </div>
               <div class="form-group">
                          <label class="control-label col-sm-3 ">&nbsp;</label>
          								  <div class="col-sm-9">  
                              <small>You know your password?  <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/login">Log in</a></small>
                            </div>
                          </div>
            <input class="btn btn-primary center-block" type="submit" name="ok" value="Reset password">

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
  </div>
<?php }
}
