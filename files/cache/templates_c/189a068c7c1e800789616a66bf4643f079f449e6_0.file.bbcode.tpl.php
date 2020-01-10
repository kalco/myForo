<?php
/* Smarty version 3.1.30, created on 2017-09-29 19:32:12
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/bbcode.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ce839c6d7475_90607982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '189a068c7c1e800789616a66bf4643f079f449e6' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/bbcode.tpl',
      1 => 1506203282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59ce839c6d7475_90607982 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <table width="100%" border="2" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
        <tr><td align="center">[code]...[/code]</td><td>выделение кода</td></tr>
        <tr><td align="center">[url=http://site_url]Текст ссылки[/url]</td><td>ссылка</td></tr>
        <tr><td align="center">[b]...[/b]</td><td><b>выделить жирным</b></td></tr>
        <tr><td align="center">[i]...[/i]</td><td><i>выделить курсивом</i></td></tr>
        <tr><td align="center">[u]...[/u]</td><td><u>подчеркнутый</u></td></tr>
        <tr><td align="center">[s]...[/s]</td><td><strike>зачеркнутый</strike></td></tr>
        <tr><td align="center">[color=код цвета]...[/color]</td><td>выделить цветом</td></tr>
        <tr><td align="center">[quote]...[/quote]</td><td><blockquote>процитировать текст</blockquote></td></tr>
        <tr><td align="center">[size=размер шрифта]...[/size]</td><td>выбрать размер шрифта</td></tr>
        <tr><td align="center">[center]...[/center]</td><td><div style="text-align: center;">расположить по центру</div></td></tr>
        <tr><td align="center">[img]...[/img]</td><td>ссылка на картинку <img src="/files/nophoto.jpg" class="img-responsive" alt="image"/></td></tr>
    </table>
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
