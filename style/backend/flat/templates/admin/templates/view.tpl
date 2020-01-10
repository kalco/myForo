<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
       <code>{$dirview}</code>
    </div>
</div>

    {if $setup.compress != 3}<div class="alert alert-danger">Включёно сжатие HTML. Перед редактированием его рекомендуется <a href="{$home}{$panel}/setting">выключить</a>.</div>{/if}             
    <table class="table table-bordered"> <thead>
        <tr><th><b>Название шаблона </b></th>
            <th>{$lang.a_action}</th>
        </tr>
         </thead><tbody>
        <tr>
            <td>index.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/index.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>header.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/system/header.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>footer.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/system/footer.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>sidebar.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/system/sidebar.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>404</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/error.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>user/login.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/user/login.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>user/signup.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/user/signup.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>user/lostpass.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/user/lostpass.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>user/users.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/user/users.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>user/activation.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/user/activation.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>user/ban.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/user/ban.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>user/bbcode.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/user/bbcode.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>user/smiles.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/user/smiles.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>user/smiles_my.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/user/smiles_my.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
                <tr>
            <td>active/posts.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/active/posts.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>active/thems.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/active/thems.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
              <tr>
            <td>profile/index.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/index.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/blacklist.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/blacklist.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/bookmark.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/bookmark.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/bookmark_add.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/bookmark_add.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/bookmark_del.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/bookmark_del.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/bookmark_edit.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/bookmark_edit.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/friends.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/friends.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/friends_add.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/friends_add.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/friends_del.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/friends_del.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/friends_yes.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/friends_yes.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/hiestory.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/hiestory.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/mail.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/mail.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/my.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/my.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/notice.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/notice.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/security.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/security.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
        <tr>
            <td>profile/setup.tpl</td> 
            <td>   
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/profile/setup.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
        </tr>
                <tr>	
            <td>forum/add.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/add.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>

        <tr>	
            <td>forum/files.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/files.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/forum.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/forum.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/new_posts.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/new_posts.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/new_thems.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/new_thems.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/post_del.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/post_del.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/post_quote.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/post_quote.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/post_reply.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/post_reply.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/post_setup.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/post_setup.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/search.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/search.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/setup.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/setup.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/setup_del.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/setup_del.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/tema.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/tema.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/tema_del.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/tema_del.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/tema_setup.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/tema_setup.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/vote.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/vote.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/vote_all.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/vote_all.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/vote_del.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/vote_del.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>forum/vote_edit.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/forum/vote_edit.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
         <tr>	
            <td>online/index.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/online/index.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
        <tr>	
            <td>online/guest.tpl</td>
            <td>
                <a href="{$home}{$panel}/templates/edit?template={$dirview}/templates/modules/online/guest.tpl" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
        </tr>
                {foreach from=$arrayrowcss item=css}		
            <tr>	
                <td><code>{$css}</code></td>
                <td>
                    <a href="{$home}{$panel}/templates/edit?template={$dirview}/assets/css/{$css}" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
            </tr>
        {/foreach}
        </tbody> 
    </table> 