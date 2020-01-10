<?php
/* Smarty version 3.1.30, created on 2017-09-24 18:21:36
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/smiles.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c7db9000a235_03005816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4885e4230cd96078a7bd7c5120847819750c840c' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/smiles.tpl',
      1 => 1506203336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59c7db9000a235_03005816 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><?php echo $_smarty_tpl->tpl_vars['title2']->value;
if ($_smarty_tpl->tpl_vars['user']->value['id']) {?> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/smiles/my">Мои смайлы</a><?php }?></div>
<div class="fon">
    <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?><form action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="post"><?php }?>
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
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?><td style="text-align:center;"><?php if ($_smarty_tpl->tpl_vars['rows']->value['idsmile'] == 0) {?><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" name="select[]"/><?php } else { ?>выбран<?php }?></td><?php }?>
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
            <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?>    
                <p><input type="submit" name="ok" value="Выбрать" class="btn btn-primary"></p>
            </form><br/><?php }?>
             
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
