<?php
/* Smarty version 3.1.30, created on 2017-12-04 21:53:52
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/templates/email_edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a25b5e0251876_30083463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fd5d1af7b95b968988166513d97c6f5e861a307' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/templates/email_edit.tpl',
      1 => 1512420830,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a25b5e0251876_30083463 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
       <code><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</code>
    </div>
</div>

    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post">
        <textarea name="text" id="code" rows="25" class="form-control"/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea><br/>
        <input type="submit" name="ok" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_save'];?>
" class="btn btn-primary">
    </form>
    <?php if ($_smarty_tpl->tpl_vars['setup']->value['highlight'] == 1) {?>
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/codemirror/lib/codemirror.css">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/codemirror/lib/codemirror.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/codemirror/mode/xml/xml.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/codemirror/mode/javascript/javascript.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/codemirror/mode/css/css.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/codemirror/mode/vbscript/vbscript.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/codemirror/mode/htmlmixed/htmlmixed.js"><?php echo '</script'; ?>
>	
        <style type="text/css">
            
                .CodeMirror {border: 1px solid #ccc;}
            
        </style>    
        <?php echo '<script'; ?>
>
            
                var mixedMode = {
                    name: "htmlmixed",
                    scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
                            mode: null},
                        {matches: /(text|application)\/(x-)?vb(a|script)/i,
                            mode: "text/x-scss"}]
                };
                var editor1 = CodeMirror.fromTextArea(document.getElementById("code"), {mode: mixedMode, tabMode: "indent"});
              

        <?php echo '</script'; ?>
><?php }?>         
<?php }
}
