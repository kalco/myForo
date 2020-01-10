<?php
/* Smarty version 3.1.30, created on 2017-05-07 16:06:16
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/clear.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590f1bc8356817_04171253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb9438601703b8b782439cee2bb13eaf51bf6ec' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/clear.tpl',
      1 => 1493624542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590f1bc8356817_04171253 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="title-block">
  <h3 class="title"> <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 </h3>
  <p class="title-description"> Создавайте и управляйте платежными ссылками </p>
</div>
<section class="section">
<div class="row">
    <div class="col-md-12">
        <div class="card sameheight-item items" data-exclude="xs,sm,lg">
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Вы уверены, что хотите очистить логи?</div>
        <input type="submit" name="ok" value="Да" class="btn btn-primary"> <input type="submit" name="close" value="Отменить" class="btn btn-primary">
    </form>
    </div>
</div>
</div>
</section><?php }
}
