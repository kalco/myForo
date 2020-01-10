<?php
/* Smarty version 3.1.30, created on 2018-02-11 14:12:58
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a80415aa745c5_61717890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5998c2fcde2f95cbd5427548f2bbfe348588fdc5' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/add.tpl',
      1 => 1518354774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/captcha.tpl' => 1,
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a80415aa745c5_61717890 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="panel">
        <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
        <div class="panel-body clearfix">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>    
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="form-horizontal">
             <div class="form-group">
                      <label class="col-sm-3 control-label">Title:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="name" value="<?php echo $_POST['name'];?>
" type="text">
    							    </div>
                    </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Category:</label>
                        <div class="col-sm-9">
    									     <select class="form-control" name="cat" >
    				 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cat']->value, 'cats');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cats']->value) {
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['cats']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['cats']->value['id'] == smarty_modifier_esc($_smarty_tpl->tpl_vars['cats']->value['name'])) {?> selected="selected"<?php }?>><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['cats']->value['name']);?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
   
            </select>
                        </div>
                      </div>
        <div class="form-group">
                   <label class="col-sm-2 control-label">Message:</label>
                   <input name="text" type="hidden">
                  <div class="col-sm-10">
                  	<div id="editor-container"></div>
                     		    </div>
                    </div>
        <?php if ($_smarty_tpl->tpl_vars['setup']->value['captcha_add_theme'] == 1) {?>
            <?php $_smarty_tpl->_subTemplateRender("file:system/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php }?>
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_file');?>

        <input type="submit" name="ok" value="Send" class="btn btn-sm btn-primary">
    </form> 
</div>
</div>

  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
