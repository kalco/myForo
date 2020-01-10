<?php
/* Smarty version 3.1.30, created on 2017-10-07 17:41:05
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59d8f59103c149_41782235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f40aadba21cca6eb7753ff072079306462ba8b69' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/header.tpl',
      1 => 1507390863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d8f59103c149_41782235 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8"/>
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="HandheldFriendly" content="true">
        <meta name="MobileOptimized" content="width">
        <meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['keywords']->value) {
echo strip_tags(smarty_modifier_esc($_smarty_tpl->tpl_vars['keywords']->value));
} else {
echo strip_tags(smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['keywords']));
}?>">
        <meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['description']->value) {
echo strip_tags(smarty_modifier_esc($_smarty_tpl->tpl_vars['description']->value));
} else {
echo strip_tags(smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['description']));
}?>">
        <meta name="author" content="Xplosive Studio">
        <meta name="generator" content="Roka Framework">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/images/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/images/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/images/favicons/manifest.json">
        <link rel="mask-icon" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/css/app.css">
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/frontend/<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
    </head>
   <body class="homepage login_1">
<nav class="navbar navbar-default  navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">

      <div style="margin:12px 15px 0 0"  class="visible-xs btn-group pull-right">
                 <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail" class="btn btn-sm btn-success"><span class="fa fa-envelope"></span><?php if ($_smarty_tpl->tpl_vars['newmail']->value > 0) {?><span class="msg_count"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['newmail']->value);?>
</span><?php }?> </a> 
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/notice" class="btn btn-sm btn-success"><span class="fa fa-bell"></span>  <?php if ($_smarty_tpl->tpl_vars['newnotice']->value > 0) {?><span class="msg_count"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['newnotice']->value);?>
</span><?php }?> </a> 
                      	<?php }?>
                <button class="btn btn-sm btn-success" data-toggle="collapse" data-target="#navcol"><span class="fa fa-reorder"></span></button>
      </div>

      <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
">
         myForo
      </a>
     
    </div>
   

    <div class="collapse navbar-collapse" id="navcol">

              
          <ul class="nav navbar-nav">
                                                   <li <?php if ($_SERVER['REQUEST_URI'] == '/users' || $_SERVER['REQUEST_URI'] == '/users/admin' || $_SERVER['REQUEST_URI'] == '/users/online' || $_SERVER['REQUEST_URI'] == '/users/guest') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/users">Users</a></li>
                                                <li <?php if ($_SERVER['REQUEST_URI'] == '/new/thems') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/new/thems">New Threads</a></li>
                                                <li <?php if ($_SERVER['REQUEST_URI'] == '/new/posts') {?>class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/new/posts">New Posts</a></li> 
            
      </ul>
      <ul class="nav navbar-nav navbar-right"> 
       <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?>
                      <li class="hidden-xs <?php if ($_SERVER['REQUEST_URI'] == '/profile/mail') {?>active<?php }?>">
               <a class="icon_nav icon_user_messages" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail">
                <div> <i class="fa fa-envelope"></i>
                <?php if ($_smarty_tpl->tpl_vars['newmail']->value > 0) {?>
                   <span id="msg_count" class="msg_count"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['newmail']->value);?>
</span>
                   	<?php }?>
                </div>
              </a>
            </li>
                   <li class="hidden-xs <?php if ($_SERVER['REQUEST_URI'] == '/profile/notice') {?>active<?php }?>">
               <a class="icon_nav notificationLink" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/notice">
                <div> <i class="fa fa-bell"></i>
                <?php if ($_smarty_tpl->tpl_vars['newnotice']->value > 0) {?>
                   <span id="msg_count" class="msg_count"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['newnotice']->value);?>
</span>
                   	<?php }?>
                </div>
              </a>
            </li>       
           <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
 <span class="caret"></span></a>
              <ul id="usermenudown" class="dropdown-menu">
    	        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile">My Profile</a></li>
    	         <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] == 100) {?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Admin Panel</a></li>
                    <?php }?>
              	              	<li><div class="divider"></div><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/exit" class="outter">Logout</a></li>
            </ul>
          </li>
          <?php } else { ?>
										   	 <?php if ($_smarty_tpl->tpl_vars['setup']->value['registration'] == 1) {?>
					   	<li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/signup">Register</a></li>
					   	  <?php }?>
					   	<li>  <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/login">Log In</a></li>
							   <?php }?>   
      </ul>  
        </div>        
        
    </div>
 </nav>


 <div class="container">
<div class="row">
    <div  class="col-lg-9">
            <div class="panel">
          <?php if ($_SERVER['REQUEST_URI'] == '/' && $_smarty_tpl->tpl_vars['adsheadindex']->value) {?> 
                <div class="margin-t-15 margin-b-15 list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adsheadindex']->value, 'headindex', false, 'kheadindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kheadindex']->value => $_smarty_tpl->tpl_vars['headindex']->value) {
?>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['headindex']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/banners/<?php echo $_smarty_tpl->tpl_vars['headindex']->value['photo'];?>
" class="img-responsive" alt=""/></a></p>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            <?php }?>

            <?php if ($_SERVER['REQUEST_URI'] != '/' && $_smarty_tpl->tpl_vars['adsheadnoindex']->value) {?> 
                <div class="margin-top-10 margin-b-15 list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adsheadnoindex']->value, 'headnoindex', false, 'kheadnoindex');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kheadnoindex']->value => $_smarty_tpl->tpl_vars['headnoindex']->value) {
?>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['headnoindex']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/banners/<?php echo $_smarty_tpl->tpl_vars['headnoindex']->value['photo'];?>
" class="img-responsive" alt=""/></a></p>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['adshead']->value) {?> 
               <div class="margin-top-10 margin-b-15 list">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adshead']->value, 'head', false, 'khead');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['khead']->value => $_smarty_tpl->tpl_vars['head']->value) {
?>
                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['head']->value['id'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/banners/<?php echo $_smarty_tpl->tpl_vars['head']->value['photo'];?>
" class="img-responsive" alt=""/></a></p>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                </div>
            <?php }?>
            </div><?php }
}
