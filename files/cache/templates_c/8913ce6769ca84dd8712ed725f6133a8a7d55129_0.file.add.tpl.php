<?php
/* Smarty version 3.1.30, created on 2017-10-02 20:45:04
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/ads/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d28930c3f0f4_46751880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8913ce6769ca84dd8712ed725f6133a8a7d55129' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/ads/add.tpl',
      1 => 1506969899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d28930c3f0f4_46751880 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</a> / Добавление рекламы</div>
<div class="fon">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?> 
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" class="fon" enctype="multipart/form-data">
        <p><font color="red">*</font><label>Рекламная ссылка:</label><br/><input type="text" class="form-control" name="link" value="<?php echo $_POST['link'];?>
"/></p>
        <p><label>Название:</label><br/><input type="text" class="form-control" name="name" value="<?php echo $_POST['name'];?>
"/></p>
        <p><label>Время размещения рекламы:</label> 
            <input type="text" name="ch" style="width: 50px;" value="<?php echo $_POST['ch'];?>
"/>
            <select name="mn">
                <option value="1">Дней</option>
                <option value="7" selected="selected">Недель</option>
                <option value="31">Месяцев</option>
            </select>
        </p>            
        <p><label>Или кол-во переходов:</label><br/><input type="text" class="form-control" name="count" value="<?php echo $_POST['count'];?>
"/></p>
        <p><label>Место размещения рекламы:</label> 
            <select class="form-control" name="type">
                <option value="head_index">Вверху на главной странице</option>
                <option value="head_no_index">Вверху на всех страницах, кроме главной</option>
                <option value="head">Вверху на всех страницах</option>
                <option value="foot">Внизу на всех страницах</option>
                <option value="left">Слева на всех страницах (только в веб-версии)</option>
            </select>
        </p>
        <p><label><input type="checkbox" name="target" value="1" checked/> Открывать в отдельном окне</label></p>
        <p><font color="red">*</font><label>Рекламный материал:</label> <br/> 
           <input type="file" class="form-control" name="file"/>
        </p>
        <input type="submit" name="ok" value="Отправить" class="btn btn-primary">
    </form>
</div><?php }
}
