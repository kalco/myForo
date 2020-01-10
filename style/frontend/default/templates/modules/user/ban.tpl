<div class="head">{$title2}</div>
<div class="fon">
    <div class="alert alert-info">Ban expires: {$user.bantime|date_format:"d.m.o, H:i"}</div>
    {if $user.banprichina}
        <div class="alert alert-danger">{$banprichina|escape|esc}</div>
    {/if}
</div>

  {include file='system/sidebar.tpl'}
{$smarty.capture.sidebar_global}
      <div class="hidden-xs">
    </div>      
  </div>