<?php
/* Smarty version 3.1.30, created on 2017-09-09 20:24:53
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b431f5e0b9b3_89883183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3b8f718b0a67ab71f47d50e0a84595752b3982a' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/index.tpl',
      1 => 1493623899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b431f5e0b9b3_89883183 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'level', null, null);
?>

    <?php if ($_smarty_tpl->tpl_vars['row']->value['level'] == 10) {?>
        [младший модератор]
    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['level'] == 20) {?>
        [модератор]
    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['level'] == 30) {?>
        [старший модератор]
    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['level'] == 40) {?>
        [супер модератор]
    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['level'] == 50) {?>
        [заместитель администратора]
    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['level'] == 100) {?>
        [Админ]
    <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['level'] == 1) {?>
        [Member]
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<div class="col-sm-12 <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] && $_smarty_tpl->tpl_vars['row']->value['id'] != $_smarty_tpl->tpl_vars['user']->value['id']) {?>col-md-9<?php } else { ?>col-md-12<?php }?> aw-main-content">
   <div class=" aw-mod aw-user-detail-box">
       <div class="mod-head">
           <img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['row']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/view-<?php echo $_smarty_tpl->tpl_vars['row']->value['avatar'];
} else { ?>nophoto-view.jpg<?php }?>"/>
           <h1><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h1>
<p class="text-color-999"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'level');?>

<?php if ($_smarty_tpl->tpl_vars['row']->value['ban'] == 1) {?>
    [Banner until: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['bantime'],"d.m.o, H:i");?>

   <?php if ($_smarty_tpl->tpl_vars['row']->value['ban'] == 1) {
echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['banprichina'], ENT_QUOTES, 'UTF-8', true));
}?>]
<?php }?></p>
<?php if ($_smarty_tpl->tpl_vars['row']->value['firstname']) {?><span>Имя: <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['firstname'], ENT_QUOTES, 'UTF-8', true));?>
</span><?php }
if ($_smarty_tpl->tpl_vars['row']->value['lastname']) {?><span>Фамилия: <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['lastname'], ENT_QUOTES, 'UTF-8', true));?>
</span><?php }?>
<span>Last Visit: <?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['date_last']);?>
</span>
<span>Joined: <?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['date_reg']);?>
</span>
<?php if ($_smarty_tpl->tpl_vars['row']->value['about']) {?><span>О себе: <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['about'], ENT_QUOTES, 'UTF-8', true));?>
</span><?php }
if ($_smarty_tpl->tpl_vars['row']->value['city']) {?><span>Город: <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['city'], ENT_QUOTES, 'UTF-8', true));?>
</span><?php }?>

</div>
<div class="mod-footer">
                            <ul class="nav nav-tabs aw-nav-tabs">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/active/thems/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="fa fa-comment"></i> Threads: <span class="badge badge-info"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['row']->value['counttema']);?>
</span></a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/active/posts/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="fa fa-comment"></i> Posts:<span class="badge badge-info"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['row']->value['countpost']);?>
</span></a></li>
                                <li><a href="#"><i class="fa fa-thumbs-up"></i> Kudos:<span class="badge badge-info"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['rating']);?>
</span></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i> Points:<span class="badge badge-info"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['balls']);?>
</span></a></li>
</div>
</div>  
</div>
<?php if ($_smarty_tpl->tpl_vars['user']->value['id'] && $_smarty_tpl->tpl_vars['row']->value['id'] != $_smarty_tpl->tpl_vars['user']->value['id']) {?>
<div class="col-sm-12 col-md-3 aw-side-bar">
   <div class="aw-mod side-nav">
       <div class="mod-body">
               
           <ul>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="fa fa-envelope"></i> Send message</a></li>
               <?php if ($_smarty_tpl->tpl_vars['friends']->value == 0) {?>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/friends/add/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="fa fa-plus"></i> Add to friends</a></li>
               <?php } else { ?>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/friends/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="fa fa-minus"></i> Remove from friends</a></li>
                <?php }?>
                 <?php if ($_smarty_tpl->tpl_vars['blacklist']->value == 0) {?>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/blacklist/add/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="fa fa-plus"></i> Add to blacklist</a></li>
               <?php } else { ?>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/blacklist/del/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="fa fa-minus"></i> Remove from blacklist</a></li>
                <?php }?>
            </ul>
             
    </div> 
       </div> 
      
</div>
  <?php }?>
       
 <?php }
}
