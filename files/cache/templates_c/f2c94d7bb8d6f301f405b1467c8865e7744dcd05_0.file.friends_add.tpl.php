<?php
/* Smarty version 3.1.30, created on 2018-01-10 21:39:54
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/friends_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a565dfa62a2c3_40999692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f2c94d7bb8d6f301f405b1467c8865e7744dcd05' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/friends_add.tpl',
      1 => 1515605321,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a565dfa62a2c3_40999692 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <?php if ($_smarty_tpl->tpl_vars['blacklist']->value == 0) {?>
        <div class="alert alert-success">Friend request successfully sent!</div>
    <?php } else { ?>
        <div class="alert alert-danger">You can not add as a friend as you are on his blacklist!</div>    
    <?php }?>
</div>

  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_profile');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
