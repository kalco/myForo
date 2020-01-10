<?php
/* Smarty version 3.1.30, created on 2017-05-04 11:15:25
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/signup.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590af12da7a389_34117756',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8411349af6f8501b99f02749e915c4db7fc4a69' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/user/signup.tpl',
      1 => 1493623899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/captcha.tpl' => 1,
  ),
),false)) {
function content_590af12da7a389_34117756 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-sm-12 col-md-12 aw-main-content">
<div class="mod-body">
    <div class="mod-head common-head">
							<h2><i class="fa fa-sign-in"></i><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
						</div>
						<div class="aw-register-box">
						    <?php if ($_smarty_tpl->tpl_vars['setup']->value['registration'] == 1) {?> 
        <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post">
            <ul>
            <li><input id="aw-register-user-name" class="form-control" value="<?php echo $_POST['login'];?>
" placeholder="Username" name="login" type="text" required></li>
            <li><input id="aw-register-user-name" class="form-control" value="<?php echo $_POST['email'];?>
" placeholder="Username" name="email" type="email" required></li>
            <li><input id="aw-register-user-name" class="form-control" alue="<?php echo $_POST['password'];?>
" placeholder="Password" name="password" type="password" required></li>
             <?php if ($_smarty_tpl->tpl_vars['setup']->value['captcha_signup'] == 1) {?>
                        <?php $_smarty_tpl->_subTemplateRender("file:system/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <?php }?>
            <li class="clearfix">
            <input class="btn btn-large btn-blue btn-block" type="submit" name="ok" value="Sign up"></li>
                        <li class="last">
                            Уже зарегистрированы? <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/user/login">Войти</a>
            </li>
            </ul>
        </form>
         <?php if ($_smarty_tpl->tpl_vars['setup']->value['activation'] == 1) {?><div class="alert alert-info">На Ваш e-mail будет отправлена ссылка для активации аккаунта.</div><?php }?>
         <?php } else { ?>
            <div class="alert alert-danger">Регистрация на сайте отключена!</div>
        <?php }?>
    </div>
        </div>
    </div>
</div><?php }
}
