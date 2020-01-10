<?php
/* Smarty version 3.1.30, created on 2017-12-08 16:32:41
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/sitemap/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2a94798e6178_47219863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80cdeb509f7a82ecdedf61754e406817a7ea315d' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/sitemap/edit.tpl',
      1 => 1512739959,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2a94798e6178_47219863 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
     	<code> <?php echo $_smarty_tpl->tpl_vars['file']->value;?>
 </code>
    </div>
</div>

    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger">
            <button data-dismiss="alert" class="close close-sm" type="button"><i class="fa fa-times"></i></button><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php } else { ?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/edit/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" method="post" class="form-horizontal">
        	 <div class="form-group">
            <textarea class="form-control" rows="20" name="text"/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
            </div>
            <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
" class="btn btn-primary">
        </form>	
    <?php }?> 
<?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?><div class="alert alert-danger">Включёно сжатие HTML. Перед редактированием его рекомендуется <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting">выключить</a>.</div><?php }?> 
<?php }
}
