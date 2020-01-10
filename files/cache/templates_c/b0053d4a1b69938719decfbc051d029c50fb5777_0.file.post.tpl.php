<?php
/* Smarty version 3.1.30, created on 2018-01-12 20:26:49
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/post.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a590bf9385c63_34348216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0053d4a1b69938719decfbc051d029c50fb5777' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/post.tpl',
      1 => 1515785146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/user.tpl' => 1,
  ),
),false)) {
function content_5a590bf9385c63_34348216 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_bbcode')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.bbcode.php';
echo $_smarty_tpl->tpl_vars['title2']->value;?>

<div class="fon">
    <?php $_smarty_tpl->_subTemplateRender("file:system/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'forum');?>

    <?php echo smarty_modifier_bbcode(smarty_modifier_esc($_smarty_tpl->tpl_vars['text']->value));?>

</div>
<div class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['starts']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
"><i class="fa fa-angle-left"></i> Thread <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['tema']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</a></div> <?php }
}
