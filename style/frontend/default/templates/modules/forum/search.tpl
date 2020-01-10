<div class="head">{$title2}</div>
<div class="fon">

    {if isset($error)}
        <div class="alert alert-danger">{$error}</div>
    {/if}
    {if $count > 0 && !isset($error) && $search}
        <div class="alert alert-info">Search results for: <b>{$search|escape|esc}</b></div>
        {foreach from=$arrayrow item=rows key=k}
            <div class="list">
                {if $rows.closed == 1}<i class="fa fa-close"></i>{/if}
                {if $rows.up == 1}<i class="fa fa-exclamation-triangle"></i>{/if}
                <a href="{$home}/{$rows.id_razdel}/{$rows.id_forum}/{$rows.id}">{$rows.name|escape|esc} ({$rows.countpost})</a> 
                <a href="{$home}/{$rows.id_razdel}/{$rows.id_forum}/{$rows.id}?page={$starts.$k}#{$rows.id_post_last}" title="Last posts"><i class="fa fa-angle-double-right"></i></a>
                <a href="{$home}/{$rows.id_user_last}-{$rows.login}">{$rows.login|escape|esc}</a><span class="pull-right">({$rows.time|times})</span>
            </div>
        {/foreach}
        {if $count > $message}
            <div class="paging_bootstrap pagination">{$pagenav}</div>
        {/if} 
    {/if}   
    {if $count == 0 && !isset($error) && $search}
        <div class="alert alert-danger">Nothing found on your request!</div>
    {/if}
</div>

  {include file='system/sidebar.tpl'}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>
  