<?php
/* Smarty version 3.1.30, created on 2017-09-09 20:24:44
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59b431ec46d819_90199056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2140c14817778fda39930b6ac11bd27e360325c' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/index.tpl',
      1 => 1493623899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59b431ec46d819_90199056 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="col-sm-12 col-md-9 aw-main-content">
    <div class="aw-user-setting">
    <div class="mod-head common-head">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 - <?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['login'], ENT_QUOTES, 'UTF-8', true));?>
</h2>
    </div>

<div class="mod-body">
    <div class="aw-mod mod-base">
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?><div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div><?php }?>
    <form action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data">
        <div class="aw-mod aw-mod-publish">

            <dl>
					<dt><label>Name:</label></dt>
					<dd class="introduce"><input class="form-control" name="firstname" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['firstname'], ENT_QUOTES, 'UTF-8', true));?>
" type="text"></dd>
			</dl>
			<dl>
					<dt><label>Lastname:</label></dt>
					<dd class="introduce"><input class="form-control" name="lastname" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['lastname'], ENT_QUOTES, 'UTF-8', true));?>
" type="text"></dd>
			</dl>
				<dl>
					<dt><label>City:</label></dt>
					<dd class="introduce"><input class="form-control" name="city" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['city'], ENT_QUOTES, 'UTF-8', true));?>
" type="text"></dd>
			</dl>
				<dl>
					<dt><label>E-mail:</label></dt>
					<dd class="introduce"><input class="form-control" name="email" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['email'], ENT_QUOTES, 'UTF-8', true));?>
" type="email"></dd>
			</dl>
			<dl>
					<dt><label>Phone:</label></dt>
					<dd class="introduce"><input class="form-control" name="phone" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['phone'], ENT_QUOTES, 'UTF-8', true));?>
" type="text"></dd>
			</dl>
			<dl>
					<dt><label>Skype:</label></dt>
					<dd class="introduce"><input class="form-control" name="skype" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['skype'], ENT_QUOTES, 'UTF-8', true));?>
" type="text"></dd>
			</dl>
			<dl>
					<dt><label>ICQ:</label></dt>
					<dd class="introduce"><input class="form-control" name="icq" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['icq'], ENT_QUOTES, 'UTF-8', true));?>
" type="text"></dd>
			</dl>
			<dl>
					<dt><label>About me:</label></dt>
					<dd class="introduce"><input class="form-control" name="about" value="<?php echo smarty_modifier_esc(htmlspecialchars($_smarty_tpl->tpl_vars['user']->value['about'], ENT_QUOTES, 'UTF-8', true));?>
" type="text"></dd>
			</dl>
			<div class="side-bar">
        <dl>
            <dt class="pull-left"> <?php if ($_smarty_tpl->tpl_vars['user']->value['avatar']) {?><img class="aw-border-radius-5" src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/files/user/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
/view-<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
" alt="" id="avatar_src"><?php }?> </dt>
            <dd class="pull-right">
                <h5>Avatar:</h5>
                <input type="file" name="file" class="form-control"/>
							<p>Use jpg、gif or png format</p>
							
            </dd>
        </dl>
        </div>
        <div class="mod-footer clearfix">
<input type="submit" name="ok" value="Save" class="btn btn-large btn-success pull-right">
</div>
        </div>
    </form>
    </div>
</div>

</div>
</div><?php }
}
