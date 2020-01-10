<?php
/* Smarty version 3.1.30, created on 2017-10-08 11:41:28
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d9f2c8b8cff7_70355927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27c588e453c08e778e75ff04905c5c7d783dda76' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/sidebar.tpl',
      1 => 1507455687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d9f2c8b8cff7_70355927 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_function_counter')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/function.counter.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>

 </div>
 <div class="col-lg-3">
         <div class="panel">
           <div class="panel-body clearfix">
        <form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/search" id="global_search_form" method="post" accept-charset="utf-8">
        <div class="input-group col-lg-12">
            <input class="form-control" type="text" name="search" placeholder="Search" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['search']->value);?>
"/>
 <span class="input-group-btn" style="width:0;">
 <button type="submit" class="pull-right btn btn-primary"><i class="fa fa-search" onClick="$('#global_search_form').submit();"></i></button>  </span>                                     
                </div>                           
                    </form>
 
    </div>
    </div>
     <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?>
 <div class="panel">
        <div class="panel-body clearfix">
            <a class="btn btn-sm btn-primary col-lg-12" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/add"><i class="fa fa-plus"></i>  Create Thread</a>
        </div>
</div>
   <?php }?>
     <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'sidebar_global', null, null);
?>

        <div class="panel">
        <div class="panel-heading">Advertisement</div>
        <div class="panel-body clearfix">
            <?php if ($_smarty_tpl->tpl_vars['adsleft']->value) {?> 
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adsleft']->value, 'left', false, 'kleft');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kleft']->value => $_smarty_tpl->tpl_vars['left']->value) {
?>
                <div class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['left']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/banners/view-<?php echo $_smarty_tpl->tpl_vars['left']->value['photo'];?>
" class="img-responsive" alt=""/></a></div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                   <?php }?>
            </div>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'sidebar_home', null, null);
?>

 <div class="panel">
        <div class="panel-heading">Categories</div>
            
<?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
<ul class="list-group">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowcat']->value, 'row', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
                <?php smarty_function_counter(array('name'=>'num','assign'=>'num'),$_smarty_tpl);?>

                <li class="list-group-item inactive">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
.<?php echo $_smarty_tpl->tpl_vars['row']->value['translate'];?>
">
                        <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
 <span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['row']->value['countthread']);?>
</span></a>
                </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
                    </ul>
                     <?php } else { ?>
           <div class="text-center margin-t-15 padding-b-5">No categories</div>
        <?php }?>
</div>
    <div class="panel">
        <div class="panel-heading">Statistics</div>
        <ul class="list-group">
                            <li class="list-group-item">Threads<span class="pull-right"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['tema']->value);?>
</span></li>
                            <li class="list-group-item">Posts<span class="pull-right"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['post']->value);?>
</span></li>
                            <li class="list-group-item">Users<span class="pull-right"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['users']->value);?>
</span></li>
                            <li class="list-group-item">Last User<span class="pull-right"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['last']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['last']->value['login'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['last']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</a></span></li>
                  
                    </ul>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'sidebar_users', null, null);
?>

     <div class="panel">
        <div class="panel-heading">Users</div>
        <ul class="list-group">
               <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/users">All users<span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['users']->value);?>
</span></a></li>
               <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/users/admin">Staff <span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['users_admin']->value);?>
</span></a></li>
               <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/users/online">Online users <span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['usersonline']->value);?>
</span></a></li>
               <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/users/guest">Online guests <span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['guestonline']->value);?>
</span></a></li>
                  
                    </ul>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'sidebar_profile', null, null);
?>

<div class="panel">
        <div class="panel-heading">My Profile</div>
        <ul class="list-group">
               <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail">Messages<span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['mail']->value);
if ($_smarty_tpl->tpl_vars['newmail']->value) {?> <font color="green">+<?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['newmail']->value);?>
</font><?php }?></span></a></li>
               <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/notice">Notifications<span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['notice']->value);?>
</span></a></li>
               <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/friends">Friends<span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['friends']->value);
if ($_smarty_tpl->tpl_vars['friendsnew']->value > 0) {?> <font color="red"> +<?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['friendsnew']->value);?>
</font><?php }?></span></a></li>
               <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/bookmark">Bookmarks <span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['bookmark']->value);?>
</span></a></li>
               <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/blacklist">Black list <span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['blacklist']->value);?>
</span></a></li>
               <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/history">Login history <span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['history']->value);?>
</span></a></li>
                    </ul>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'sidebar_personal', null, null);
?>

<div class="panel">
        <div class="panel-heading">About - <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<ul class="list-group">
                             <?php if ($_smarty_tpl->tpl_vars['row']->value['firstname']) {?><li class="list-group-item">Name<span class="pull-right"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['firstname'], ENT_QUOTES, 'UTF-8', true));?>
</span></li><?php }?>
                             <?php if ($_smarty_tpl->tpl_vars['row']->value['lastname']) {?><li class="list-group-item">Surname<span class="pull-right"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['lastname'], ENT_QUOTES, 'UTF-8', true));?>
</span></li><?php }?>
                             <?php if ($_smarty_tpl->tpl_vars['row']->value['city']) {?><li class="list-group-item">Location<span class="pull-right"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['city'], ENT_QUOTES, 'UTF-8', true));?>
</span></li><?php }?>
                            <li class="list-group-item">Joined<span class="pull-right"><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['date_reg']);?>
</span></li>
                            <li class="list-group-item">Last Visit<span class="pull-right"><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['row']->value['date_last']);?>
</span></li>
                            

                  
                    </ul>
</div>
<div class="panel">
        <div class="panel-heading">Statistics - <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<ul class="list-group">
                            <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/active/thems/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Threads</a><span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['row']->value['counttema']);?>
</span></li>
                            <li class="list-group-item"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/active/posts/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">Posts</a><span class="pull-right label label-primary"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['row']->value['countpost']);?>
</span></li>
                            <li class="list-group-item">Karma<span class="pull-right label label-primary"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['rating']);?>
</span></li>
                            <li class="list-group-item">Points<span class="pull-right label label-primary"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['balls']);?>
</span></li>
                    </ul>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

   <?php }
}
