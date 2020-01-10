<?php
/* Smarty version 3.1.30, created on 2017-09-28 21:48:34
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59cd52125f65b6_58738864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5016f8a83ae9b3195803855e7f286ed22f1deaf9' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/system/user.tpl',
      1 => 1506628112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cd52125f65b6_58738864 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'level', null, null);
?>

    <?php if ($_smarty_tpl->tpl_vars['rows']->value['level'] == 10) {?>
        <span class="label label-primary">Moderator</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 20) {?>
        [Mod]
    <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 30) {?>
        [Old Mod]
    <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 40) {?>
        [Sup Mod]
    <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 50) {?>
        [Sup Admin]
    <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 100) {?>
        <span class="label label-success">Administrator</span>
     <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 1) {?>
        <span class="label label-default">Member</span>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'comments', null, null);
?>

<div class="well clearfix">
<?php if ($_smarty_tpl->tpl_vars['rows']->value['id_user']) {?>
     <div class="image col-lg-12"> 
<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
">
<img class="img-full img-responsive ease" alt="" src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['rows']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['avatar'];
} else { ?>nophoto.jpg<?php }?>">
</a>
</div>
 <?php } else { ?>
  <div class="image col-lg-12"> 
<img class="img-full img-responsive ease" alt="" src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['rows']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
/small-<?php echo $_smarty_tpl->tpl_vars['rows']->value['avatar'];
} else { ?>nophoto.jpg<?php }?>">
</div>
   <?php }?>
   
  <div class="pull-left gift_author margin-t-15"> 
<?php if ($_smarty_tpl->tpl_vars['rows']->value['id_user']) {?>
            <?php if ($_smarty_tpl->tpl_vars['rows']->value['login']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['login']);?>
</a>
             <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] > 1) {?>
                <?php if ($_smarty_tpl->tpl_vars['rows']->value['ip']) {?> <br/> IP: <?php echo $_smarty_tpl->tpl_vars['rows']->value['ip'];
}?> <br/>
                <?php if ($_smarty_tpl->tpl_vars['rows']->value['browser']) {?>Browser: <?php echo $_smarty_tpl->tpl_vars['rows']->value['browser'];
}?> <br/>
                <?php if ($_smarty_tpl->tpl_vars['rows']->value['referer']) {?>Where: <a href="<?php echo $_smarty_tpl->tpl_vars['rows']->value['referer'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['referer'];?>
</a><?php }?>
            <?php }?>
 
 <p><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'level');
} else { ?> User was removed<?php }
} elseif ($_smarty_tpl->tpl_vars['rows']->value['name']) {
echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['name']);
} else { ?>Guest<?php }?></p>
<div class="date text-muted">Last Visit: <?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['time']);?>
</div>
 </div>
   </div> 
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

<div class="well clearfix">
        <div class="image col-lg-12">   
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
" data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="Threads: <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['counttema']);?>
 <br /> Posts: <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['countpost']);?>
 <br /> Karma: <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['rating']);?>
 <br /> Points: <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['balls']);?>
">
                                                <img class="img-full img-responsive ease" style="border: 0px" src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['rows']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['avatar'];
} else { ?>nophoto.jpg<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
">
                                            </a>        									
                                    </div>
<div class="pull-left gift_author margin-t-15">          							

	<a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
"> <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['login']);?>
 </a>

     						 
                                    </div>
                                    
<div class="clear"></div>
<div class="margin-t-15">
                                     <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'level');?>

                                  </div>
 </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'text', null, null);
?>

    <p><?php echo nl2br(smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['text']->value[$_smarty_tpl->tpl_vars['k']->value], ENT_QUOTES, 'UTF-8', true)));?>
</p>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php }
}
