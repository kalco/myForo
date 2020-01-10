<?php
/* Smarty version 3.1.30, created on 2017-09-09 20:15:18
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/error.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b42fb6a798b4_57474792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc12210309d61890f394c52e877fbf059094204c' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/error.tpl',
      1 => 1494169769,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b42fb6a798b4_57474792 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="text">
    <p>404</p>
    <p>Запрашиваемая страница не найдена</p>
</div>
<div class="menu"><a href="<?php echo $_SERVER['HTTP_REFERER'];?>
"><i class="fa fa-angle-left"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['back'];?>
</a></div><?php }
}
