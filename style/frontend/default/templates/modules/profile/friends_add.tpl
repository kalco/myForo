<div class="head">{$title2}</div>
<div class="fon">
    {if $blacklist == 0}
        <div class="alert alert-success">Friend request successfully sent!</div>
    {else}
        <div class="alert alert-danger">You can not add as a friend as you are on his blacklist!</div>    
    {/if}
</div>

  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>