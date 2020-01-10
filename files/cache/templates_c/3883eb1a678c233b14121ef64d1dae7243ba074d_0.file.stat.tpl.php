<?php
/* Smarty version 3.1.30, created on 2017-05-15 13:24:56
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/ads/stat.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591981f8e487e5_33106116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3883eb1a678c233b14121ef64d1dae7243ba074d' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/ads/stat.tpl',
      1 => 1493624542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591981f8e487e5_33106116 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</a> / Статистика рекламы <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['link']);?>
</div>
<div class="fon">
    <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
         
        <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
            <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
            <br/><?php }?>
            <span id="cat">
                <table class="table table-bordered table-striped table-condensed">
                    <tr>
                        <th style="text-align:center;"><b>IP</b></th>
                        <th style="text-align:center;"><b>Страна</b></th>
                        <th style="text-align:center;"><b>Город</b></th>
                        <th style="text-align:center;"><b>Браузер</b></th>
                        <th style="text-align:center;"><b>Регион</b></th>
                        <th style="text-align:center;"><b>Реферер</b></th>
                        <th style="text-align:center;"><b>Дата</b></th>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                        <tr>
                            <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['row']->value['ip'];?>
</td>
                            <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['row']->value['country'];?>
</td>
                            <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['row']->value['city'];?>
</td>
                            <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['row']->value['browser'];?>
</td>
                            <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['row']->value['region'];?>
</td>
                            <td style="text-align:center;"><a href="<?php echo $_smarty_tpl->tpl_vars['row']->value['referer'];?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['referer'],32);?>
</a></td>
                            <td style="text-align:center;"><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['time']);?>
</td>
                        </tr>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </table>
            </span>
            <br/>
             
            <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
                <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                <br/><?php }?>
            <?php } else { ?>
                <div class="alert alert-danger">Переходов ещё не было!</div>
            <?php }?> 
        </div><?php }
}
