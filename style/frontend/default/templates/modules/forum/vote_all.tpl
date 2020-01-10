<div class="head">{$title2|escape}</div>
<div class="fon">
    {if $count > 0}
        {foreach from=$arrayrow item=rows}
            <div class="list text">
                {include file='system/user.tpl'}
                {$smarty.capture.voteforum}
            </div>
        {/foreach}
    {else}
        <div class="alert alert-danger">Nobody voted yet ...</div>
    {/if}
    {if $count > $message}
        <div class="paging_bootstrap pagination">{$pagenav}</div>
    {/if} 
</div>
<div class="menu"><a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}"><i class="fa fa-angle-left"></i> Thread {$tema.name|escape|esc}</a></div> 