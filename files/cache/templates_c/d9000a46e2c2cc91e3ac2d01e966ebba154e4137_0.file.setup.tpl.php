<?php
/* Smarty version 3.1.30, created on 2017-09-26 21:39:23
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/setup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59caacebf2b7e1_20751118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9000a46e2c2cc91e3ac2d01e966ebba154e4137' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/setup.tpl',
      1 => 1506454760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59caacebf2b7e1_20751118 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="btn-group  margin-b-15 actionbuttons">
           <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile" class="btn btn-link">Personal Details</a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/setup" class="active btn btn-link">Settings</a>            
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/security" class="btn btn-link">Security</a>                                
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
                        <label for="field_language" class="col-sm-3 control-label">Template:</label>
                        <div class="col-sm-9">
    									     <select class="form-control" name="skin" >
    					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowskin']->value, 'skin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
?>
                <?php $_smarty_tpl->_assignInScope('name', "style/frontend/".((string)$_smarty_tpl->tpl_vars['skin']->value)."/info.ini");
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['user']->value['skin'] == $_smarty_tpl->tpl_vars['skin']->value) {?>selected="selected"<?php }?>><?php echo file_get_contents($_smarty_tpl->tpl_vars['name']->value);?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
>
            </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="field_language" class="col-sm-3 control-label">Languages:</label>
                        <div class="col-sm-9">
    									     <select class="form-control" name="lang">
    				  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowlang']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['user']->value['lang'] == $_smarty_tpl->tpl_vars['lang']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="field_language" class="col-sm-3 control-label">Time Zone:</label>
                        <div class="col-sm-9">
    									     <select class="form-control" name="timezone" >
    				 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'zone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['zone']->value) {
?>
                <option value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['zone']->value['zone_name']);?>
"<?php if ($_smarty_tpl->tpl_vars['user']->value['timezone'] == smarty_modifier_esc($_smarty_tpl->tpl_vars['zone']->value['zone_name'])) {?> selected="selected"<?php }?>><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['zone']->value['zone_name']);?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
   
            </select>
                        </div>
                      </div>
                      <div class="form-group">
                      <label for="field_password" class="col-sm-3 control-label">Posts per Page <small>5 - 100</small>:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="message" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['user']->value['message']);?>
" type="text">
                       </div>
                    </div>

    <p><input type="submit" name="ok" value="Save" class="btn btn-primary pull-right"></p>
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
