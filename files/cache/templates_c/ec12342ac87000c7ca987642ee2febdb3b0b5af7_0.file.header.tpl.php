<?php
/* Smarty version 3.1.30, created on 2017-09-22 17:27:07
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c52bcbe2b927_39839679',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec12342ac87000c7ca987642ee2febdb3b0b5af7' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/header.tpl',
      1 => 1506094026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c52bcbe2b927_39839679 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
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
/assets/font-awesome-4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/fonts/style.css">
         <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/css/main.css">
         <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/css/main-responsive.css">
         <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/css/app.css">
         <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
         <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/plugins/jquery-ui/jquery-ui-1.11.2.custom.min.css">
         <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/plugins/bootstrap-switch/bootstrap-switch.css">
        
        <!-- javascript -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/js/jquery-1.12.4.min.js"><?php echo '</script'; ?>
>
        
        
    </head>
    <body>
    
               <div class="navbar navbar-inverse navbar-fixed-top">
                   
          <div class="container">
				<div class="navbar-header">
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">
					 <?php echo $_smarty_tpl->tpl_vars['setup']->value['namesite'];?>
 <?php echo $_smarty_tpl->tpl_vars['setup']->value['version'];?>

					</a>
				</div>
				<div class="navbar-tools">
					<ul class="nav navbar-right">
						<li class="dropdown current-user">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<span class="username"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['user']->value['login']);?>
</span>
								<i class="clip-chevron-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
" target="_blank"><i class="clip-earth-2"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['home'];?>
</a></li>
								<li><a href="#" data-toggle="modal" data-target="#helper_info"><i class="clip-info"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['help_info'];?>
</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/exit"><i class="clip-switch"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['logout'];?>
</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
              
      <div class="main-container">
			<div class="navbar-content">
				<div class="main-navigation navbar-collapse collapse">
                    <div class="navigation-toggler">
						<i class="clip-chevron-left"></i>
						<i class="clip-chevron-right"></i>
                    </div>
					<ul class="main-navigation-menu">
						<li <?php if ($_smarty_tpl->tpl_vars['aurl']->value == '/') {?>class="active"<?php }?>>
						    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
"> <i class="clip-network"></i> <span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['dashboard'];?>
</span></a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/forums"><i class="clip-list-2"></i><span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['a_forums'];?>
</span></a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users"><i class="clip-users"></i><span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['users'];?>
</span></a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting"><i class="clip-settings"></i><span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['settings'];?>
</span></a>
						</li>
						<li>
							<a href="javascript:void(0)"><i class="clip-stack"></i>
								<span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['theme_editor'];?>
</span><i class="icon-arrow"></i>
							</a>
							<ul class="sub-menu">
							 <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates"><span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['theme_editor'];?>
</span></a></li>
							 <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/email"><span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['email_theme_editor'];?>
</span></a></li>

							</ul>
						</li>
					   <li>
							<a href="javascript:void(0)"><i class="clip-file-2"></i>
								<span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['module_logs'];?>
</span><i class="icon-arrow"></i>
							</a>
							<ul class="sub-menu">
							 <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/logs"><span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['adm_logs'];?>
</span></a></li>
							 <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/notice"><span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['notifications'];?>
</span></a></li>

							</ul>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/pages"><i class="clip-book"></i><span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['pages'];?>
</span></a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads"><i class="clip-pictures"></i><span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_manage'];?>
</span></a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap"><i class="clip-tree"></i><span class="title"> <?php echo $_smarty_tpl->tpl_vars['lang']->value['sitemap_manage'];?>
</span></a>
						</li>
				        	</ul>
                      	</div>
				</div>
				      <div class="main-content">
				      <div class="container">
<?php }
}
