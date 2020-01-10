<?php
/* Smarty version 3.1.30, created on 2018-01-10 22:02:19
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a567f5b2e6e77_45933653',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '108ad8b8c2ad1d60d497d828009f1c6837169c3d' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/error.tpl',
      1 => 1515603660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a567f5b2e6e77_45933653 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="text">
    <p>404</p>
    <p>Page not found!</p>
</div>
<div class="menu"><a href="<?php echo $_SERVER['HTTP_REFERER'];?>
"><i class="fa fa-angle-left"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['back'];?>
</a></div>

  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>

      <div class="hidden-xs">
    </div>      
  </div><?php }
}
