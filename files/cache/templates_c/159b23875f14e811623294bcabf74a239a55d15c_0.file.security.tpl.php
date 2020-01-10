<?php
/* Smarty version 3.1.30, created on 2017-09-24 12:33:57
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/security.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c78a15941e27_97631326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '159b23875f14e811623294bcabf74a239a55d15c' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/security.tpl',
      1 => 1506249232,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59c78a15941e27_97631326 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="btn-group  margin-b-15 actionbuttons">
           <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile" class="btn btn-link">Personal Details</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/setup" class="btn btn-link">Settings</a>            
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/security" class="active btn btn-link">Security</a>                                
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
" title="Privacy" class="btn btn-link">See my profile</a>                                                                        
            </div>
<div class="panel">
    <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div> 

<div class="panel-body">

<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" class="form-horizontal">
                          <div class="form-group">
                      <label class="col-sm-3 control-label">Old Password:</label>
    								  <div class="col-sm-9">
                        <input class="form-control" name="oldpass" value="<?php echo $_POST['oldpass'];?>
" type="password">
                       </div>
                    </div>
                    
                                          <div class="form-group">
                      <label class="col-sm-3 control-label">New Password:</label>
    								  <div class="col-sm-9">
                        <input class="form-control" name="newpass" value="<?php echo $_POST['newpass'];?>
" type="password">
                       </div>
                    </div>
                                          <div class="form-group">
                      <label for="field_password" class="col-sm-3 control-label">Posts per Page:</label>
    								  <div class="col-sm-9">
                        <input class="form-control" name="newpass_confirm" value="<?php echo $_POST['newpass_confirm'];?>
" type="password">
                       </div>
</div>
    <input type="submit" name="ok" value="Save" class="btn btn-primary pull-right">
</form>
 </div>
  </div>
    <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_profile');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
