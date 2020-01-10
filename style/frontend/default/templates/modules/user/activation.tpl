<div class="head">{$title2}</div>
<div class="fon">
    {if $error}
        <div class="alert alert-danger">{$error}</div>
    {else}
        <div class="alert alert-success">You have successfully activated your account. Now you can login.</div>
    {/if}
</div>

  {include file='system/sidebar.tpl'}
{$smarty.capture.sidebar_global}
      <div class="hidden-xs">
    </div>      
  </div>