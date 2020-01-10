<?php
/* Smarty version 3.1.30, created on 2017-09-24 07:42:43
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/lostpass.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c745d3c8beb9_63240320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af91508e2fe94b1df8ef774e5ec85aab2334d17d' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/lostpass.tpl',
      1 => 1506203324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59c745d3c8beb9_63240320 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel panel-primary">
          <div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="panel-body">
        <div class="alert alert-info">На Ваш e-mail будет отправлена ссылка для сброса пароля.</div>
         <?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?><div class="alert alert-success"><?php echo $_smarty_tpl->tpl_vars['ok']->value;?>
</div><?php }?>    
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
        <?php if ($_POST['ok'] && !isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-success">Ссылка для восстановления пароля успешно выслана на Ваш e-mail!</div><?php }?>
         <div class="form-horizontal">
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post">
            <div class="fieldset">
                                 <div class="form-group">
                          <label class="col-lg-3" for="field_password">Email</label>
                           <div class="col-lg-8">
                              <input name="email" value="<?php echo $_POST['email'];?>
" class="form-control" type="email" required>
                         </div>
                      </div>
               <div class="form-group">
                          <label class="control-label col-sm-3 ">&nbsp;</label>
          								  <div class="col-sm-9">  
                              <small>You know your password?  <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/login">Log in</a></small>
                            </div>
                          </div>
            <input class="btn btn-primary center-block" type="submit" name="ok" value="Reset password">

           </div>
        </form>

    </div>
        </div>
    </div>
  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>

      <div class="hidden-xs">
    </div>      
  </div>
<?php }
}
