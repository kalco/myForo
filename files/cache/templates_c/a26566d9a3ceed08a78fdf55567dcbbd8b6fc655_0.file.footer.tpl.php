<?php
/* Smarty version 3.1.30, created on 2017-10-07 17:20:50
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d8f0d29b5e65_78482612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a26566d9a3ceed08a78fdf55567dcbbd8b6fc655' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/footer.tpl',
      1 => 1507361119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d8f0d29b5e65_78482612 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>

 
       <div class="col-sm-12">
      
    <?php if ($_smarty_tpl->tpl_vars['adsfoot']->value) {?> 
    <div class="margin-t-15 margin-b-15 list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adsfoot']->value, 'foot', false, 'kfoot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kfoot']->value => $_smarty_tpl->tpl_vars['foot']->value) {
?>
           <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['foot']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/banners/<?php echo $_smarty_tpl->tpl_vars['foot']->value['photo'];?>
" class="img-responsive" alt=""/></a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
<?php }?>
      </div>
    </div> 
      </div> 
	<nav id="footer" class="navbar navbar-default">
  <div class="container">
      <div class="row">
          <div class="col-sm-4">
             <a href="http://xplos1ve.info"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['copy']);?>
</a> | <span class="label label-primary"><?php echo $_smarty_tpl->tpl_vars['times_page']->value;?>
 sec.</span>
          </div>
          <div class="col-md-8 text-right text-xs-left">
             <?php if ($_smarty_tpl->tpl_vars['pages']->value) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'rows', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['rows']->value) {
?>
              <a style ="padding-right:10px;" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/pages/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['translate'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['name']);?>
</a>
                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                     
	<?php }?>
       </div>
      </div>  
  </div>
</nav>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/js/app.js"><?php echo '</script'; ?>
>
<?php if ($_SESSION['device'] == 'web') {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/summernote/summernote.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/summernote/summernote.css" type="text/css" />
<?php }?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/css/animate.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/highlight/styles/default.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/highlight/highlight.pack.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/vcms.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
		
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', '<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['counters']);?>
', 'auto');
  ga('send', 'pageview');

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
