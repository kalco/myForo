{if $count > 0}
    {foreach from=$arrayrow item=rows key=k}
        <div class="list" id="{$rows.id}">
            {include file='system/user.tpl'}
            {$smarty.capture.forum}
            {$smarty.capture.text}
            {if $arrayrowfile && $rows.count_file > 0}
                <h4>Files:</h4>
                {foreach from=$arrayrowfile item=file}
                    {if $rows.id == $file.id_post}
                        <p class="menu"><a href="{$home}/forums/thread-{$rows.id_tema}/load/{$file.id}" title="Download file"><i class="fa fa-file"></i> {$file.file|esc}</a> ({$file.size|esc}{if $file.loadcounts > 0}, скачиваний: {$file.loadcounts|number}{/if})</p>   
                    {/if}
                {/foreach}
            {/if}
            <div class="menu"><a href="{$home}/forums/thread-{$rows.id_tema}"><i class="fa fa-angle-right"></i> In thread: {$rows.nametema|escape|esc}</a></div>
        </div>
    {/foreach}
{else}
   <div class="text-center margin-t-15">There are no posts yet ...</div>
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
