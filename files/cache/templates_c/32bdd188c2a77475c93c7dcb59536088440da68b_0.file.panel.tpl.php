<?php
/* Smarty version 3.1.30, created on 2017-12-06 21:02:42
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/panel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a284ce2120337_43423032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32bdd188c2a77475c93c7dcb59536088440da68b' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/panel.tpl',
      1 => 1512590560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a284ce2120337_43423032 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'add_comments', null, null);
?>

<div class="form-group">
                  <label class="control-label">Причина бана::</label>
                     <input name="text" class="form-control" id="bbcode" value="<?php echo htmlspecialchars($_POST['text'], ENT_QUOTES, 'UTF-8', true);?>
" type="text" required />
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
        <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] && $_SESSION['device'] == 'web') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/smiles/my">Мои смайлы</a> | 
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/smiles">Смайлы</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/bbcode">BB коды</a>
    </div> 
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'edit_comments', null, null);
?>


    <textarea name="text"<?php if ($_SESSION['device'] == 'web') {?> id="summernote" rows="15"<?php }?> class="form-control"><?php echo htmlspecialchars(smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['text']), ENT_QUOTES, 'UTF-8', true);?>
</textarea>
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
        <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] && $_SESSION['device'] == 'web') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/smiles/my">Мои смайлы</a> | 
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/smiles">Смайлы</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/bbcode">BB коды</a>
    </div> 
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'add_file', null, null);
?>

    <p>Прикрепить файлы: <br/> <input type="file" name="file[]" multiple="true" class="form-control"/></p>
    <p>
        Допустимое кол-во файлов: <em><?php echo $_smarty_tpl->tpl_vars['setup']->value['filecount_forum'];?>
</em><br/>
        Максимальный размер 1 файла: <em><?php echo $_smarty_tpl->tpl_vars['setup']->value['filesize_forum'];?>
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
        <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] && $_SESSION['device'] == 'web') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/smiles/my">Мои смайлы</a> | 
        <?php }?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/smiles">Смайлы</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/bbcode">BB коды</a>
    </div> 
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
