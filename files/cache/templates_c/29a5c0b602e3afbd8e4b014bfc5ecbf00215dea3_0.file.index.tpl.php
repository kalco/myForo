<?php
/* Smarty version 3.1.30, created on 2017-09-09 20:49:56
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b437d4dbc577_42840268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29a5c0b602e3afbd8e4b014bfc5ecbf00215dea3' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/index.tpl',
      1 => 1504982995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b437d4dbc577_42840268 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/function.counter.php';
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
if (!is_callable('smarty_modifier_bbcode')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.bbcode.php';
?>
<div class="col-sm-8">
<?php if ($_smarty_tpl->tpl_vars['rows']->value['id']) {?>
    <div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
">Форум</a> / <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>

        <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 100) {?>
            <span class="pull-right">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/add/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
">Создать раздел</a>
            </span>
        <?php }?>
    </div>
    <div class="fon">    
        <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
                <?php smarty_function_counter(array('name'=>'num','assign'=>'num'),$_smarty_tpl);?>

                <div class="menu">  
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['refid'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="fa fa-book"></i>
                        <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
<span class="pull-right"> <?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['row']->value['counttema']);?>
 / <?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['row']->value['countpost']);?>
</span></a>
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['text']) {?><div class="post-user"><?php echo nl2br(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['text']->value[$_smarty_tpl->tpl_vars['k']->value], ENT_QUOTES, 'UTF-8', true)));?>
</div><?php }?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 100) {?>
                    <div class="breadcrumb">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Параметры</a> / 
                        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Удалить</a> <?php if ($_smarty_tpl->tpl_vars['count']->value > 1) {?> / <?php }?> 
                        <?php if ($_smarty_tpl->tpl_vars['num']->value > 1) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/up/<?php echo $_smarty_tpl->tpl_vars['row']->value['refid'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"  title="Переместить вверх"><i class="fa fa-arrow-up"></i></a><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['num']->value != $_smarty_tpl->tpl_vars['count']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/down/<?php echo $_smarty_tpl->tpl_vars['row']->value['refid'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" title="Переместить вниз"><i class="fa fa-arrow-down"></i></a><?php }?>
                    </div>
                <?php }?>
                <div class="margin-top-10"></div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php } else { ?>
            <div class="alert alert-danger">Разделы ещё не созданы...</div>
        <?php }?>
    </div>    
<?php } else { ?>

  <div class="mod-head common-head">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>

        </h2>
    </div>
    <div class="fon">
        <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
                <?php smarty_function_counter(array('name'=>'num','assign'=>'num'),$_smarty_tpl);?>

                <div class="pod">
                    <div class="head">  
                        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
.<?php echo $_smarty_tpl->tpl_vars['row']->value['translate'];?>
"><i class="fa fa-book"></i>
                            <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
<span class="pull-right"> <?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['row']->value['counttema']);?>
 / <?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['row']->value['countpost']);?>
</span></a>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['text']) {?><div class="post-user"><?php echo nl2br(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['text']->value[$_smarty_tpl->tpl_vars['k']->value], ENT_QUOTES, 'UTF-8', true)));?>
</div><?php }?>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrows']->value, 'rows', false, 'ks');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ks']->value => $_smarty_tpl->tpl_vars['rows']->value) {
?>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['id'] == $_smarty_tpl->tpl_vars['rows']->value['refid']) {?>
                            <div class="fon menu">  
                                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
.<?php echo $_smarty_tpl->tpl_vars['rows']->value['translate'];?>
"><i class="fa fa-commenting"></i>
                                    <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['name']);?>
<span class="pull-right"> <?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['rows']->value['counttema']);?>
 / <?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['rows']->value['countpost']);?>
</span></a>
                                <?php if ($_smarty_tpl->tpl_vars['rows']->value['text']) {?><div class="post-user"><?php echo smarty_modifier_bbcode(nl2br(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['texts']->value[$_smarty_tpl->tpl_vars['ks']->value], ENT_QUOTES, 'UTF-8', true))));?>
</div><?php }?>
                            </div>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 100) {?>
                    <div class="breadcrumb">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Параметры</a> / 
                        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Удалить</a> <?php if ($_smarty_tpl->tpl_vars['count']->value > 1) {?> / <?php }?> 
                        <?php if ($_smarty_tpl->tpl_vars['num']->value > 1) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/up/0/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"  title="Переместить вверх"><i class="fa fa-arrow-up"></i></a><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['num']->value != $_smarty_tpl->tpl_vars['count']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/down/0/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" title="Переместить вниз"><i class="fa fa-arrow-down"></i></a><?php }?>
                    </div>
                <?php }?>
                <div class="margin-top-10"></div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php } else { ?>
            <div class="alert alert-danger">Разделы ещё не созданы...</div>
        <?php }?>
    </div>
<?php }?>
   </div><?php }
}
