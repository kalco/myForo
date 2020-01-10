<?php
/* Smarty version 3.1.30, created on 2017-09-29 19:31:54
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/smiles_my.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ce838ac071e7_48085286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15c255a94cca7f1bb732d1abc2051740159ce735' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/smiles_my.tpl',
      1 => 1506203342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59ce838ac071e7_48085286 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/smiles">Список смайлов</a> / <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
        <form action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="post">
            <table width="100%" border="2" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                <tr>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?><th style="text-align:center;"><b>Выбрать </b></th><?php }?>
                    <th style="text-align:center;"><b>Изображение </b></th>
                    <th style="text-align:center;"><b>Код </b></th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'rows');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rows']->value) {
?>  
                    <tr>  
                        <td style="text-align:center;"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" name="select[]"/></td>
                        <td style="text-align:center;"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/smiles/<?php echo $_smarty_tpl->tpl_vars['rows']->value['photo'];?>
"/></td>
                        <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['rows']->value['code'];?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </table> 
            <p><input type="submit" name="ok" value="Удалить" class="btn btn-primary"></p>
        </form>
         
        <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?><div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div><br/><?php }?>
    <?php } else { ?>
        <div class="alert alert-danger">Смайлов ещё нет...</div>
    <?php }?> 
</div>
<div class="menu"><a href="<?php echo $_SESSION['referer'];?>
"><i class="fa fa-angle-left"></i> Вернуться назад</a></div>

  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>

      <div class="hidden-xs">
    </div>      
  </div><?php }
}
