<?php
/* Smarty version 3.1.30, created on 2017-09-29 16:56:34
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/forum/new_post.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ce5f225102b1_47165316',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c394268341e26a9e3a5862b62afd8968bb16c6ce' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/forum/new_post.tpl',
      1 => 1506696950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/posts.tpl' => 1,
  ),
),false)) {
function content_59ce5f225102b1_47165316 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
        <div class="panel-body clearfix">
    <?php $_smarty_tpl->_subTemplateRender("file:system/posts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            
<?php }
}
