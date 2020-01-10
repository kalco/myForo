<div class="head">{$title2}</div>
<div class="fon">
    <form action="{$url}" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Are you sure you want to delete this bookmark?</div>
        <input type="submit" name="ok" value="Yes" class="btn btn-primary"> <input type="submit" name="close" value="No" class="btn btn-primary">
    </form>
</div>
  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>