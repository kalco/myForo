<div class="head">{$title2}</div>
<div class="fon">
    <div class="alert alert-success">Request to friends from the user <a href="{$home}/{$row.id}-{$row.login}">{$row.login|escape|esc}</a> accepted!!</div>
</div>

  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>