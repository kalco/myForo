<?php
/* Smarty version 3.1.30, created on 2017-10-08 13:44:08
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/forum/tema.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59da0f884f1462_18806698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c2c6edc38ba72a9b0c1b544c88f10fa500cdf50' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/forum/tema.tpl',
      1 => 1507463046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/user.tpl' => 1,
    'file:system/captcha.tpl' => 1,
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59da0f884f1462_18806698 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
if (!is_callable('smarty_function_math')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
if ($_smarty_tpl->tpl_vars['row']->value['type'] == 1 && empty($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
    <div class="fon">
        <div class="alert alert-danger margin-top-10">Для того, чтобы просмотреть тему, Вам нужно <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/login">авторизоваться</a> или <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/signup">зарегистрироваться</a> на сайте!</div>
    </div>    
<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['type'] == 2 && $_smarty_tpl->tpl_vars['user']->value['level'] < 10) {?>
    <div class="fon">
        <div class="alert alert-danger margin-top-10">Данная тема доступна только администрации сайта!</div>
    </div> 
<?php } else { ?>
    <div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
">Форум</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['forum']->value['name']);?>
</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
</a> / <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title2']->value, ENT_QUOTES, 'UTF-8', true);?>
</div>
    <div class="fon">
        <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] > 30) {?>
            <div class="breadcrumb">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/tema/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
">Параметры темы</a> / 
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/tema/del/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
">Удалить</a> / 
                <?php if ($_smarty_tpl->tpl_vars['tema']->value['closed'] == 0) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/tema/closed/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
">Закрыть</a> / <?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/tema/open/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
">Открыть</a> / <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['tema']->value['up'] == 0) {?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/tema/up/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
">Закрепить</a><?php } else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/tema/down/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
">Открепить</a><?php }?>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] > 30 || $_smarty_tpl->tpl_vars['user']->value['id'] == $_smarty_tpl->tpl_vars['tema']->value['id_user']) {?>
            <?php if ($_smarty_tpl->tpl_vars['tema']->value['countvote'] == 0) {?>
                <div class="breadcrumb">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/vote">Создать голосование</a>            
                </div> 
            <?php } else { ?>
                <div class="breadcrumb">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/vote/edit">Редактировать голосование</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/vote/del">Удалить голосование</a>           
                </div>        
            <?php }?>
        <?php }?>    
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?> 
        <?php if (isset($_smarty_tpl->tpl_vars['errorvote']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['errorvote']->value;?>
</div><?php }?> 
        
        <?php if ($_smarty_tpl->tpl_vars['tema']->value['countvote'] > 0 && $_smarty_tpl->tpl_vars['user']->value['id']) {?>
            <div class="fon"><h4><i class="fa fa-question-circle"></i> Голосование </h4>
                <p><b><?php echo htmlspecialchars(smarty_modifier_esc($_smarty_tpl->tpl_vars['tema']->value['namequestion']), ENT_QUOTES, 'UTF-8', true);?>
</b></p>
                <?php if ($_smarty_tpl->tpl_vars['checkvote']->value == 0) {?>
                    <form action="<?php echo $_SERVER['REQUEST_URI'];?>
" method="post">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowvote']->value, 'vote');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vote']->value) {
?>
                            <p><label><input type="radio" name="reply" value="<?php echo $_smarty_tpl->tpl_vars['vote']->value['id'];?>
"/> <?php echo htmlspecialchars(smarty_modifier_esc($_smarty_tpl->tpl_vars['vote']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
</label></p>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <p><input type="submit" name="vote" value="Выбрать" class="btn btn-primary"></p>    
                    </form>
                <?php } else { ?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowvote']->value, 'vote');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['vote']->value) {
?>
                        <p><?php echo htmlspecialchars(smarty_modifier_esc($_smarty_tpl->tpl_vars['vote']->value['name']), ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['vote']->value['count']);?>
)</p>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['tema']->value['countvoteall']) {?><div class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/vote/all">Проголосовало: <?php echo $_smarty_tpl->tpl_vars['tema']->value['countvoteall'];?>
</a></div><?php }?>            
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['count']->value > 0) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'rows', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['rows']->value) {
?>
                    <?php ob_start();
echo $_smarty_tpl->tpl_vars['setup']->value['forum_time_edit_post'];
$_prefixVariable1=ob_get_clean();
smarty_function_math(array('equation'=>"x - y",'x'=>$_smarty_tpl->tpl_vars['realtime']->value,'y'=>$_prefixVariable1*60,'assign'=>"edit"),$_smarty_tpl);?>
  
                    <div class="list text" id="<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
">
                        <?php $_smarty_tpl->_subTemplateRender("file:system/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'forum');?>

                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'text');?>

                        <?php if ($_smarty_tpl->tpl_vars['arrayrowfile']->value && $_smarty_tpl->tpl_vars['rows']->value['count_file'] > 0) {?>
                            <h4>Прикрепленные файлы:</h4>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowfile']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['rows']->value['id'] == $_smarty_tpl->tpl_vars['file']->value['id_post']) {?>
                                    <div class="menu">
                                        <?php if ($_smarty_tpl->tpl_vars['file']->value['type'] == 'png' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'jpg' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'jpeg' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'gif') {?>
                                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/load/<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
" title="Скачать файл"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/user/<?php echo $_smarty_tpl->tpl_vars['file']->value['id_user'];?>
/forum/<?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
" class="img-responsive img-mini" /></a></p>
                                                <?php }?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/load/<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
" title="Скачать файл"><i class="fa fa-file"></i> <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file'], ENT_QUOTES, 'UTF-8', true));?>
</a> (<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['file']->value['size']);
if ($_smarty_tpl->tpl_vars['file']->value['loadcounts'] > 0) {?>, скачиваний: <?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['file']->value['loadcounts']);
}?>)
                                    </div>   
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value['timeedit'])) {?><div class="list"><small>Изменил <b><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user_edit'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login_edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['login_edit'];?>
</a></b> (<?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['timeedit']);?>
) [<?php echo $_smarty_tpl->tpl_vars['rows']->value['kedit'];?>
]</small></div><?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] > 30 || $_smarty_tpl->tpl_vars['user']->value['id'] == $_smarty_tpl->tpl_vars['rows']->value['id_user'] && $_smarty_tpl->tpl_vars['rows']->value['time'] > $_smarty_tpl->tpl_vars['edit']->value && $_smarty_tpl->tpl_vars['tema']->value['closed'] == 0) {?>
                            <span class="breadcrumb"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/post/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" title="Редактировать"><i class="fa fa-pencil"></i></a><?php if ($_smarty_tpl->tpl_vars['count']->value > 1 && $_smarty_tpl->tpl_vars['user']->value['level'] > 30) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/setup/post/del/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
" title="Удалить"><i class="fa fa-trash-o"></i></a><?php }?></span>
                                <?php }?>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php } else { ?>
                    <div class="alert alert-error">Сообщений ещё нет...</div>
                    <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['tema']->value['closed'] == 0) {?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
                                    <div class="form-group">
                   <label class="col-sm-2 control-label">Message:</label>
                  <div class="col-sm-10">
                     <textarea name="text" id="summernote" class="form-control"> </textarea>
                     		    </div>
                    </div>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_file');?>

                                    <?php if ($_smarty_tpl->tpl_vars['setup']->value['captcha_add_post'] == 1) {?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:system/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                    <?php }?>
                                    <p><input type="submit" name="ok" value="Отправить" class="btn btn-primary"></p>
                                </form>
                            <?php } else { ?>
                                <div class="alert alert-danger margin-top-10">Для того, чтобы добавлять сообщения, Вам нужно <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/login">авторизоваться</a> или <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/signup">зарегистрироваться</a> на сайте!</div>    
                            <?php }?>
                        <?php } else { ?>
                            <div class="alert alert-danger margin-top-10">Тема закрыта!</div>
                        <?php }?>
                         
                        <?php if ($_smarty_tpl->tpl_vars['count']->value > $_smarty_tpl->tpl_vars['message']->value) {?>
                            <div class="paging_bootstrap pagination"><?php echo $_smarty_tpl->tpl_vars['pagenav']->value;?>
</div>
                        <?php }?> 
                        <?php if ($_smarty_tpl->tpl_vars['tema']->value['count'] > 0) {?>
                            <div class="menu"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/files"><i class="fa fa-file"></i> Все файлы темы (<?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['tema']->value['count']);?>
)</a></div> 
                        <?php }?>
                    </div>
                    <?php }?>
                    <?php echo '<script'; ?>
>
    $(document).ready(function() {
  $('#summernote').summernote();
});
    
<?php echo '</script'; ?>
>
                      <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
