<?php
/* Smarty version 3.1.30, created on 2017-09-26 21:58:09
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/mail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cab151f152d8_10001181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '837305d8beac6e1f955cb3a17591e49a0c75b2cb' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/mail.tpl',
      1 => 1506455888,
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
function content_59cab151f152d8_10001181 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
if ($_smarty_tpl->tpl_vars['row']->value['id']) {?>
<div class="panel">
                      <div class="panel-heading"><h4><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h4></div>
                         <div class="panel-body">
        <?php if ($_smarty_tpl->tpl_vars['blacklist']->value == 0) {?>
            <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
            <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" class="fon" enctype="multipart/form-data">
                <p>Текст сообщения: <br/>
                    <?php $_smarty_tpl->_subTemplateRender("file:system/panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_comments');?>

                </p>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_file');?>

                <p><input type="submit" name="ok" value="Отправить" class="btn btn-primary"></p>
            </form>
        <?php } else { ?>
            <div class="alert alert-danger">Пользователь <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['login'];?>
"><?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</a> запретил Вам ему писать!</div>
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

                    <?php if ($_smarty_tpl->tpl_vars['row']->value['id'] != $_smarty_tpl->tpl_vars['user']->value['id'] && $_smarty_tpl->tpl_vars['rows']->value['read'] == 0) {?><hr/><p><font color="red">не прочитано</font></p><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['arrayrowfile']->value && $_smarty_tpl->tpl_vars['rows']->value['count_file'] > 0) {?>
                        <h4>Прикрепленные файлы:</h4>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowfile']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['rows']->value['id'] == $_smarty_tpl->tpl_vars['file']->value['id_mail']) {?>
                                <p class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail/load/<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
" title="Скачать файл"><i class="fa fa-file"></i> <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file'], ENT_QUOTES, 'UTF-8', true));?>
</a> (<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['file']->value['size']);
if ($_smarty_tpl->tpl_vars['file']->value['loadcounts'] > 0) {?>, скачиваний: <?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['file']->value['loadcounts']);
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
            <div class="alert alert-danger">Сообщений ещё нет...</div>
        <?php }?>
         
        <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
            <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
        <?php }?> 
    </div>
     </div>
<?php } else { ?>
<div class="panel">
                      <div class="panel-heading"><h4><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h4></div>
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
</a><?php } else { ?><i class="fa fa-trash"></i> Пользователь удалён<?php }?>
                            <br/><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail/<?php echo $_smarty_tpl->tpl_vars['rows']->value['user_id'];?>
">Сообщений: (<?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['rows']->value['count_mail']);
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
</a><?php } else { ?><i class="fa fa-trash"></i> Пользователь удалён<?php }?>
                            <br/><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/mail/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
">Сообщений: (<?php echo $_smarty_tpl->tpl_vars['rows']->value['count_mail'];
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
            <div class="alert alert-danger">Вы ещё никому не писали...</div>
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
