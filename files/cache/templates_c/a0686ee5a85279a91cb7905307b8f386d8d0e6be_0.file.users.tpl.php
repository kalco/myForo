<?php
/* Smarty version 3.1.30, created on 2018-01-10 18:47:04
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/user/users.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a565198761126_83589029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0686ee5a85279a91cb7905307b8f386d8d0e6be' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/user/users.tpl',
      1 => 1515604502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/user.tpl' => 1,
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a565198761126_83589029 (Smarty_Internal_Template $_smarty_tpl) {
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

                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'users');?>

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
        <div class="alert alert-danger">No users yet ...</div>
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
  </div><?php }
}
