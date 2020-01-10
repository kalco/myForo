<div class="head"><a href="{$home}/profile">...</a> / <a href="{$home}/profile/bookmark">bookmark</a> / {$title2}</div>
<div class="fon">{if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}</div>
<div class="menu"><a class="links" href="{$smarty.server.HTTP_REFERER}"><i class="fa fa-angle-left"></i> Back</a></div>
  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>