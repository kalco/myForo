<div class="head">{$title2}</div>
<div class="fon">
    {$text|escape|esc|nl2br}
<form action="{$url}" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Are you sure you want to delete this post?</div>
        <input type="submit" name="ok" value="Yes" class="btn btn-primary"> <input type="submit" name="close" value="No" class="btn btn-primary">
    </form>
</div>
<div class="menu"><a href="{$home}/{$forum.id}/{$rows.id}/{$tema.id}?page={$starts}#{$row.id}"><i class="fa fa-angle-left"></i> Thread {$tema.name|esc}</a></div> 