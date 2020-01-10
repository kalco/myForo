<?php
/* Smarty version 3.1.30, created on 2017-11-18 13:59:24
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a102eac070123_63582719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9487622774c27a11402dbe804fa5a72f64f1901f' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/footer.tpl',
      1 => 1511009960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/modals.tpl' => 1,
  ),
),false)) {
function content_5a102eac070123_63582719 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
		
<?php $_smarty_tpl->_subTemplateRender("file:admin/modals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'helper_info');?>


				</div>
				</div>
				</div>
	<div class="footer clearfix">
			<div class="footer-inner">
			 Created by <a href="http://xplos1ve.info" target="_blank"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['copy']);?>
</a> | <span style="color:green"><?php echo $_smarty_tpl->tpl_vars['times_page']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['sec'];?>
</span>
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
	</div>
	<?php if ($_SESSION['device'] == 'web') {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/summernote/summernote.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/summernote/summernote.css" type="text/css" />
<?php }?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/highlight/styles/default.css">
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/highlight/highlight.pack.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/plugins/jquery-ui/jquery-ui-1.11.2.custom.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/js/functions.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/plugins/highcharts/highcharts.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/plugins/highcharts/modules/exporting.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/plugins/bootstrap-switch/bootstrap-switch.min.js"><?php echo '</script'; ?>
>
 
		<?php echo '<script'; ?>
>
			jQuery(document).ready(function() {
				Main.init();
			});
			
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
					
     var url = window.location;
    $('ul.main-navigation-menu a').filter(function() {
      return this.href == url;
    }).parent().addClass('active');

    // for treeview
    $('ul.sub-menu a').filter(function() {
      return this.href == url;
    }).closest('.open').addClass('active');
	
		<?php echo '</script'; ?>
>
</body>
</html><?php }
}
