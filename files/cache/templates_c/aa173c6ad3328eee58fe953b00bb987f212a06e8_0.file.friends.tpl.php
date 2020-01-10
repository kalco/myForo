<?php
/* Smarty version 3.1.30, created on 2018-01-10 20:27:48
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/friends.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a564d142c1952_15093009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa173c6ad3328eee58fe953b00bb987f212a06e8' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/friends.tpl',
      1 => 1515605267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a564d142c1952_15093009 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>
<div class="panel">
                      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
                         <div class="panel-body">
    <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
            <div class="list" id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] == $_smarty_tpl->tpl_vars['row']->value['id_user']) {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['login2'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['login2'], ENT_QUOTES, 'UTF-8', true));?>
</a> (<?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['time']);?>
)
                    <span class="pull-right">
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 0) {?>
                            the application has not been accepted yet
                        <?php }?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/friends/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" title="Delete"><i class="fa fa-trash-o"></i></a>
                    </span>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id_user'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</a> (<?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['time']);?>
)
                    <span class="pull-right">
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 0) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/friends/yes/<?php echo $_smarty_tpl->tpl_vars['row']->value['id_user'];?>
" title="Accept Application"><i class="fa fa-plus-square-o"></i></a>
                            <?php }?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/friends/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id_user'];?>
" title="Delete"><i class="fa fa-trash-o"></i></a>
                    </span>    
                <?php }?>
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
        <div class="alert alert-danger">Friends list is empty ...</div>
    <?php }?>
</div>
</div>

  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_profile');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
