<?php
/* Smarty version 3.1.30, created on 2017-11-26 00:12:56
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/pages/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a19f8f88388c1_68734002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cec56bc825af79921d6aeed4d6fdb5be6932a75a' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/pages/index.tpl',
      1 => 1511555441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a19f8f88388c1_68734002 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_bbcode')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.bbcode.php';
?>
<div class="panel">
 <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="panel-body">
                <?php echo smarty_modifier_bbcode(smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['text']));?>


</div>
</div>

  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>

      <div class="hidden-xs">
    </div>      
  </div><?php }
}
