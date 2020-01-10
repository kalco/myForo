<?php
/* Smarty version 3.1.30, created on 2017-09-09 08:31:50
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b38ad6adadc8_07716547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37919a99f1d3a44fde498732558b2959206c4758' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/templates/index.tpl',
      1 => 1504938709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b38ad6adadc8_07716547 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
   <div class="col-sm-12">
      <div class="page-header">
         <h3> <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 </h3>
         <p class="title-description"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <div class="panel panel-default">
         <div class="panel-heading">
            <i class="clip-stack"></i>
            <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>

         </div>
         <p>&nbsp;</p>
         <div class="panel-body">
            <div id="users_block">
    <table class="table table-striped table-bordered table-hover table-full-width">
         <thead>
        <tr><th> Название папки со стилями и шаблонами</th>
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
" class="btn btn-xs btn-blue tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><i class="clip-pencil-3"></i></a>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/del/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
" class="btn btn-xs btn-bricky tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
"><i class="clip-remove"></i></a>
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
    
            </div>
         </div>
      </div>
   </div>
</div>

   
<?php }
}
