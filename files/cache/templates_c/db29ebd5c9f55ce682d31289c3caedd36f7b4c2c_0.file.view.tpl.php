<?php
/* Smarty version 3.1.30, created on 2017-12-15 11:31:17
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/templates/view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a338855cf2995_73897475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db29ebd5c9f55ce682d31289c3caedd36f7b4c2c' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/templates/view.tpl',
      1 => 1513326676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a338855cf2995_73897475 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
       <code><?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
</code>
    </div>
</div>

    <?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?><div class="alert alert-danger">Включёно сжатие HTML. Перед редактированием его рекомендуется <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting">выключить</a>.</div><?php }?>             
    <table class="table table-bordered"> <thead>
        <tr><th><b>Название шаблона </b></th>
            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_action'];?>
</th>
        </tr>
         </thead><tbody>
        <tr>
            <td>index.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/index.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>header.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/system/header.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>footer.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/system/footer.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>sidebar.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/system/sidebar.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>404</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/error.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>user/login.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/login.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>user/signup.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/signup.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>user/lostpass.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/lostpass.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>user/users.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/users.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>user/activation.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/activation.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>user/ban.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/ban.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>user/bbcode.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/bbcode.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>user/smiles.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/smiles.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>user/smiles_my.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/user/smiles_my.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
                <tr>
            <td>active/posts.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/active/posts.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>active/thems.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/active/thems.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
              <tr>
            <td>profile/index.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/index.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/blacklist.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/blacklist.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/bookmark.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/bookmark.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/bookmark_add.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/bookmark_add.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/bookmark_del.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/bookmark_del.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/bookmark_edit.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/bookmark_edit.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/friends.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/friends.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/friends_add.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/friends_add.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/friends_del.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/friends_del.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/friends_yes.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/friends_yes.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/hiestory.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/hiestory.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/mail.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/mail.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/my.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/my.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/notice.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/notice.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/security.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/security.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/setup.tpl</td> 
            <td>   
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/profile/setup.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
                <tr>	
            <td>forum/add.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/add.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>

        <tr>	
            <td>forum/files.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/files.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/forum.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/forum.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/new_posts.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/new_posts.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/new_thems.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/new_thems.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/post_del.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/post_del.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/post_quote.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/post_quote.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/post_reply.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/post_reply.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/post_setup.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/post_setup.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/search.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/search.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/setup.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/setup.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/setup_del.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/setup_del.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/tema.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/tema.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/tema_del.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/tema_del.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/tema_setup.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/tema_setup.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/vote.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/vote.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/vote_all.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/vote_all.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/vote_del.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/vote_del.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/vote_edit.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/forum/vote_edit.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
         <tr>	
            <td>online/index.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/online/index.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>online/guest.tpl</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/templates/modules/online/guest.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowcss']->value, 'css');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['css']->value) {
?>		
            <tr>	
                <td><code><?php echo $_smarty_tpl->tpl_vars['css']->value;?>
</code></td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/templates/edit?template=<?php echo $_smarty_tpl->tpl_vars['dirview']->value;?>
/assets/css/<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><span class="glyphicon glyphicon-pencil"></span></a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </tbody> 
    </table> <?php }
}
