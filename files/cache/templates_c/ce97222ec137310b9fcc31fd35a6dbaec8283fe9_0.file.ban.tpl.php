<?php
/* Smarty version 3.1.30, created on 2017-05-04 21:03:38
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/users/ban.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590b6cfadfc260_17726770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce97222ec137310b9fcc31fd35a6dbaec8283fe9' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/users/ban.tpl',
      1 => 1493624542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/panel.tpl' => 1,
  ),
),false)) {
function content_590b6cfadfc260_17726770 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users">Пользователи</a> / <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <?php if ($_smarty_tpl->tpl_vars['row']->value['level'] < 100) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" class="fon">
            <p><font color="red">*</font><label>Срок бана:</label> <br/>
                <input type="text" name="count" class="form-control"/>
                <select name="time" class="form-control">
                    <option value="1">дней</option>
                    <option value="7">недель</option>
                    <option value="31">месяцев</option>
                </select>
            </p>
            <p>Причина бана:<br/> 
                <?php $_smarty_tpl->_subTemplateRender("file:system/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_comments');?>

            </p>
            <p><input type="submit" name="ok" value="Отправить" class="btn btn-primary"></p>
            <?php } else { ?>
            <div class="alert alert-danger">Вы не можете забанить главного администратора!</div>
        <?php }?>
    </form>
</div><?php }
}
