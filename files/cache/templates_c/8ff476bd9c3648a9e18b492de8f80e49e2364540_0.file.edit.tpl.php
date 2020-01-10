<?php
/* Smarty version 3.1.30, created on 2017-10-02 22:19:51
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/ads/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d29f678fa629_63438841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ff476bd9c3648a9e18b492de8f80e49e2364540' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/ads/edit.tpl',
      1 => 1506975582,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d29f678fa629_63438841 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</a> / Редактирование рекламы <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['link']);?>
</div>
<div class="fon">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div class="alert alert-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" class="fon" enctype="multipart/form-data">
        <p><label>Рекламная ссылка:</label><br/><input type="text" class="form-control" name="link" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['link']);?>
"/></p>
        <p><label>Название:</label><br/><input type="text" class="form-control" name="name" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
"/></p>
        <p><label>Продлить время размещения рекламы:</label>  
        <input type="text" name="ch" style="width: 50px;" value="<?php echo $_POST['ch'];?>
"/>
        <select name="mn">
            <option value="1">Дней</option>
            <option value="7" selected="selected">Недель</option>
            <option value="31">Месяцев</option>
        </select>
        </p>             
        <p><label>Или кол-во переходов:</label><br/><input type="text" class="form-control" name="count" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['count'];?>
"/></p>
        <p><label>Место размещения рекламы:</label> <select class="form-control" name="type">
                <option value="head_index"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'head_index') {?> selected="selected"<?php }?>>Вверху на главной странице</option>
                <option value="head_no_index"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'head_no_index') {?> selected="selected"<?php }?>>Вверху на всех страницах, кроме главной</option>
                <option value="head"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'head') {?> selected="selected"<?php }?>>Вверху на всех страницах</option>
                <option value="foot"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'foot') {?> selected="selected"<?php }?>>Внизу на всех страницах</option>
                <option value="left"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'left') {?> selected="selected"<?php }?>>Слева на всех страницах (только в веб-версии)</option>
            </select></p>
        <p><label><input type="checkbox" name="target" value="1"<?php if ($_smarty_tpl->tpl_vars['row']->value['target'] == 1) {?> checked<?php }?>/> Открывать в отдельном окне</label></p>
        <p><label>Рекламный материал: <span class="small-link">You may use <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/bbcode" target="_blank">BBCODE</a></span></label> <br/>  <input name="file" class="form-control" id="file" type="file"/>
        </p>
        <input type="submit" name="ok" value="Отправить" class="btn btn-primary">
    </form>
</div>
<?php }
}
