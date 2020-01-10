{if $count > 0}
    {foreach from=$arrayrow item=rows key=k}
        <div class="list">
            {if $rows.closed == 1}<i class="fa fa-close"></i>{/if}
            {if $rows.up == 1}<i class="fa fa-exclamation-triangle"></i>{/if}
            <a href="{$home}/forums/thread-{$rows.id}">{$rows.name|escape|esc} ({$rows.countpost})</a> 
            <a href="{$home}/forums/thread-{$rows.id}?page={$starts.$k}#{$rows.id_post_last}" title="Последнее сообщение"><i class="fa fa-angle-double-right"></i></a>
            <a href="{$home}/{$rows.id_user_last}-{$rows.login}">{$rows.login|escape|esc}</a>
            <span class="pull-right hidden-xs hidden-sm">{$rows.time|times}</span>
            <span class="menu visible-xs">{$rows.time|times}</span>
        </div>
    {/foreach}
{else}
   <div class="text-center margin-t-15">There are no threads yet ...</div>
{/if}

{if $count > $message}
    <div class="paging_bootstrap pagination">{$pagenav}</div>
{/if}
   </div>
   </div>
 {include file='system/sidebar.tpl'}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>