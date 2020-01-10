<?php
/* Smarty version 3.1.30, created on 2018-01-10 21:49:23
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/post_setup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a566033655a75_95204581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64e47ebb0150d5d82c0c5aa55346397a83c7b81b' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/post_setup.tpl',
      1 => 1515610158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/panel.tpl' => 1,
  ),
),false)) {
function content_5a566033655a75_95204581 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>  
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
        <p><font color="red">*</font>message:<br/> 
            <?php $_smarty_tpl->_subTemplateRender("file:system/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'edit_comments');?>

        </p>
        <?php if ($_smarty_tpl->tpl_vars['arrayrowfile']->value) {?>
            <p>Choose file for delete:</p>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowfile']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
                <label><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
" name="del[]"/> <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file'], ENT_QUOTES, 'UTF-8', true));?>
</label><br/>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            <?php }?>
        <p><input type="submit" name="ok" value="Send" class="btn btn-primary"></p>
    </form>
</div>
<div class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['starts']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="fa fa-angle-left"></i> Thread <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['tema']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</a></div> <?php }
}
