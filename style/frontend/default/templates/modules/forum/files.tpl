<div class="head">{$tema.name|escape|esc} | Files</div>
<div class="fon">
    {if $count > 0}
        <div class="list text">
            {foreach from=$arrayrowfile item=file}
                <p class="menu"><a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}/load/{$file.id}" title="Download file"><i class="fa fa-file"></i> {$file.file|escape|esc}</a> ({$file.size|escape|esc}{if $file.loadcounts > 0}, downloaded: {$file.loadcounts|number}{/if})</p>   
            {/foreach}
        </div>
    {else}
        <div class="alert alert-danger">There are no files in this thread yet ...</div>
    {/if}

    {if $count > $message}
        <div class="paging_bootstrap pagination">{$pagenav}</div>
    {/if}     
</div>