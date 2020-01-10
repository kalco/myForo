<?php
/* Smarty version 3.1.30, created on 2017-09-24 09:18:19
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/pages/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c75c3b201517_50818749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0949930c349048d0e8ac0980ffd2b0cbe1ac4097' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/pages/index.tpl',
      1 => 1506237496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59c75c3b201517_50818749 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_bbcode')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.bbcode.php';
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
