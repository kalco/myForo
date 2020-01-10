<?php
/* Smarty version 3.1.30, created on 2017-10-07 09:26:41
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/forum/category.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d881b1132cd0_53664248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '292bd7f00f8553e81208e10c41ff656bf7e4bed1' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/forum/category.tpl',
      1 => 1507361199,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d881b1132cd0_53664248 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/function.counter.php';
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
?>

<?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
<ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowcat']->value, 'row', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
                <?php smarty_function_counter(array('name'=>'num','assign'=>'num'),$_smarty_tpl);?>

                <li class="list-group-item inactive">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
.<?php echo $_smarty_tpl->tpl_vars['row']->value['translate'];?>
">
                        <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
 <span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['row']->value['countthread']);?>
</span></a>
                </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
                    </ul>
                     <?php } else { ?>
           <div class="text-center margin-t-15 padding-b-5">No categories</div>
        <?php }
}
}
