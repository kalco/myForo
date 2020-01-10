<?php
/* Smarty version 3.1.30, created on 2018-01-10 20:35:52
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/history_clear.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a564ef83c18e8_92587851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97a3247125c38353b067096802c3141f471d43a8' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/history_clear.tpl',
      1 => 1515605468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a564ef83c18e8_92587851 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Are you sure you want to clear the notifications?</div>
        <input type="submit" name="ok" value="Yes" class="btn btn-primary"> <input type="submit" name="close" value="No" class="btn btn-primary">
    </form>
</div>
  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_profile');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
