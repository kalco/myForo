<?php
/* Smarty version 3.1.30, created on 2017-05-14 21:55:35
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5918a8274ece32_20603527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3503581d366f9788d47581f27d1a70d3889208c' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/sidebar.tpl',
      1 => 1493623899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5918a8274ece32_20603527 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
if (!is_callable('smarty_modifier_bbcode')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.bbcode.php';
?>
<div class="col-sm-12 col-md-3 aw-side-bar">
    <?php if ($_SERVER['REQUEST_URI'] == '/') {?> 
    <div class="aw-mod aw-text-align-justify">
        <div class="mod-head">
<h4>Last Threads</h4>
</div>
<div class="mod-body">
     <?php if ($_smarty_tpl->tpl_vars['lastthems']->value) {?>
     <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastthems']->value, 'rows', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['rows']->value) {
?>
                <?php smarty_function_math(array('equation'=>"max(0, z - ((( z % y) == 0) ? y : ( z % y)))",'z'=>$_smarty_tpl->tpl_vars['rows']->value['countpost'],'y'=>$_smarty_tpl->tpl_vars['message']->value,'assign'=>"starts"),$_smarty_tpl);?>

               <dl>
                
			<dt class="pull-left aw-border-radius-5">
			<i class="fa fa-commenting-o fa-2x"></i>
			</dt>
		
			<dd class="pull-left">
				<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_razdel'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_forum'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['starts']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_post_last'];?>
" title="Go to last post" class="aw-user-name"><?php echo smarty_modifier_esc(htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['rows']->value['name'],25,"...",true), ENT_QUOTES, 'UTF-8', true));?>
</a>
				<p class="signature"></p>
				<p><b><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user_last'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['rows']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</a></b>,<b><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['time']);?>
</b></p>
			</dd>
		</dl>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    <?php }?>
    </div>
        </div>
        <div class="aw-mod aw-text-align-justify">
        <div class="mod-head">
<h4>Last Posts</h4>
</div>
<div class="mod-body">
     <?php if ($_smarty_tpl->tpl_vars['lastposts']->value) {?>
     <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['lastposts']->value, 'rows', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['rows']->value) {
?>
                <?php smarty_function_math(array('equation'=>"max(0, z - ((( z % y) == 0) ? y : ( z % y)))",'z'=>$_smarty_tpl->tpl_vars['rows']->value['countpost'],'y'=>$_smarty_tpl->tpl_vars['message']->value,'assign'=>"starts"),$_smarty_tpl);?>

               <dl>
                
			<dt class="pull-left aw-border-radius-5">
			<i class="fa fa-commenting-o fa-2x"></i>
			</dt>
		
			<dd class="pull-left">
				<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_razdel'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_forum'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_tema'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['starts']->value;?>
#<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" title="Go to last post" class="aw-user-name"><?php echo smarty_modifier_esc(htmlspecialchars(smarty_modifier_truncate($_smarty_tpl->tpl_vars['rows']->value['text'],25,"...",true), ENT_QUOTES, 'UTF-8', true));?>
</a>
				<p class="signature"></p>
				<p><b><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user_last'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['rows']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</a></b>,<b><?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['time']);?>
</b></p>
			</dd>
		</dl>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
    <?php }?>
    </div>
        </div>
    <div class="aw-mod aw-text-align-justify">
        <div class="mod-head">
<h4 class="aw-text-color-blue">Statistics</h4>
</div>
<div class="mod-body">
    <ul>
    <li>Threads:<span class="pull-right"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['tema']->value);?>
</span></li>
    <li>Posts:<span class="pull-right"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['post']->value);?>
</span></li>
    <li>Users:<span class="pull-right"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['users']->value);?>
</span></li>
    <li>Last user:<span class="pull-right"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['last']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['last']->value['login'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['last']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</a> </span></li>
    </ul>

    </div>
        </div>
    
            
   
    
    <?php if ($_smarty_tpl->tpl_vars['adsleft']->value) {?> 
        <div class="pod">
            <div class="head">Реклама</div>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adsleft']->value, 'left', false, 'kleft');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['kleft']->value => $_smarty_tpl->tpl_vars['left']->value) {
?>
                <div class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/go/<?php echo $_smarty_tpl->tpl_vars['left']->value['id'];?>
"><?php echo smarty_modifier_bbcode(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['left']->value['text'], ENT_QUOTES, 'UTF-8', true)));?>
</a></div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </div>
    <?php }?>
   
        <?php } elseif ($_SERVER['REQUEST_URI'] == '/users' || $_SERVER['REQUEST_URI'] == '/users/admin' || $_SERVER['REQUEST_URI'] == '/users/online' || $_SERVER['REQUEST_URI'] == '/users/guest') {?> 
        <div class="aw-mod side-nav">
       <div class="mod-body">
           <ul id="sidebar_menu">
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/users">All users<span class="badge badge-info"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['users']->value);?>
</span></a></li>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/users/admin">Staff <span class="badge badge-info"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['users_admin']->value);?>
</span></a></li>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/users/online">Online users <span class="badge badge-info"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['usersonline']->value);?>
</span></a></li>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/users/guest">Online guests <span class="badge badge-info"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['guestonline']->value);?>
</span></a></li>
            </ul>
    </div> 
       </div> 
        
        <?php } elseif ($_SERVER['REQUEST_URI'] == '/profile' || $_SERVER['REQUEST_URI'] == '/profile/history' || $_SERVER['REQUEST_URI'] == '/profile/blacklist' || $_SERVER['REQUEST_URI'] == '/profile/bookmark') {?> 
        
                <div class="aw-mod side-nav">
       <div class="mod-body">
           <ul id="sidebar_menu">
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail">Messages<span class="badge badge-info"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['mail']->value);
if ($_smarty_tpl->tpl_vars['newmail']->value) {?> <font color="green">+<?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['newmail']->value);?>
</font><?php }?></span></a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/notice">Notifications<span class="badge badge-info"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['notice']->value);?>
</span></a></li>
                 <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/friends">Friends<span class="badge badge-info"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['friends']->value);
if ($_smarty_tpl->tpl_vars['friendsnew']->value > 0) {?> <font color="red"> +<?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['friendsnew']->value);?>
</font><?php }?></span></a></li>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/bookmark">Bookmarks <span class="badge badge-info"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['bookmark']->value);?>
</span></a></li>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/blacklist">Black list <span class="badge badge-info"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['blacklist']->value);?>
</span></a></li>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/history">Login history <span class="badge badge-info"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['history']->value);?>
</span></a></li>
            </ul>
    </div> 
       </div>
       
            <div class="aw-mod side-nav">
       <div class="mod-body">
           <ul id="sidebar_menu">
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
">See my profile</a></li>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/setup">Settings</a></li>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/security">Security</a></li>
                
          
            </ul>
    </div> 
       </div>
         <?php }?>
</div> 
<?php }
}
