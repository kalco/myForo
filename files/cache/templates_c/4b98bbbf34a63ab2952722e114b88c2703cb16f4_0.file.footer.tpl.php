<?php
/* Smarty version 3.1.30, created on 2017-09-02 10:09:38
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aa5932d30734_46539932',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b98bbbf34a63ab2952722e114b88c2703cb16f4' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/footer.tpl',
      1 => 1493637119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59aa5932d30734_46539932 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_bbcode')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.bbcode.php';
if ($_smarty_tpl->tpl_vars['adsfoot']->value) {?> 
    <div class="margin-top-10 list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adsfoot']->value, 'foot', false, 'kfoot');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kfoot']->value => $_smarty_tpl->tpl_vars['foot']->value) {
?>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['foot']->value['id'];?>
"><?php echo smarty_modifier_bbcode(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['foot']->value['text'], ENT_QUOTES, 'UTF-8', true)));?>
</a></p>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
<?php }?>
				            <?php if ($_SERVER['REQUEST_URI'] == '/' && $_smarty_tpl->tpl_vars['adsheadindex']->value) {?> 
                <div class="list hidden-xs hidden-sm">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adsheadindex']->value, 'headindex', false, 'kheadindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kheadindex']->value => $_smarty_tpl->tpl_vars['headindex']->value) {
?>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['headindex']->value['id'];?>
"><?php echo smarty_modifier_bbcode(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['headindex']->value['text'], ENT_QUOTES, 'UTF-8', true)));?>
</a></p>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            <?php }?>

            <?php if ($_SERVER['REQUEST_URI'] != '/' && $_smarty_tpl->tpl_vars['adsheadnoindex']->value) {?> 
                <div class="list hidden-xs hidden-sm">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adsheadnoindex']->value, 'headnoindex', false, 'kheadnoindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kheadnoindex']->value => $_smarty_tpl->tpl_vars['headnoindex']->value) {
?>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['headnoindex']->value['id'];?>
"><?php echo smarty_modifier_bbcode(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['headnoindex']->value['text'], ENT_QUOTES, 'UTF-8', true)));?>
</a></p>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['adshead']->value) {?> 
                <div class="list hidden-xs hidden-sm">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adshead']->value, 'head', false, 'khead');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['khead']->value => $_smarty_tpl->tpl_vars['head']->value) {
?>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['head']->value['id'];?>
"><?php echo smarty_modifier_bbcode(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['head']->value['text'], ENT_QUOTES, 'UTF-8', true)));?>
</a></p>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 

                    <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['newnotice']->value > 0) {?><div class="alert alert-info"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/notice"><i class="fa fa-bell"></i> Уведомления: <?php echo $_smarty_tpl->tpl_vars['newnotice']->value;?>
</a></div><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['newmail']->value > 0) {?><div class="alert alert-warning"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail"><i class="fa fa-envelope"></i> Сообщения: <?php echo $_smarty_tpl->tpl_vars['newmail']->value;?>
</a></div><?php }?>
                    <?php }?>
                    <?php if ($_SERVER['REQUEST_URI'] == '/' && $_smarty_tpl->tpl_vars['adsheadindex']->value) {?> 
                        <div class="list visible-xs visible-sm">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adsheadindex']->value, 'headindex', false, 'kheadindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kheadindex']->value => $_smarty_tpl->tpl_vars['headindex']->value) {
?>
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['headindex']->value['id'];?>
"><?php echo smarty_modifier_bbcode(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['headindex']->value['text'], ENT_QUOTES, 'UTF-8', true)));?>
</a></p>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    <?php }?>

                    <?php if ($_SERVER['REQUEST_URI'] != '/' && $_smarty_tpl->tpl_vars['adsheadnoindex']->value) {?> 
                        <div class="list visible-xs visible-sm">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adsheadnoindex']->value, 'headnoindex', false, 'kheadnoindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kheadnoindex']->value => $_smarty_tpl->tpl_vars['headnoindex']->value) {
?>
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['headnoindex']->value['id'];?>
"><?php echo smarty_modifier_bbcode(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['headnoindex']->value['text'], ENT_QUOTES, 'UTF-8', true)));?>
</a></p>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['adshead']->value) {?> 
                        <div class="list visible-xs visible-sm">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adshead']->value, 'head', false, 'khead');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['khead']->value => $_smarty_tpl->tpl_vars['head']->value) {
?>
                                <p><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['head']->value['id'];?>
"><?php echo smarty_modifier_bbcode(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['head']->value['text'], ENT_QUOTES, 'UTF-8', true)));?>
</a></p>
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
			</div>

<div class="aw-footer-wrap">
	<div class="aw-footer">
				<div class="row">
			Created by : <a href="http://xplos1ve.info" target="_blank"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['copy']);?>
</a>
<?php echo $_smarty_tpl->tpl_vars['times_page']->value;?>
 sec.		</div>
	</div>
	 <?php echo $_smarty_tpl->tpl_vars['setup']->value['counters'];?>

</div>
	 <?php if ($_SERVER['REQUEST_URI'] != '/' && $_smarty_tpl->tpl_vars['user']->value['id']) {?>
        <a class="aw-back-top" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/bookmark/add?name=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&url=<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_SERVER['REQUEST_URI'];?>
"><i class="fa fa-star-half-empty"></i></a>
        
    <?php }
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php if ($_SESSION['device'] == 'web') {?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/js/markitup/jquery.markitup.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/js/markitup/sets/default/set.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/js/markitup/skins/markitup/style.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/js/markitup/bbcode/style.css" type="text/css" />
<?php }?>
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
</body>
</html><?php }
}
