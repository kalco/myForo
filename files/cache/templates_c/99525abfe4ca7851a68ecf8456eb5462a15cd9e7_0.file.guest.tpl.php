<?php
/* Smarty version 3.1.30, created on 2017-09-28 21:29:32
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/guest.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cd4d9cbb8f66_13071554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99525abfe4ca7851a68ecf8456eb5462a15cd9e7' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/guest.tpl',
      1 => 1506626963,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/user.tpl' => 1,
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59cd4d9cbb8f66_13071554 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
    <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div> 

<div class="panel-body">
<div class="container-fluid container-small">
<div class="row page_account_gifts">
    <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
<div class="loop_gift col-lg-3 col-md-4 col-sm-4 col-xs-12 gift_entry">

                <?php $_smarty_tpl->_subTemplateRender("file:system/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

               <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'comments');?>

            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
            <div class="page-control"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
        <?php }?>    
    <?php } else { ?>
        <div class="alert alert-danger">Пользователей ещё нет...</div>
    <?php }?>
</div>
</div>
</div>
</div>
       
  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_users');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div>

<?php }
}
