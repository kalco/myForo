{if $row.id}
<div class="panel">
                      <div class="panel-heading">{$title2}</div>
                         <div class="panel-body">
        {if $blacklist == 0}
            {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}
            <form action="{$url}" method="post" class="fon" enctype="multipart/form-data">
                <p>Message: <br/>
                    {include file='system/panel.tpl'} 
                    {$smarty.capture.add_comments}
                </p>
                {$smarty.capture.add_file}
                <p><input type="submit" name="ok" value="Send" class="btn btn-primary"></p>
            </form>
        {else}
            <div class="alert alert-danger">User <a href="{$home}/{$row.id}-{$row.login}">{$row.login|escape|esc}</a> send you message</div>
        {/if}
        {if $count > 0}
            {foreach from=$arrayrow item=rows key=k}
                <div class="list text">
                    {include file='system/user.tpl'}
                    {$smarty.capture.comments}
                    {$smarty.capture.text}
                    {if $row.id != $user.id && $rows.read == 0}<hr/><p><font color="red">unread</font></p>{/if}
                    {if $arrayrowfile && $rows.count_file > 0}
                        <h4>File:</h4>
                        {foreach from=$arrayrowfile item=file}
                            {if $rows.id == $file.id_mail}
                                <p class="menu"><a href="{$home}/profile/mail/load/{$file.id}" title="Download file"><i class="fa fa-file"></i> {$file.file|escape|esc}</a> ({$file.size|esc}{if $file.loadcounts > 0}, downloaded: {$file.loadcounts|number}{/if})</p>   
                            {/if}
                        {/foreach}
                    {/if}
                </div>
            {/foreach}
        {else}
            <div class="alert alert-danger">No messages yet ...</div>
        {/if}
        {if $count > $message}
            <div class="paging_bootstrap pagination">{$pagenav}</div>
        {/if} 
    </div>
     </div>
{else}
<div class="panel">
                      <div class="panel-heading">{$title2}</div>
                         <div class="panel-body">
        {if $count > 0}
            {foreach from=$arrayrow item=rows key=k}
                {if $user.id == $rows.id_user}
                    <div class="post-user">
                        <div class="img"><img src="{$home}/files/{if $rows.avatar2}user/{$rows.user_id}/small-{$rows.avatar2}{else}nophoto.jpg{/if}"/></div>
                        <p>
                            {if $rows.login2}<a href="{$home}/profile/mail/{$rows.user_id}">{$rows.login2|esc}</a>{else}<i class="fa fa-trash"></i> User deleted{/if}
                            <br/><a href="{$home}/profile/mail/{$rows.user_id}">Messages: ({$rows.count_mail|number}{if $rows.count_mail_new} <font color="red">+{$rows.count_mail_new|number}</font>{/if})</a>
                        </p>
                    </div>
                {else}
                    <div class="post-user">
                        <div class="img"><img src="{$home}/files/{if $rows.avatar}user/{$rows.id_user}/small-{$rows.avatar}{else}nophoto.jpg{/if}"/></div>
                        <p>
                            {if $rows.login}<a href="{$home}/profile/mail/{$rows.id_user}">{$rows.login|esc}</a>{else}<i class="fa fa-trash"></i> User deleted{/if}
                            <br/><a href="{$home}/profile/mail/{$rows.id_user}">messages: ({$rows.count_mail}{if $rows.count_mail_new|number} <font color="red">+{$rows.count_mail_new|number}</font>{/if})</a>
                        </p>
                    </div>
                {/if}
            {/foreach}
        {else}
            <div class="alert alert-danger">You have not written to anyone yet ...</div>
        {/if}
        {if $count > $message}
            <div class="paging_bootstrap pagination">{$pagenav}</div>
        {/if} 
    </div>
     </div>
{/if}

  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>