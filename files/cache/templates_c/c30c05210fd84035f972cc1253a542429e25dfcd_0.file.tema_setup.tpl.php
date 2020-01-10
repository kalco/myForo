<?php
/* Smarty version 3.1.30, created on 2018-01-11 10:56:56
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/tema_setup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a5718c85c4b96_06614271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c30c05210fd84035f972cc1253a542429e25dfcd' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/tema_setup.tpl',
      1 => 1515610859,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a5718c85c4b96_06614271 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="head"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title2']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
<div class="fon">
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
        <p><font color="red">*</font>Title: <br/> <input type="text" class="form-control" name="name" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['tema']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
"/></p>
        <p><font color="red">*</font>
           Category:<br/>
            <select name="forum" class="form-control">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowr']->value, 'rowr');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rowr']->value) {
?>
                    <optgroup label="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['rowr']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
">   
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowr']->value, 'rowcat');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['rowcat']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['rowr']->value['id'] == $_smarty_tpl->tpl_vars['rowcat']->value['realid']) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['rowcat']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['rowcat']->value['id'] == $_smarty_tpl->tpl_vars['tema']->value['id_tema']) {?> selected="selected"<?php }?>><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['rowcat']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</option>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </optgroup>  
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
   
            </select>
        </p>
        <p><font color="red">*</font>Position: <br/> <input type="text" class="form-control" name="realid" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['tema']->value['realid'], ENT_QUOTES, 'UTF-8', true));?>
"/></p>
        <input type="submit" name="ok" value="Send" class="btn btn-primary">
    </form>
</div>
<div class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
"><i class="fa fa-angle-left"></i> Thread <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['tema']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</a></div> <?php }
}
