<?php
/* Smarty version 3.1.30, created on 2018-07-25 21:38:13
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/user/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b58d1a554cee7_41736173',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08687f110b1064149ca190de3bd6e5b6b2d6131d' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/user/index.tpl',
      1 => 1532547490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5b58d1a554cee7_41736173 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'level', null, null);
?>

    <?php if ($_smarty_tpl->tpl_vars['row']->value['level'] == 90) {?>
    <span class="label label-primary">Moderator</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['level'] == 100) {?>
        <span class="label label-success">Administrator</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['level'] == 1) {?>
       <span class="label label-default">Member</span>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

        <div class="panel">
        <div class="panel-body clearfix">
<div id="prof_topimg" class="bg-default relative margin-b-15">
     <div id="prof_leftimg">

                   <div class="profimg round_img online-indicator">
          <img class="img-thumbnail img-responsive" <?php if ($_smarty_tpl->tpl_vars['online']->value) {?>style="border: 2px solid #4B8232" <?php } else { ?>style="border: 2px solid #e74c3c" <?php }?>src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['row']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['avatar'];
} else { ?>nophoto-view.jpg<?php }?>" alt="" border="0" />  
  <?php if ($_smarty_tpl->tpl_vars['online']->value) {?>
    <div class="in-bounce1-online"></div>
    <div class="in-bounce2-online"></div>
    <?php } else { ?>
    <div class="in-bounce1-offline"></div>
    <div class="in-bounce2-offline"></div>
  <?php }?>
                 </div>
                    </div>
                    
                      <div id="prof_userdata">
                             <div class="vt_prof_name"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
                             <div class="vt_prof_from">
                             <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'level');?>

<?php if ($_smarty_tpl->tpl_vars['row']->value['ban'] == 1) {?>
    [Banner until: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['bantime'],"d.m.o, H:i");?>

   <?php if ($_smarty_tpl->tpl_vars['row']->value['ban'] == 1) {
echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['banprichina'], ENT_QUOTES, 'UTF-8', true));
}?>]
<?php }?></div>
                         </div>  
                 
                     <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] && $_smarty_tpl->tpl_vars['row']->value['id'] != $_smarty_tpl->tpl_vars['user']->value['id']) {?>
                         <div id="profile_btns" class="margin-b-15">
                         	<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-sm btn-default"><i class="fa fa-envelope"></i> Send message</a>
                         	<?php if ($_smarty_tpl->tpl_vars['friends']->value == 0) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/friends/add/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Add to friends</a>
						<?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/friends/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-sm btn-default"><i class="fa fa-minus"></i> Remove from friends</a>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['blacklist']->value == 0) {?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/blacklist/add/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Add to blacklist</a>
               <?php } else { ?>
              <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/blacklist/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-sm btn-default"><i class="fa fa-minus"></i> Remove from blacklist</a>
                <?php }?>
                  </div>
            <?php }?>
</div>
</div>
</div>
 <?php if ($_smarty_tpl->tpl_vars['row']->value['about']) {?>
<div class="panel">
        <div class="panel-heading">About Me</div>
        <div class="panel-body clearfix">
<p><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['about'], ENT_QUOTES, 'UTF-8', true));?>
 </p>
</div>
</div>
  <?php }?>   
    <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_personal');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
