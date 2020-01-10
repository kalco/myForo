<div class="panel">
                      <div class="panel-heading">{$title2}</div>
                         <div class="panel-body">
    {if $count > 0}
        {foreach from=$arrayrow item=row}
            <div class="list" id="{$row.id}">
                {if $user.id == $row.id_user}
                    <a href="{$home}/{$row.user_id}-{$row.login2}">{$row.login2|escape|esc}</a> ({$row.time|times})
                    <span class="pull-right">
                        {if $row.status == 0}
                            the application has not been accepted yet
                        {/if}
                        <a href="{$home}/profile/friends/del/{$row.user_id}" title="Delete"><i class="fa fa-trash-o"></i></a>
                    </span>
                {else}
                    <a href="{$home}/{$row.id_user}-{$row.login}">{$row.login|escape|esc}</a> ({$row.time|times})
                    <span class="pull-right">
                        {if $row.status == 0}
                            <a href="{$home}/profile/friends/yes/{$row.id_user}" title="Accept Application"><i class="fa fa-plus-square-o"></i></a>
                            {/if}
                        <a href="{$home}/profile/friends/del/{$row.id_user}" title="Delete"><i class="fa fa-trash-o"></i></a>
                    </span>    
                {/if}
            </div>
        {/foreach}
        {if $count > $message}
            <div class="paging_bootstrap pagination">{$pagenav}</div>
        {/if}    
    {else}
        <div class="alert alert-danger">Friends list is empty ...</div>
    {/if}
</div>
</div>

  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>