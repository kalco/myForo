<?php
/* Smarty version 3.1.30, created on 2018-07-25 21:42:39
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/system/user.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b58d2afca8966_33089348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b942c0e52c9644045ff0ffc6cdf6f50dd22cd99f' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/system/user.tpl',
      1 => 1532547753,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b58d2afca8966_33089348 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
if (!is_callable('smarty_modifier_bbcode')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.bbcode.php';
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'level', null, null);
?>

    <?php if ($_smarty_tpl->tpl_vars['rows']->value['level'] == 90) {?>
      <span class="label label-primary">Moderator</span>
    <?php } elseif ($_smarty_tpl->tpl_vars['rows']->value['level'] == 100) {?>
        <span class="label label-success">Administrator</span>
     <?php } else { ?>
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

    <div class="panel-heading">
        <div class="img-thumbnail img-responsive"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/<?php if ($_smarty_tpl->tpl_vars['rows']->value['avatar']) {?>user/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
/small-<?php echo $_smarty_tpl->tpl_vars['rows']->value['avatar'];
} else { ?>nophoto.jpg<?php }?>"/></div>
            <span class="pull-right margin-top-10">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" title="See post"><i class="fa fa-hashtag"></i></a>
                <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] && $_smarty_tpl->tpl_vars['rows']->value['id_user'] != $_smarty_tpl->tpl_vars['user']->value['id']) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
/reply" title="Reply"><i class="fa fa-reply"></i></a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
/quote" title="Quote"><i class="fa fa-quote-left"></i></a>
                <?php }?>
                 <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] > 50 || $_smarty_tpl->tpl_vars['user']->value['id'] == $_smarty_tpl->tpl_vars['rows']->value['id_user'] && $_smarty_tpl->tpl_vars['rows']->value['time'] > $_smarty_tpl->tpl_vars['edit']->value && $_smarty_tpl->tpl_vars['tema']->value['closed'] == 0) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
/edit" title="Edit"><i class="fa fa-pencil"></i></a><?php if ($_smarty_tpl->tpl_vars['rows']->value['realid'] == 0) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/post/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
/del" title="Delete"><i class="fa fa-trash-o"></i></a><?php }?>
                <?php }?>
            </span>
        <p><?php if ($_smarty_tpl->tpl_vars['rows']->value['login']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['login']);?>
</a> <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'level');
} else { ?><i class="fa fa-trash"></i> User is removed<?php }?> (<?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['time']);?>
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
} else { ?><i class="fa fa-trash"></i> User is removed<?php }?> (<?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['time']);?>
)
            <br/>Votes for: <b><?php echo htmlspecialchars(smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['option']), ENT_QUOTES, 'UTF-8', true);?>
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
" data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="Threads: <?php echo smarty_modifier_number(smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['counttema']));?>
 <br /> Posts: <?php echo smarty_modifier_number(smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['countpost']));?>
 <br /> XP: <?php echo smarty_modifier_number(smarty_modifier_esc($_smarty_tpl->tpl_vars['rows']->value['balls']));?>
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

<div class="panel-body">
    <p><?php echo smarty_modifier_bbcode(smarty_modifier_esc($_smarty_tpl->tpl_vars['text']->value[$_smarty_tpl->tpl_vars['k']->value]));?>
</p>
    </div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

<?php }
}
