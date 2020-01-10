<?php
/* Smarty version 3.1.30, created on 2017-09-09 21:44:27
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/sidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b4449b1cad26_42443580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b543d3c328dea9ec9f5aac6a7bbacc0982385832' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/sidebar.tpl',
      1 => 1504986077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b4449b1cad26_42443580 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_math')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
if (!is_callable('smarty_function_counter')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/function.counter.php';
if (!is_callable('smarty_modifier_bbcode')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.bbcode.php';
?>

    <?php if ($_SERVER['REQUEST_URI'] == '/') {?> 


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




<aside class="col-sm-4">
            
        <div class="categories-box">
        <h2>Categories <i class="pull-right tip fa fa-folder" title="Categories"></i></h2>
        <ul>
            <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['row']->value) {
?>
                <?php smarty_function_counter(array('name'=>'num','assign'=>'num'),$_smarty_tpl);?>

                            <li>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['refid'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
                        <span class="label label-warning"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['row']->value['countthread']);?>
</span>
                        <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
 </a>
                </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
                     <?php } else { ?>
            <div class="alert alert-danger">No categories</div>
        <?php }?>
    </div>

    
    <div class="forum-box">
        <h2>Statistics <i class="pull-right fa fa-bar-chart"></i></h2>
        <ul>
                            <li>
                    <i class="fa fa-3x fa-user"></i> 
                    <h3>Last User</h3>
                    <h4><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['last']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['last']->value['login'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['last']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</a></h4>
                 

            </li>
                        <li>
                    <i class="fa fa-3x fa-users"></i> 
                    <h3>Users</h3>
                    <h4><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['users']->value);?>
</h4>
                

            </li>
                        <li>
                <i class="fa fa-3x fa-comments-o"></i>
                <h3>Posts</h3>
                <h4><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['post']->value);?>
</h4>
            </li>
            <li>
                
                    <i class="fa fa-3x fa-comments"></i>
                    <h3>Threads</h3>
                    <h4><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['tema']->value);?>
</h4>
            
            </li>




        </ul>
    </div>
      
    <div class="forum-box">
            <h2>Sponsored Ads <i class="pull-right fa fa-picture-o"></i>
                </a>
            </h2>
            <?php if ($_smarty_tpl->tpl_vars['adsleft']->value) {?> 
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

                   <?php }?>
        </div>


    

    </aside>
<?php }
}
