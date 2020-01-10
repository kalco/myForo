<?php
/* Smarty version 3.1.30, created on 2017-09-02 10:09:40
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59aa59343846d9_66242662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b16751a9d2a85f00debc656c88822b7359fb578' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/user.tpl',
      1 => 1493623899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59aa59343846d9_66242662 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'level', null, null);
?>

    <?php if ($_smarty_tpl->tpl_vars['rows']->value['level'] == 10) {?>
        [младший модератор]
    <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 20) {?>
        [модератор]
    <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 30) {?>
        [старший модератор]
    <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 40) {?>
        [супер модератор]
    <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 50) {?>
        [заместитель администратора]
    <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 100) {?>
        [Админ]
     <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 1) {?>
        [Member]
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'comments', null, null);
?>

<?php if ($_smarty_tpl->tpl_vars['rows']->value['id_user']) {?>
<a class="aw-user-img aw-border-radius-5" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
">
<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['rows']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
/small-<?php echo $_smarty_tpl->tpl_vars['rows']->value['avatar'];
} else { ?>nophoto.jpg<?php }?>">
</a>
 <?php } else { ?>
<img class="aw-user-img aw-border-radius-5" alt="" src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['rows']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
/small-<?php echo $_smarty_tpl->tpl_vars['rows']->value['avatar'];
} else { ?>nophoto.jpg<?php }?>">
   <?php }?>
   
   <p class="text-color-999 title">
<?php if ($_smarty_tpl->tpl_vars['rows']->value['id_user']) {?>
            <?php if ($_smarty_tpl->tpl_vars['rows']->value['login']) {?><a class="aw-user-name"  href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['login']);?>
</a>
                           <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] > 1) {?>
                <?php if ($_smarty_tpl->tpl_vars['rows']->value['ip']) {?><br/>IP: <?php echo $_smarty_tpl->tpl_vars['rows']->value['ip'];
}?>
                <?php if ($_smarty_tpl->tpl_vars['rows']->value['browser']) {?>Browser: <?php echo $_smarty_tpl->tpl_vars['rows']->value['browser'];
}?>
                <?php if ($_smarty_tpl->tpl_vars['rows']->value['referer']) {?>Where: <a href="<?php echo $_smarty_tpl->tpl_vars['rows']->value['referer'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['referer'];?>
</a><?php }?>
            <?php }?>
   </p> 
 <p class="text-color-999 signature"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'level');
} else { ?> User was removed<?php }
} elseif ($_smarty_tpl->tpl_vars['rows']->value['name']) {
echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['name']);
} else { ?>Guest<?php }?></p>

 <span class="pull-left">Last Visit: <?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['time']);?>
</span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'forum', null, null);
?>

    <div class="post-user">
        <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['rows']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
/small-<?php echo $_smarty_tpl->tpl_vars['rows']->value['avatar'];
} else { ?>nophoto.jpg<?php }?>"/></div>
            <span class="pull-right margin-top-10">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_razdel'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_forum'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_tema'];?>
/post/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" title="Просмотреть пост"><i class="fa fa-info"></i></a>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] && $_smarty_tpl->tpl_vars['rows']->value['id_user'] != $_smarty_tpl->tpl_vars['user']->value['id']) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_razdel'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_forum'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_tema'];?>
/reply/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" title="Ответить"><i class="fa fa-reply"></i></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_razdel'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_forum'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_tema'];?>
/quote/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" title="Цитировать"><i class="fa fa-quote-left"></i></a>
                <?php }?>
            </span>
        <p><?php if ($_smarty_tpl->tpl_vars['rows']->value['login']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['login']);?>
</a> <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'level');
} else { ?><i class="fa fa-trash"></i> Пользователь удалён<?php }?> (<?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['time']);?>
)</p>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'voteforum', null, null);
?>

    <div class="post-user">
        <div class="img"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['rows']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
/small-<?php echo $_smarty_tpl->tpl_vars['rows']->value['avatar'];
} else { ?>nophoto.jpg<?php }?>"/></div>
        <p>
            <?php if ($_smarty_tpl->tpl_vars['rows']->value['login']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['login']);?>
</a> <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'level');
} else { ?><i class="fa fa-trash"></i> Пользователь удалён<?php }?> (<?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['time']);?>
)
            <br/>Проголосовал за: <b><?php echo htmlspecialchars(smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['option']), ENT_QUOTES, 'UTF-8', true);?>
</b>
        </p>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'users', null, null);
?>

 <?php if ($_smarty_tpl->tpl_vars['rows']->value['level'] == 100) {?>
<span class="aw-user-sort-count aw-border-radius-5 active">
<i class="fa fa-black-tie"></i>
</span>
<?php }?>
<a class="aw-user-img aw-border-radius-5" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
">
<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['rows']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
/small-<?php echo $_smarty_tpl->tpl_vars['rows']->value['avatar'];
} else { ?>nophoto.jpg<?php }?>">
</a>
<p class="text-color-999 title">
<a class="aw-user-name" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['login']);?>
</a>
</p>
  
       <p class="text-color-999 signature"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'level');?>
</p>
     <div class="meta"> 
            <span>
            <i class="fa fa-comment"></i> Threads: <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['counttema']);?>

            </span>
             <span>
            <i class="fa fa-comments"></i> Posts: <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['countpost']);?>

            </span>
             <span>
            <i class="fa fa-thumbs-up"></i> Kudos: <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['rating']);?>

            </span>
             <span>
            <i class="fa fa-heart"></i> Points: <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['balls']);?>

            </span>
        </div>
        <p>
<span class="pull-left">Last Visit: <?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['date_last']);?>
</span>
</p>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'text', null, null);
?>

    <p><?php echo nl2br(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['text']->value[$_smarty_tpl->tpl_vars['k']->value], ENT_QUOTES, 'UTF-8', true)));?>
</p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
