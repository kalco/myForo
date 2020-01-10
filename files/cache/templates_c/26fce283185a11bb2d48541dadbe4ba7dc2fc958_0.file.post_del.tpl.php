<?php
/* Smarty version 3.1.30, created on 2018-01-10 21:45:41
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/post_del.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a565f55de11d9_29517320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26fce283185a11bb2d48541dadbe4ba7dc2fc958' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/post_del.tpl',
      1 => 1515609940,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a565f55de11d9_29517320 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <?php echo nl2br(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8', true)));?>

<form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Are you sure you want to delete this post?</div>
        <input type="submit" name="ok" value="Yes" class="btn btn-primary"> <input type="submit" name="close" value="No" class="btn btn-primary">
    </form>
</div>
<div class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['starts']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="fa fa-angle-left"></i> Thread <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['tema']->value['name']);?>
</a></div> <?php }
}
