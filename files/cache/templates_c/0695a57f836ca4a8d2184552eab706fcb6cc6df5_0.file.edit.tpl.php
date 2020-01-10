<?php
/* Smarty version 3.1.30, created on 2017-05-06 20:37:34
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/templates/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590e09decc78f4_10950833',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0695a57f836ca4a8d2184552eab706fcb6cc6df5' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/templates/edit.tpl',
      1 => 1493624542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590e09decc78f4_10950833 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/view/<?php echo $_smarty_tpl->tpl_vars['skin']->value[0];?>
"><?php echo $_smarty_tpl->tpl_vars['skin']->value[0];?>
</a> / ../style/<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
</div>
<div class="fon">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
            <?php } else { ?>
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
                
                    .CodeMirror {border-top: 1px solid #888; border-bottom: 1px solid #888; border: 1px solid #888;}
                
            </style>	
        <?php }?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" class="fon">
            <textarea name="text" id="code" class="form-control" rows="25"/><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['template']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea><br/>
            <input type="submit" name="ok" value="Сохранить шаблон" class="btn btn-primary"> <br/><br/>
        </form>
        <div class="alert alert-danger">Внимание: редактирование переменных, заключенных в круглые кавычки <b>{}</b>, приведет к неработосбособности сайта!</div>                
        <?php if ($_smarty_tpl->tpl_vars['setup']->value['highlight'] == 1) {?> <?php if ($_smarty_tpl->tpl_vars['css_style']->value < 3) {?>
                <?php echo '<script'; ?>
>
                    
                        var mixedMode = {
                            name: "htmlmixed",
                            scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
                                    mode: null},
                                {matches: /(text|application)\/(x-)?vb(a|script)/i,
                                    mode: "text/x-scss"}]
                        };
                        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {mode: mixedMode, tabMode: "indent"});
                      
                <?php echo '</script'; ?>
>	
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['css_style']->value == 3) {?>
                <?php echo '<script'; ?>
>
                    
                        var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
                            lineNumbers: true,
                            matchBrackets: true,
                            mode: "text/x-scss"
                        });
                      
                <?php echo '</script'; ?>
>  
        <?php }
}?>  
    <?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?><div class="alert alert-danger">Включёно сжатие HTML. Перед редактированием его рекомендуется <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting">выключить</a>.</div><?php }?>                 
<?php }?>  
</div>   <?php }
}
