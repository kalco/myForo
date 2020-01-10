<?php
/* Smarty version 3.1.30, created on 2017-05-04 21:17:27
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/templates/view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590b70376db816_10789794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1ffffca943b73508b56ecc581d44d03a437258c' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/templates/view.tpl',
      1 => 1493624542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590b70376db816_10789794 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="head"><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
">Административная панель</a> / <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates"><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</a> / <?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
</div>
<div class="fon">
    <?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?><div class="alert alert-danger">Включёно сжатие HTML. Перед редактированием его рекомендуется <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting">выключить</a>.</div><?php }?>             
    <h3 style="text-align: center;">Главные шаблоны</h3>
    <table width="100%" border="2" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
        <tr><th style="text-align:center;"><b>Название шаблона </b></th>
            <th style="text-align:center;"><b>Редактор</b></th>
        </tr>
        <tr>
            <td style="text-align:center;">Главная страница</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/index.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Шапка сайта</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/system/header.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Футер сайта</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/system/footer.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Сайдбар</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/system/sidebar.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">404</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/error.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Авторизация</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/login.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Регистрация</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/signup.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Восстановление пароля</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/lostpass.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Список пользователей</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/users.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
    </table> 
    <h3 style="text-align: center;">Активность пользователя</h3>
    <table width="100%" border="2" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
        <tr><th style="text-align:center;"><b>Название шаблона </b></th>
            <th style="text-align:center;"><b>Редактор</b></th>
        </tr>
        <tr>
            <td style="text-align:center;">Посты на форуме</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/active/posts.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Темы на форуме</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/active/thems.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
    </table>
    <h3 style="text-align: center;">Личный кабинет пользователя</h3>
    <table width="100%" border="2" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
        <tr><th style="text-align:center;"><b>Название шаблона </b></th>
            <th style="text-align:center;"><b>Редактор</b></th>
        </tr>
        <tr>
            <td style="text-align:center;">Главная страница</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/index.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Черный список</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/blacklist.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Список постов</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/blog.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Добавление поста</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/blog_add.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Удаление поста</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/blog_del.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Редактирование поста</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/blog_edit.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Закладки</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/bookmark.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Добавление закладки</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/bookmark_add.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Удаление закладки</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/bookmark_del.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Редактирование закладки</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/bookmark_edit.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Друзья</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/friends.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Добавление в друзья</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/friends_add.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Удаление друга</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/friends_del.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Подтверждение заявки на добавление в друзья</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/friends_yes.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">История авторизаций</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/hiestory.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Почта</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/mail.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Анкета</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/my.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Уведомления</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/notice.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Смена пароля</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/security.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
        <tr>
            <td style="text-align:center;">Настройки</td> 
            <td style="text-align:center;">   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/setup.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a>
        </tr>
    </table>
    <h3 style="text-align: center;">Форум</h3>
    <table width="100%" border="2" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
        <tr><th style="text-align:center;"><b>Название шаблона</b></th>
            <th style="text-align:center;"><b>Редактор</b></th>
        </tr>	
        <tr>	
            <td style="text-align:center;">Главная страница</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/index.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Добавление темы</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/add.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Создание раздела/подраздела</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/add_forum.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Файлы темы</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/files.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Просмотр раздела</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/forum.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Новые посты</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/new_posts.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Новые темы</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/new_thems.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Удаление поста</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/post_del.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Цитирование поста</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/post_quote.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Ответ на пост</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/post_reply.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Параметры поста</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/post_setup.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Поиск</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/search.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Параметры раздела/подраздела</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/setup.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Удаление раздела/подраздела</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/setup_del.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Тема</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/tema.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Удаление темы</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/tema_del.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Параметры темы</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/tema_setup.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Создание голосования</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/vote.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Список проголосовавших</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/vote_all.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Удаление голосования</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/vote_del.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Редактирование голосования</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/vote_edit.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
    </table> 
    <h3 style="text-align: center;">Онлайн</h3>
    <table width="100%" border="2" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
        <tr><th style="text-align:center;"><b>Название шаблона</b></th>
            <th style="text-align:center;"><b>Редактор</b></th>
        </tr>	
        <tr>	
            <td style="text-align:center;">Пользователи</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/online/index.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Гости</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/online/guest.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
    </table> 
    <h3 style="text-align: center;">Прочие шаблоны</h3>
    <table width="100%" border="2" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
        <tr><th style="text-align:center;"><b>Название шаблона</b></th>
            <th style="text-align:center;"><b>Редактор</b></th>
        </tr>	
        <tr>	
            <td style="text-align:center;">Активация аккаунта</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/activation.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Бан пользователя</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/ban.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">BB коды</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/bbcode.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Смайлы</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/smiles.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <tr>	
            <td style="text-align:center;">Смайлы пользователя</td>
            <td style="text-align:center;">
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/smiles_my.tpl" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
        </tr>
    </table>    
    <h3 style="text-align: center;">Стили</h3>
    <table width="100%" border="2" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
        <tr><th style="text-align:center;"><b>Название шаблона</b></th>
            <th style="text-align:center;"><b>Редактор</b></th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowcss']->value, 'css');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
?>		
            <tr>	
                <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['css']->value;?>
</td>
                <td style="text-align:center;">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" title="Редактировать"><i class="fa fa-pencil"></i></a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </table>                   
</div>   <?php }
}
