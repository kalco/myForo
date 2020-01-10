<div class="panel">
                      <div class="panel-heading">{$title2}</div>
                         <div class="panel-body">
    {if $count > 0}
        {foreach from=$arrayrow item=row}
            <div class="list" id="{$row.id}">
                <a href="{$row.url|esc}">{$row.name|escape|esc}</a> ({$row.time|times})
                <span class="pull-right">
                    <a href="{$home}/profile/bookmark/edit/{$row.id}" title="Edit"><i class="fa fa-pencil"></i></a>
                    <a href="{$home}/profile/bookmark/del/{$row.id}" title="Delete"><i class="fa fa-trash-o"></i></a>
                </span>
            </div>
        {/foreach}
        {if $count > $message}
            <div class="paging_bootstrap pagination">{$pagenav}</div>
        {/if}    
    {else}
        <div class="alert alert-danger">The bookmark is empty ...</div>
    {/if}
</div>
</div>
  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>

