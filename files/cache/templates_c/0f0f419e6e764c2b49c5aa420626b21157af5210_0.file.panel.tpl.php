<?php
/* Smarty version 3.1.30, created on 2018-02-11 14:19:02
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/system/panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8042c6c9e9f3_46024421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f0f419e6e764c2b49c5aa420626b21157af5210' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/system/panel.tpl',
      1 => 1518355141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a8042c6c9e9f3_46024421 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'add_comments', null, null);
?>

    <?php if ($_smarty_tpl->tpl_vars['smile']->value && $_SESSION['device'] == 'web') {?>
        <div class="fon menu">    
            <div id="emoticons">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['smile']->value, 'onesmile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['onesmile']->value) {
?> 
                    <a href="javascript:void(0);" title="<?php echo htmlspecialchars(smarty_modifier_esc($_smarty_tpl->tpl_vars['onesmile']->value['code']), ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/smiles/<?php echo $_smarty_tpl->tpl_vars['onesmile']->value['photo'];?>
" /></a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>               
    <?php }?>
    <div class="menu">

        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/smiles">Smiles</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/bbcode">BB codes</a>
    </div> 
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'edit_comments', null, null);
?>

                     <input name="text" type="hidden">
                  	<div id="editor-container"><?php echo htmlspecialchars(smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['text']), ENT_QUOTES, 'UTF-8', true);?>
</div>
    <?php if ($_smarty_tpl->tpl_vars['smile']->value && $_SESSION['device'] == 'web') {?>
        <div class="fon menu">    
            <div id="emoticons">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['smile']->value, 'onesmile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['onesmile']->value) {
?> 
                    <a href="javascript:void(0);" title="<?php echo htmlspecialchars(smarty_modifier_esc($_smarty_tpl->tpl_vars['onesmile']->value['code']), ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/smiles/<?php echo $_smarty_tpl->tpl_vars['onesmile']->value['photo'];?>
" /></a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>               
    <?php }?>
    <div class="menu">

        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/smiles">Smiles</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/bbcode">BB codes</a>
    </div> 
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'add_file', null, null);
?>

    <p>File: <br/> <input type="file" name="file[]" multiple="true" class="form-control"/></p>
    <p>
        Number of files: <em><?php echo $_smarty_tpl->tpl_vars['setup']->value['filecount_forum'];?>
</em><br/>
       Max size of 1 file: <em><?php echo $_smarty_tpl->tpl_vars['setup']->value['filesize_forum'];?>
Mb</em>
    </p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'smile', null, null);
?>

    <?php if ($_smarty_tpl->tpl_vars['smile']->value && $_SESSION['device'] == 'web') {?>
        <div class="fon menu">    
            <div id="emoticons">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['smile']->value, 'onesmile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['onesmile']->value) {
?> 
                    <a href="javascript:void(0);" title="<?php echo htmlspecialchars(smarty_modifier_esc($_smarty_tpl->tpl_vars['onesmile']->value['code']), ENT_QUOTES, 'UTF-8', true);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/smiles/<?php echo $_smarty_tpl->tpl_vars['onesmile']->value['photo'];?>
" /></a>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
        </div>               
    <?php }?>
    <div class="menu">
        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/smiles">Smiles</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/bbcode">BB codes</a>
    </div> 
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
