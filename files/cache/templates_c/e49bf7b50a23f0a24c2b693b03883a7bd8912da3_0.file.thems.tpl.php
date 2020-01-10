<?php
/* Smarty version 3.1.30, created on 2018-01-10 11:05:37
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/system/thems.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a55c951b7a233_19181634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e49bf7b50a23f0a24c2b693b03883a7bd8912da3' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/system/thems.tpl',
      1 => 1515571294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a55c951b7a233_19181634 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'rows', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['rows']->value) {
?>
        <div class="list">
            <?php if ($_smarty_tpl->tpl_vars['rows']->value['closed'] == 1) {?><i class="fa fa-close"></i><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['rows']->value['up'] == 1) {?><i class="fa fa-exclamation-triangle"></i><?php }?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['rows']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
 (<?php echo $_smarty_tpl->tpl_vars['rows']->value['countpost'];?>
)</a> 
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['starts']->value[$_smarty_tpl->tpl_vars['k']->value];?>
#<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_post_last'];?>
" title="Последнее сообщение"><i class="fa fa-angle-double-right"></i></a>
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user_last'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['rows']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</a>
            <span class="pull-right hidden-xs hidden-sm"><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['time']);?>
</span>
            <span class="menu visible-xs"><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['time']);?>
</span>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php } else { ?>
   <div class="text-center margin-t-15">There are no threads yet ...</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
    <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
<?php }?>
   </div>
   </div>
 <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
