<?php
/* Smarty version 3.1.30, created on 2017-08-26 20:46:18
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/forum/setup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59a1b3ea340614_83139352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5208b9609709fc5afbce514a3fba9a891715d2e0' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/forum/setup.tpl',
      1 => 1493623899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/panel.tpl' => 1,
    'file:system/seo.tpl' => 1,
  ),
),false)) {
function content_59a1b3ea340614_83139352 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
">Форум</a><?php if ($_smarty_tpl->tpl_vars['forum']->value['id']) {?> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['forum']->value['name']);?>
</a><?php }?> / <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>    
<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
    <?php if ($_smarty_tpl->tpl_vars['row']->value['refid'] == 0) {?><p><font color="red">*</font>Доступ: <br/> 
            <select name="type" class="form-control">
                <option value="0"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 0) {?> selected="selected"<?php }?>>Всем</option>
                <option value="1"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 1) {?> selected="selected"<?php }?>>Только авторизованным</option>
                <option value="2"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 2) {?> selected="selected"<?php }?>>Только администрации</option>
            </select>
        </p><?php }?>
        <?php if ($_smarty_tpl->tpl_vars['row']->value['refid'] > 0) {?>
            <p>Переместить в раздел: <br/> <select name="forum" class="form-control" >
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['rows']->value['id'] == $_smarty_tpl->tpl_vars['row']->value['refid']) {?> selected="selected"<?php }?>><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['name']);?>
</option>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </select></p>
        <?php }?>
        <p><font color="red">*</font>Название раздела: <br/> <input type="text" class="form-control" name="name" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
"/></p>
        <p>Описание раздела:<br/> 
            <?php $_smarty_tpl->_subTemplateRender("file:system/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'edit_comments');?>

            <?php $_smarty_tpl->_subTemplateRender("file:system/seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'edit_seo');?>

        </p>
        <input type="submit" name="ok" value="Отправить" class="btn btn-primary">
    </form> 
</div><?php }
}
