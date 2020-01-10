<div class="panel">
                      <div class="panel-heading">{$title2}</div>
                         <div class="panel-body">
    {if $count > 0}
        {foreach from=$arrayrow item=row key=k}
         <div class="row" id="{$row.id}">
         <div class="col-sm-9 text-justify">
           <h4><a href="{$home}/{$row.user_id}-{$row.login}">{$row.login|esc}</a></h4>
                {$text.$k|escape|esc|nl2br}
                 </div>
               <div class="col-sm-3 ">
                             <span class="label label-default">{$row.time|times}</span>     
                             </div>
       </div> 
       <hr>
        {/foreach}

        {if $count > $message}
            <div class="paging_bootstrap pagination">{$pagenav}</div>
        {/if}    
    {else}
        <div class="alert alert-danger">No notifications yet ...</div>
    {/if}
</div>
</div>
  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>
  


