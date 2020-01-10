<?php
/* Smarty version 3.1.30, created on 2017-10-08 11:43:26
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d9f33e894528_44300098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a716f10157078176dba2416a5b106a53cb6a3ad' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/index.tpl',
      1 => 1507455804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59d9f33e894528_44300098 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>

 <div class="panel">
                      <div class="panel-heading"><h4><?php echo $_smarty_tpl->tpl_vars['lang']->value['all_thread'];?>
</h4></div>
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
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['starts']->value[$_smarty_tpl->tpl_vars['k']->value];?>
#<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_post_last'];?>
" title="Last post"><?php echo $_smarty_tpl->tpl_vars['rows']->value['countpost'];?>
 <i class="fa fa-comments-o"></i></a></span>
                  <span class="label label-default padding-15"><?php echo $_smarty_tpl->tpl_vars['rows']->value['views'];?>
 <i class="fa fa-eye"></i></span>
                 </div>
 <div class="col-sm-9">
     <h4><?php if ($_smarty_tpl->tpl_vars['rows']->value['up'] == 1) {?><i class="fa fa-thumb-tack"></i><?php }?> <?php if ($_smarty_tpl->tpl_vars['rows']->value['closed'] == 1) {?> <i class="fa fa-lock"></i><?php }?> <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['rows']->value['name'], ENT_QUOTES, 'UTF-8', true));?>
</a> </h4>
               <span class="label label-info"><?php echo $_smarty_tpl->tpl_vars['rows']->value['namecat'];?>
 </span>

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
        <div class="text-center margin-t-15">Тем в этом разделе нет...</div>
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
