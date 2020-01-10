<?php
/* Smarty version 3.1.30, created on 2017-05-05 10:09:49
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/forum/add_forum.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590c253da62394_54464004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40343e1d9f4216eef363e07df547050b9e41e0b7' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/forum/add_forum.tpl',
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
function content_590c253da62394_54464004 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
">Форум</a><?php if ($_smarty_tpl->tpl_vars['rows']->value['id']) {?> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['name']);?>
</a><?php }?> / <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>    
<form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/add<?php if ($_smarty_tpl->tpl_vars['rows']->value['id']) {?>/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];
}?>" method="post" enctype="multipart/form-data" class="fon">
    <?php if ($_smarty_tpl->tpl_vars['rows']->value['id'] == 0) {?><p><font color="red">*</font>Доступ: <br/> 
        <select name="type" class="form-control">
            <option value="0">Всем</option>
            <option value="1">Только авторизованным</option>
            <option value="2">Только администрации</option>
        </select>
    </p><?php }?>
    <p><font color="red">*</font>Название раздела: <br/> <input type="text" class="form-control" name="name" value="<?php echo $_POST['name'];?>
"/></p>
    <p>Описание раздела:<br/> 
        <?php $_smarty_tpl->_subTemplateRender("file:system/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_comments');?>

        <?php $_smarty_tpl->_subTemplateRender("file:system/seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_seo');?>

    </p>
    <input type="submit" name="ok" value="Отправить" class="btn btn-primary">
</form> 
</div><?php }
}
