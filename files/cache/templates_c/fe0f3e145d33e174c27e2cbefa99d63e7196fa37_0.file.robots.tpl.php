<?php
/* Smarty version 3.1.30, created on 2017-05-11 22:26:31
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/sitemap/robots.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5914bae786c606_95036845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe0f3e145d33e174c27e2cbefa99d63e7196fa37' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/sitemap/robots.tpl',
      1 => 1494530789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5914bae786c606_95036845 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="title-block">
  <h3 class="title"> <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 </h3>
  <p class="title-description"> <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
 </p>
</div>
<section class="section">
    <div class="row">
        <div class="col-md-12">
            <div class="card sameheight-item items" data-exclude="xs,sm,lg">
                <div class="card-block">
             <div class="row">
								<div class="col-md-12">
    <form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/robots" method="post">
        <div class="form-group">
        <textarea name="text" class="form-control underlined" rows="15"/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea></div>
        <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_save'];?>
" class="btn btn-primary">
    </form>
<?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?><div class="alert alert-danger">Включёно сжатие HTML. Перед редактированием его рекомендуется <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting">выключить</a>.</div><?php }?> 
 </div>
    </div>
    </div>
 </div>
    </div>
    </div>
</section><?php }
}
