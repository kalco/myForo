<?php
/* Smarty version 3.1.30, created on 2017-09-29 18:15:37
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/active/thems.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ce6399e38930_43225318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94fd1d7497b1ebd77ed8a52cdc708457c6909bcf' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/active/thems.tpl',
      1 => 1506698121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/thems.tpl' => 1,
  ),
),false)) {
function content_59ce6399e38930_43225318 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel">
        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
        <div class="panel-body clearfix">

  
    <?php if (empty($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
        
            <div class="alert alert-warning text-center margin-t-15">Гостям не отображаются закрытые от не авторизованных темы!</div>
      
    <?php } elseif ($_smarty_tpl->tpl_vars['user']->value['level'] < 10) {?>
        
            <div class="alert alert-warning text-center margin-t-15">Скрытые темы отображаются только администрации сайта!</div>
   
    <?php }?>    

  <?php $_smarty_tpl->_subTemplateRender("file:system/thems.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
