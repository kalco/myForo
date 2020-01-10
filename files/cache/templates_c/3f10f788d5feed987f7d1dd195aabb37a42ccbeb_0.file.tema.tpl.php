<?php
/* Smarty version 3.1.30, created on 2018-07-26 09:20:08
  from "/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/tema.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b597628c23ae3_65620463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f10f788d5feed987f7d1dd195aabb37a42ccbeb' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/frontend/default/templates/modules/forum/tema.tpl',
      1 => 1532589607,
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
function content_5b597628c23ae3_65620463 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
if (!is_callable('smarty_function_math')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/function.math.php';
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
if ($_smarty_tpl->tpl_vars['row']->value['type'] == 1 && empty($_smarty_tpl->tpl_vars['user']->value['id'])) {?>
    <div class="fon">
        <div class="alert alert-danger margin-top-10">In order to add the messages you need <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/login">login</a> or <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/signup">register</a> on site!</div>
    </div>    
<?php } elseif ($_smarty_tpl->tpl_vars['row']->value['type'] == 2 && $_smarty_tpl->tpl_vars['user']->value['level'] < 10) {?>
    <div class="fon">
        <div class="alert alert-danger margin-top-10">This thread is available only for the site administration!</div>
    </div> 
<?php } else { ?>
    <div class="panel">
    	<div class="panel-heading"><h4><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 </h4></div>
    	    		<?php if ($_smarty_tpl->tpl_vars['user']->value['level'] > 50 || $_smarty_tpl->tpl_vars['user']->value['id'] == $_smarty_tpl->tpl_vars['tema']->value['id_user']) {?>
    	<div class="panel-body">
    <span class="pull-right">
          <div class="btn-group">
  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Thread Action <span class="caret"></span>
  </button>
  <div class="dropdown-menu">
  	 <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] > 30) {?>
  	 <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/edit"><i class="fa fa-pencil"></i> Edit Thread</a></li>
  	 <?php if ($_smarty_tpl->tpl_vars['tema']->value['closed'] == 0) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/lock"> <i class="fa fa-lock"></i>  Lock Thread</a></li><?php } else { ?><li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/open"> <i class="fa fa-unlock"></i>  Open Thread</a></li><?php }?>
  	  <?php if ($_smarty_tpl->tpl_vars['tema']->value['up'] == 0) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/sticky"><i class="fa fa-thumb-tack"></i>  Sticky</a></li><?php } else { ?><li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/unsticky"><i class="fa fa-thumb-tack"></i>  Unsticky</a></li><?php }?>
     <li><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/del"><i class="fa fa-trash"></i>  Delete Thread</a></li>
      <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['user']->value['level'] > 50 || $_smarty_tpl->tpl_vars['user']->value['id'] == $_smarty_tpl->tpl_vars['tema']->value['id_user']) {?>
            <?php if ($_smarty_tpl->tpl_vars['tema']->value['countvote'] == 0) {?>
                <li><div class="divider"></div><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/forums/thread-<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/vote-<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><i class="fa fa-question"></i> Add Poll</a></li>
            <?php } else { ?>
        
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/vote/edit">Edit poll</a> | <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/vote/del">Delete poll</a>           
               
            <?php }?>
        <?php }?> 
  </div>
</div>
        </span>
          
     </div> 
        <?php }?> 
    </div> 
    <div class="fon">
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?> 
        <?php if (isset($_smarty_tpl->tpl_vars['errorvote']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['errorvote']->value;?>
</div><?php }?> 
        <?php if ($_smarty_tpl->tpl_vars['tema']->value['countvote'] > 0 && $_smarty_tpl->tpl_vars['user']->value['id']) {?>
            <div class="fon"><h4><i class="fa fa-question-circle"></i> Poll </h4>
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

                        <p><input type="submit" name="vote" value="Vote" class="btn btn-primary"></p>    
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
/vote/all">Voted: <?php echo $_smarty_tpl->tpl_vars['tema']->value['countvoteall'];?>
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
  
                    <div class="panel" id="<?php echo $_smarty_tpl->tpl_vars['rows']->value['id'];?>
">
                        <?php $_smarty_tpl->_subTemplateRender("file:system/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'forum');?>

                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'text');?>

                        <?php if ($_smarty_tpl->tpl_vars['arrayrowfile']->value && $_smarty_tpl->tpl_vars['rows']->value['count_file'] > 0) {?>
                            <h4>Attached files:</h4>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowfile']->value, 'file');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['file']->value) {
?>
                                <?php if ($_smarty_tpl->tpl_vars['rows']->value['id'] == $_smarty_tpl->tpl_vars['file']->value['id_post']) {?>
                                    <div>
                                        <?php if ($_smarty_tpl->tpl_vars['file']->value['type'] == 'png' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'jpg' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'jpeg' || $_smarty_tpl->tpl_vars['file']->value['type'] == 'gif') {?>
                                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/load/<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
" title="Download file"><img src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/user/<?php echo $_smarty_tpl->tpl_vars['file']->value['id_user'];?>
/forum/<?php echo $_smarty_tpl->tpl_vars['file']->value['file'];?>
" class="img-responsive img-mini" /></a></p>
                                                <?php }?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['forum']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['tema']->value['id'];?>
/load/<?php echo $_smarty_tpl->tpl_vars['file']->value['id'];?>
" title="Download file"><i class="fa fa-file"></i> <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['file']->value['file'], ENT_QUOTES, 'UTF-8', true));?>
</a> (<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['file']->value['size']);
if ($_smarty_tpl->tpl_vars['file']->value['loadcounts'] > 0) {?>, downloaded: <?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['file']->value['loadcounts']);
}?>)
                                    </div>   
                                <?php }?>
                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <?php }?>
                       <div class="panel-footer"> <?php if (!empty($_smarty_tpl->tpl_vars['rows']->value['timeedit'])) {?><small class="pull-right">Edited by: <b><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['rows']->value['id_user_edit'];?>
-<?php echo $_smarty_tpl->tpl_vars['rows']->value['login_edit'];?>
"><?php echo $_smarty_tpl->tpl_vars['rows']->value['login_edit'];?>
</a></b> (<?php echo smarty_modifier_times($_smarty_tpl->tpl_vars['rows']->value['timeedit']);?>
) [<?php echo $_smarty_tpl->tpl_vars['rows']->value['kedit'];?>
]</small><?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value['id'] && $_smarty_tpl->tpl_vars['rows']->value['id_user'] != $_smarty_tpl->tpl_vars['user']->value['id']) {?>
                       <button class="btn btn-danger btn-xs"><i class="fa fa-thumbs-down"></i></button> 
                       <?php }?>
                       <span class="label label-default"><i class="fa fa-thumbs-up"></i> 2</span>
                       </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                <?php } else { ?>
                    <div class="alert alert-error">No messages yet ...</div>
                    <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['tema']->value['closed'] == 0) {?>
                            <?php if ($_smarty_tpl->tpl_vars['user']->value['id']) {?>
                                <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data" class="fon">
                                    <div class="form-group">
                   <label class="col-sm-1 control-label">Message:</label>
                     <input name="text" type="hidden">
                  <div class="col-sm-11">
                  	<div id="editor-container"></div>
                     		    </div>
                    </div>
                                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'add_file');?>

                                    <?php if ($_smarty_tpl->tpl_vars['setup']->value['captcha_add_post'] == 1) {?>
                                        <?php $_smarty_tpl->_subTemplateRender("file:system/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                    <?php }?>
                                    <p><input type="submit" name="ok" value="Send" class="btn btn-primary"></p>
                                </form>
                            <?php } else { ?>
                                <div class="alert alert-danger margin-top-10">In order to add the messages you need <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/login">login</a> or <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/signup">register</a> on site!</div>    
                            <?php }?>
                        <?php } else { ?>
                            <div class="alert alert-danger margin-top-10">Thread is locked!</div>
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
/files"><i class="fa fa-file"></i> All files in this thread (<?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['tema']->value['count']);?>
)</a></div> 
                        <?php }?>
                    </div>
                    <?php }?>

                      <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
