<?php
/* Smarty version 3.1.30, created on 2018-01-12 22:29:05
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5928a1c62079_93891131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0398aac0e13bc3d21fe389b28ee0fffe58fae798' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/index.tpl',
      1 => 1515605493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a5928a1c62079_93891131 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="btn-group  margin-b-15 actionbuttons">
           <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile" class="active btn btn-link">Personal Details</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/setup" class="btn btn-link">Settings</a>            
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/security" class="btn btn-link">Security</a>                                
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
" title="Privacy" class="btn btn-link">See my profile</a>                                                                        
            </div>

<div class="panel">
    <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 - <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</div> 

<div class="panel-body">

    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
       <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">Name:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="firstname" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['firstname'], ENT_QUOTES, 'UTF-8', true));?>
" type="text">
    							    </div>
                    </div>
                    <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">Lastname:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="lastname" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['lastname'], ENT_QUOTES, 'UTF-8', true));?>
" type="text">
    							    </div>
                    </div>
                    <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">City:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="city" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['city'], ENT_QUOTES, 'UTF-8', true));?>
" type="text">
    							    </div>
                    </div>
                    <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">E-mail:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="email" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true));?>
" type="text">
    							    </div>
                    </div>
                    <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">Phone:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="phone" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['phone'], ENT_QUOTES, 'UTF-8', true));?>
" type="text">
    							    </div>
                    </div>
                    <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">Skype:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="skype" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['skype'], ENT_QUOTES, 'UTF-8', true));?>
" type="text">
    							    </div>
                    </div>
                                       <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">ICQ:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="icq" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['icq'], ENT_QUOTES, 'UTF-8', true));?>
" type="text">
    							    </div>
                    </div>
                                       <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">About me:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="about" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['about'], ENT_QUOTES, 'UTF-8', true));?>
" type="text">
    							    </div>
                    </div>
                    
<div class="container-fluid ">

        <div class="col-lg-4 col-md-4">

                      <div class="image">
                          <?php if ($_smarty_tpl->tpl_vars['user']->value['avatar']) {?>
                                 <img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/user/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/view-<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" alt="" border="0 " id="avatar_src"><?php }?> 
                         </div>
                        </div>
                  <div class="col-lg-4 col-md-4">	
                      <div class="form padding-15 padding-l-0">
                              <div class="fieldset">
                                  <div class="form-group">
                                      <label>Avatar:</label>
                                      <input name="file" value="" class="" type="file">
                                      <p>Use jpg, gif or png format</p>
                                  </div> 
                      </div>
                  </div>
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
