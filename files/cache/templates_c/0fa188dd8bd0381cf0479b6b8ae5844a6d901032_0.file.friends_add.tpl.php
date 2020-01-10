<?php
/* Smarty version 3.1.30, created on 2017-09-23 23:40:42
  from "/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/friends_add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c6d4daa50a33_74784565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fa188dd8bd0381cf0479b6b8ae5844a6d901032' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/frontend/default/templates/modules/profile/friends_add.tpl',
      1 => 1506202187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:system/sidebar.tpl' => 1,
  ),
),false)) {
function content_59c6d4daa50a33_74784565 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile">Мой кабинет</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/profile/friends">Друзья</a> / <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</div>
<div class="fon">
    <?php if ($_smarty_tpl->tpl_vars['blacklist']->value == 0) {?>
        <div class="alert alert-success">Заявка на добавление в друзья успешно отправлена!</div>
    <?php } else { ?>
        <div class="alert alert-danger">Вы не можете добавить пользователя в друзья так как находитесь у него в черном списке!</div>    
    <?php }?>
</div>

  <?php $_smarty_tpl->_subTemplateRender("file:system/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                           <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_profile');?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'sidebar_global');?>


      <div class="hidden-xs">
    </div>      
  </div><?php }
}
