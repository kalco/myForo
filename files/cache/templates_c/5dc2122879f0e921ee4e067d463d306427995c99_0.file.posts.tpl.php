<?php
/* Smarty version 3.1.30, created on 2018-01-10 20:11:47
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/system/posts.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a564953977789_00000893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dc2122879f0e921ee4e067d463d306427995c99' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/system/posts.tpl',
      1 => 1515604080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/user.tpl' => 1,
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a564953977789_00000893 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'rows', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['rows']->value) {
?>
        <div class="list" id="<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
">
            <?php $_smarty_tpl->_subTemplateRender("file:system/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'forum');?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'text');?>

            <?php if ($_smarty_tpl->tpl_vars['arrayrowfile']->value && $_smarty_tpl->tpl_vars['rows']->value['count_file'] > 0) {?>
                <h4>Files:</h4>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowfile']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
                    <?php if ($_smarty_tpl->tpl_vars['rows']->value['id'] == $_smarty_tpl->tpl_vars['file']->value['id_post']) {?>
                        <p class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_tema'];?>
/load/<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
" title="Download file"><i class="fa fa-file"></i> <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['file']->value['file']);?>
</a> (<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['file']->value['size']);
if ($_smarty_tpl->tpl_vars['file']->value['loadcounts'] > 0) {?>, скачиваний: <?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['file']->value['loadcounts']);
}?>)</p>   
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
            <div class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_tema'];?>
"><i class="fa fa-angle-right"></i> In thread: <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['rows']->value['nametema'], ENT_QUOTES, 'UTF-8', true));?>
</a></div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php } else { ?>
   <div class="text-center margin-t-15">There are no posts yet ...</div>
<?php }
if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
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
  </div>
<?php }
}
