<?php
/* Smarty version 3.1.30, created on 2018-01-11 01:49:15
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/active/posts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a56b48b0dfa36_63928192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94cb9728388ef5cf8feee96ac5e5e97331d612f5' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/active/posts.tpl',
      1 => 1515603811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/posts.tpl' => 1,
  ),
),false)) {
function content_5a56b48b0dfa36_63928192 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="panel">
        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
        <div class="panel-body clearfix">
    <?php if (empty($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
        
            <div class="alert alert-warning text-center margin-t-15">Guests are not shown closed from unauthorized posts!</div>
      
    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['level'] < 50) {?>
        
            <div class="alert alert-warning ttext-center margin-t-15">Hidden posts are displayed only by the site administration!</div>
   
    <?php }?>    

  <?php $_smarty_tpl->_subTemplateRender("file:system/posts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  
  <?php }
}
