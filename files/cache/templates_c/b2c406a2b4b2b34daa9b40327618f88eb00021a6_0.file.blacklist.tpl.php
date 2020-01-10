<?php
/* Smarty version 3.1.30, created on 2018-01-10 20:27:38
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/blacklist.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a564d0a362cf7_10299994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2c406a2b4b2b34daa9b40327618f88eb00021a6' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/blacklist.tpl',
      1 => 1515605044,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a564d0a362cf7_10299994 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>
<div class="panel">
                      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
                         <div class="panel-body">
                             <div class="container-fluid">
                  <div class="row">
    <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
         <div class="row" id="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
             <div class="col-sm-2 col-xs-3 loop_album dataitem odd dataitemlast">						               
                                          <div class="album_wrapper bevelbottom">              	
                                              <div class="image">									
                                                  										
                                                        <img class="img-responsive img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['row']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
/view-<?php echo $_smarty_tpl->tpl_vars['row']->value['avatar'];
} else { ?>nophoto-view.jpg<?php }?>" alt="" border="0">									
                                                                
                                              </div>  					 	 
                                          </div>
                                      </div>
                         <div class="col-sm-7 col-xs-9 ">
                               <h5><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</a></h5>    
                               <small><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['time']);?>
 </small>
                 </div>
                <div class="col-sm-3 col-xs-12 text-right">	
                <a class="btn btn-sm btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/blacklist/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['user_id'];?>
" title="" data-toggle="tooltip" data-placement="top" data-original-title="Delete"> <span class="fa fa-trash-o"></span> </a>  
                </div>
            
             </div>
             <hr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
            <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
        <?php }?>    
    <?php } else { ?>
        <div class="alert alert-danger">The black list is empty ...</div>
    <?php }?>
    </div>
</div>

    </div>
</div>

  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_profile');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div>
<?php }
}
