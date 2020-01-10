<?php
/* Smarty version 3.1.30, created on 2017-12-11 12:42:27
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/ads/stat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2e5303ace064_54227821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94c5590f068a9e5bb974730c3ecbbd797b758896' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/ads/stat.tpl',
      1 => 1512985345,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2e5303ace064_54227821 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
 <code><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['link']);?>
</code>
    </div>
</div>

    <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
                <table class="table table-bordered">
                    <tr>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_ip'];?>
</th>
                        <th class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_country'];?>
</th>
                        <th class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_city'];?>
</th>
                        <th class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_browser'];?>
</th>
                        <th class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_region'];?>
</th>
                        <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_ref'];?>
</th>
                        <th class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_date'];?>
</th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value['ip'];?>
</td>
                            <td class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['row']->value['country'];?>
</td>
                            <td class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['row']->value['city'];?>
</td>
                            <td class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['row']->value['browser'];?>
</td>
                            <td class="visible-lg hidden-xs"><?php echo $_smarty_tpl->tpl_vars['row']->value['region'];?>
</td>
                            <td><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['referer'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['referer'],32);?>
</a></td>
                            <td class="visible-lg hidden-xs"><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['time']);?>
</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </table>
                  <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
                <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                <br/><?php }?>
            <?php } else { ?>
                <div class="alert alert-danger">Переходов ещё не было!</div>
            <?php }?> 
<?php }
}
