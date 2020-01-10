<?php
/* Smarty version 3.1.30, created on 2018-01-10 20:36:01
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/mail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a564f01a17615_15694288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0912ffa8d8466b8161d00bec270788127676685' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/profile/mail.tpl',
      1 => 1515605682,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/panel.tpl' => 1,
    'file:system/user.tpl' => 1,
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_5a564f01a17615_15694288 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
if ($_smarty_tpl->tpl_vars['row']->value['id']) {?>
<div class="panel">
                      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
                         <div class="panel-body">
        <?php if ($_smarty_tpl->tpl_vars['blacklist']->value == 0) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" class="fon" enctype="multipart/form-data">
                <p>Message: <br/>
                    <?php $_smarty_tpl->_subTemplateRender("file:system/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_comments');?>

                </p>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_file');?>

                <p><input type="submit" name="ok" value="Send" class="btn btn-primary"></p>
            </form>
        <?php } else { ?>
            <div class="alert alert-danger">User <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</a> send you message</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'rows', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['rows']->value) {
?>
                <div class="list text">
                    <?php $_smarty_tpl->_subTemplateRender("file:system/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'comments');?>

                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'text');?>

                    <?php if ($_smarty_tpl->tpl_vars['row']->value['id'] != $_smarty_tpl->tpl_vars['user']->value['id'] && $_smarty_tpl->tpl_vars['rows']->value['read'] == 0) {?><hr/><p><font color="red">unread</font></p><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['arrayrowfile']->value && $_smarty_tpl->tpl_vars['rows']->value['count_file'] > 0) {?>
                        <h4>File:</h4>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowfile']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['rows']->value['id'] == $_smarty_tpl->tpl_vars['file']->value['id_mail']) {?>
                                <p class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail/load/<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
" title="Download file"><i class="fa fa-file"></i> <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file'], ENT_QUOTES, 'UTF-8', true));?>
</a> (<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['file']->value['size']);
if ($_smarty_tpl->tpl_vars['file']->value['loadcounts'] > 0) {?>, downloaded: <?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['file']->value['loadcounts']);
}?>)</p>   
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    <?php }?>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php } else { ?>
            <div class="alert alert-danger">No messages yet ...</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
            <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
        <?php }?> 
    </div>
     </div>
<?php } else { ?>
<div class="panel">
                      <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
                         <div class="panel-body">
        <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'rows', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['rows']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] == $_smarty_tpl->tpl_vars['rows']->value['id_user']) {?>
                    <div class="post-user">
                        <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['rows']->value['avatar2']) {?>user/<?php echo $_smarty_tpl->tpl_vars['rows']->value['user_id'];?>
/small-<?php echo $_smarty_tpl->tpl_vars['rows']->value['avatar2'];
} else { ?>nophoto.jpg<?php }?>"/></div>
                        <p>
                            <?php if ($_smarty_tpl->tpl_vars['rows']->value['login2']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail/<?php echo $_smarty_tpl->tpl_vars['rows']->value['user_id'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['login2']);?>
</a><?php } else { ?><i class="fa fa-trash"></i> User deleted<?php }?>
                            <br/><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail/<?php echo $_smarty_tpl->tpl_vars['rows']->value['user_id'];?>
">Messages: (<?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['rows']->value['count_mail']);
if ($_smarty_tpl->tpl_vars['rows']->value['count_mail_new']) {?> <font color="red">+<?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['rows']->value['count_mail_new']);?>
</font><?php }?>)</a>
                        </p>
                    </div>
                <?php } else { ?>
                    <div class="post-user">
                        <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['rows']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
/small-<?php echo $_smarty_tpl->tpl_vars['rows']->value['avatar'];
} else { ?>nophoto.jpg<?php }?>"/></div>
                        <p>
                            <?php if ($_smarty_tpl->tpl_vars['rows']->value['login']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['login']);?>
</a><?php } else { ?><i class="fa fa-trash"></i> User deleted<?php }?>
                            <br/><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
">messages: (<?php echo $_smarty_tpl->tpl_vars['rows']->value['count_mail'];
if (smarty_modifier_number($_smarty_tpl->tpl_vars['rows']->value['count_mail_new'])) {?> <font color="red">+<?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['rows']->value['count_mail_new']);?>
</font><?php }?>)</a>
                        </p>
                    </div>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php } else { ?>
            <div class="alert alert-danger">You have not written to anyone yet ...</div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
            <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
        <?php }?> 
    </div>
     </div>
<?php }?>

  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_profile');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
