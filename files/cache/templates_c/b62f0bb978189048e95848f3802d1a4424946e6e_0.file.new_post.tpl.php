<?php
/* Smarty version 3.1.30, created on 2017-11-24 21:33:51
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/new_post.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a18822f93c2f7_00996685',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b62f0bb978189048e95848f3802d1a4424946e6e' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/new_post.tpl',
      1 => 1511555441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/posts.tpl' => 1,
  ),
),false)) {
function content_5a18822f93c2f7_00996685 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
        <div class="panel-body clearfix">
    <?php $_smarty_tpl->_subTemplateRender("file:system/posts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            
<?php }
}
