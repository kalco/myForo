<?php
/* Smarty version 3.1.30, created on 2017-09-26 21:52:40
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/bookmark.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cab008d97943_99212248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '22fd851b2449a5a41374d6d630682d3a939ceaea' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/bookmark.tpl',
      1 => 1506455559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59cab008d97943_99212248 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>
<div class="panel">
                      <div class="panel-heading"><h4><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h4></div>
                         <div class="panel-body">
    <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
            <div class="list" id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                <a href="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['url']);?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</a> (<?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['time']);?>
)
                <span class="pull-right">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/bookmark/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" title="Редактировать"><i class="fa fa-pencil"></i></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/bookmark/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" title="Удалить"><i class="fa fa-trash-o"></i></a>
                </span>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

         
        <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
            <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
        <?php }?>    
    <?php } else { ?>
        <div class="alert alert-danger">Закладок ещё нет...</div>
    <?php }?>
</div>
</div>
  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_profile');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div>

<?php }
}
