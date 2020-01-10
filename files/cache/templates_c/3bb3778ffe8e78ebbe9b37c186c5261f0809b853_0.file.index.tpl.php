<?php
/* Smarty version 3.1.30, created on 2017-12-06 17:15:35
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2817a7899fe6_24867745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb3778ffe8e78ebbe9b37c186c5261f0809b853' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/templates/index.tpl',
      1 => 1512576931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2817a7899fe6_24867745 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
       <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
    </div>
</div>

    <table class="table table-bordered">
         <thead>
        <tr>
            <th> Название папки со стилями и шаблонами</th>
            <th>Название шаблона</th>
            <th>Редактор</th>
        </tr>
         </thead>
          <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowskin']->value, 'skin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
?>    
            <?php $_smarty_tpl->_assignInScope('name', "style/frontend/".((string)$_smarty_tpl->tpl_vars['skin']->value)."/info.ini");
?>
            <tr><td><?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
</td> 
                <td><?php echo file_get_contents($_smarty_tpl->tpl_vars['name']->value);?>
</td> 
                <td>   
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/view/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
" class="btn btn-xs btn-warning" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_view'];?>
"><span class="glyphicon glyphicon-eye-open"></span></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/del/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
" class="btn btn-xs btn-danger" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
"><span class="glyphicon glyphicon-trash"></span></a>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

         </tbody>
    </table>
<?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?><div class="alert alert-danger">Включёно сжатие HTML. Перед редактированием его рекомендуется <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting">выключить</a>.</div><?php }?> 
<h3>Загрузить новый шаблон</h3>
<?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger">
        <button data-dismiss="alert" class="close close-sm" type="button"><i class="fa fa-times"></i></button><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>    
    <form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates" method="post" enctype="multipart/form-data" class="fon">
        <font color="red">*</font>Выбрать zip архив <input name="file" type="file" required/><br/><br/>
        <input type="submit" name="ok" value="Отправить" class="btn btn-primary">
    </form>

   
<?php }
}
