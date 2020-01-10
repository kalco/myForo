<?php
/* Smarty version 3.1.30, created on 2018-01-06 21:32:22
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a513256b61158_16742224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a6cb563ace89a804fdc6cd9d3c930659d9f76ef' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/index.tpl',
      1 => 1515270741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a513256b61158_16742224 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>
<div class="panel">
                      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['lang']->value['all_thread'];?>
</div>
                         <div class="panel-body">
                                 <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'rows', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['rows']->value) {
?>
         <div class="row">
             <div class="col-sm-3 hidden-xs">
                <span class="label label-default padding-15 "> <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['starts']->value[$_smarty_tpl->tpl_vars['k']->value];?>
#<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_post_last'];?>
" title="Last post"><?php echo number_format($_smarty_tpl->tpl_vars['rows']->value['countpost'],0);?>
 <i class="fa fa-comments-o"></i></a></span>
                  <span class="label label-default padding-15"><?php echo number_format($_smarty_tpl->tpl_vars['rows']->value['views'],0);?>
 <i class="fa fa-eye"></i></span>
                 </div>
 <div class="col-sm-9">
     <h4><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['rows']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</a> </h4>
               <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['rows']->value['namecat'];?>
</span><span><?php if ($_smarty_tpl->tpl_vars['rows']->value['up'] == 1) {?> <i class="fa fa-thumb-tack"></i><?php }?> <?php if ($_smarty_tpl->tpl_vars['rows']->value['closed'] == 1) {?> <i class="fa fa-lock"></i><?php }?></span>

               <small><span class="pull-right text-muted"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user_last'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['rows']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</a> <?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['time']);?>
</span></small>
 </div>
            </div>
       <hr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php } else { ?>
    
        <div class="alert alert-danger text-center margin-t-15">No threads yet!</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
        <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
    <?php }?> 
                                 </div>      
  </div>
 <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_home');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
