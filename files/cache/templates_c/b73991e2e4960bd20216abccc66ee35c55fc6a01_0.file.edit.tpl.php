<?php
/* Smarty version 3.1.30, created on 2017-07-02 13:49:40
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/sitemap/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5958cfc4a6ec40_42477615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b73991e2e4960bd20216abccc66ee35c55fc6a01' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/sitemap/edit.tpl',
      1 => 1498992576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5958cfc4a6ec40_42477615 (Smarty_Internal_Template $_smarty_tpl) {
?>
					<div class="row">
						<div class="col-sm-12">
					
							<div class="page-header"> <h3> <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 </h3>
							<p class="title-description"> <?php echo $_smarty_tpl->tpl_vars['file']->value;?>
 </p>
							</div>
						</div>
					</div> 
<div class="row">
						<div class="col-sm-12">
							<!-- start: FORM WIZARD PANEL -->
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="icon-external-link-sign"></i>
									Управление файлами экспорта
								</div>
								<p>&nbsp;</p>
								<div class="panel-body">
									<div id="export_block"><div class="js-modal-text-l"><div class="alert alert-info"><i class="icon-info-sign"></i> Не найдено ни одного файла экспорта!</div></div></div>
								</div>
							</div>
							<!-- end: FORM WIZARD PANEL -->
						</div>
					</div>

<div class="fon">        
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger">
            <button data-dismiss="alert" class="close close-sm" type="button"><i class="fa fa-times"></i></button><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php } else { ?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/edit/<?php echo $_smarty_tpl->tpl_vars['file']->value;?>
" method="post" class="fon">
            <textarea class="form-control" rows="25" name="text"/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea><br/>
            <input type="submit" name="ok" value="Сохранить" class="btn btn-primary"><br/><br/>
        </form>	
    <?php }?> 
<?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?><div class="alert alert-danger">Включёно сжатие HTML. Перед редактированием его рекомендуется <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting">выключить</a>.</div><?php }?> 
</div><?php }
}
