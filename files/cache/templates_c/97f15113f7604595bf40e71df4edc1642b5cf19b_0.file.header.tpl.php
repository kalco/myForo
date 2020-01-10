<?php
/* Smarty version 3.1.30, created on 2017-12-08 19:33:37
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2abee1466406_96952168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97f15113f7604595bf40e71df4edc1642b5cf19b' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/header.tpl',
      1 => 1512750815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2abee1466406_96952168 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="Xplosive Studio (http://xplos1ve.info)">
      <meta name="generator" content="RokaEngine by Xplosive Studio">
      <!-- Favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/images/favicons/apple-touch-icon.png">
      <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/images/favicons/favicon-32x32.png" sizes="32x32">
      <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/images/favicons/favicon-16x16.png" sizes="16x16">
      <link rel="manifest" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/images/favicons/manifest.json">
      <link rel="mask-icon" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
      <meta name="theme-color" content="#ffffff">
      <!-- Stylesheet -->
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/css/main.css">
      <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
   </head>
   <body class="page-dashboard">
      <nav class="navbar navbar-default navbar-inverse" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['setup']->value['namesite'];?>
 <?php echo $_smarty_tpl->tpl_vars['setup']->value['version'];?>
</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['dashboard'];?>
</a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['content'];?>
 <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/forums"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_forums'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/pages"><?php echo $_smarty_tpl->tpl_vars['lang']->value['pages'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_manage'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sitemap_manage'];?>
</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['extends'];?>
 <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates"><?php echo $_smarty_tpl->tpl_vars['lang']->value['theme_editor'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/email"><?php echo $_smarty_tpl->tpl_vars['lang']->value['email_theme_editor'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/logs"><?php echo $_smarty_tpl->tpl_vars['lang']->value['adm_logs'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/notice"><?php echo $_smarty_tpl->tpl_vars['lang']->value['notifications'];?>
</a></li>
                     </ul>
                  </li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['lang']->value['system'];?>
 <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting"><?php echo $_smarty_tpl->tpl_vars['lang']->value['settings'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting/smiles"><?php echo $_smarty_tpl->tpl_vars['lang']->value['smiles'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users"><?php echo $_smarty_tpl->tpl_vars['lang']->value['users'];?>
</a></li>
                     </ul>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>
</a></li>
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['user']->value['login']);?>
 <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="#" data-toggle="modal" data-target="#helper_info"><?php echo $_smarty_tpl->tpl_vars['lang']->value['help_info'];?>
</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/exit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['logout'];?>
</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="container">
      <div><?php }
}
