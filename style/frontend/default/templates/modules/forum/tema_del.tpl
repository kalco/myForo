<div class="head">{$title2|escape}</div>
<div class="fon">
    <form action="{$url}" method="post" enctype="multipart/form-data" class="fon">
        <div class="alert alert-danger">Are you sure you want to delete this thread?</div>
        <input type="submit" name="ok" value="Yes" class="btn btn-primary"> <input type="submit" name="close" value="No" class="btn btn-primary">
    </form>
</div>
<div class="menu"><a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}"><i class="fa fa-angle-left"></i> Thread {$tema.name|escape|esc}</a></div> 