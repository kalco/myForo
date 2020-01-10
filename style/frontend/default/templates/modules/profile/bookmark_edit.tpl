<div class="head">{$title2}</div>
<div class="fon">
{if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}
<form action="{$url}" method="post" class="fon" enctype="multipart/form-data">
    <p>Name: <br/><input type="text" name="name" value="{$row.name|escape|esc}" class="form-control"/></p>
    <p>Link: <br/><textarea name="url" class="form-control">{$row.url|escape|esc}</textarea></p>
    <p><input type="submit" name="ok" value="Save" class="btn btn-primary"></p>
</form>
</div>

  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>