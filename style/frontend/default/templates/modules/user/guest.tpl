<div class="panel">
    <div class="panel-heading">{$title2}</div> 

<div class="panel-body">
<div class="container-fluid container-small">
<div class="row page_account_gifts">
    {if $count > 0}
        {foreach from=$arrayrow item=rows}
<div class="loop_gift col-lg-3 col-md-4 col-sm-4 col-xs-12 gift_entry">

                {include file='system/user.tpl'}
               {$smarty.capture.comments}
            </div>
        {/foreach}
        {if $count > $message}
            <div class="page-control">{$pagenav}</div>
        {/if}    
    {else}
        <div class="alert alert-danger">No users yet ...</div>
    {/if}
</div>
</div>
</div>
</div>
       
  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_users}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>

