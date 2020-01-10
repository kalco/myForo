<div class="head">{$title2|escape}</div>
<div class="fon">
    {if $tema.countvote == 1}
        <form action="{$url}" method="post" enctype="multipart/form-data" class="fon">
            <div class="alert alert-danger">Are you sure you want to delete this voting?</div>
            <input type="submit" name="ok" value="Yes" class="btn btn-primary"> <input type="submit" name="close" value="No" class="btn btn-primary">
        </form>
    {else}
        <div class="alert alert-danger">>Before editing the vote first <a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}/vote">create</a>!</div>
    {/if}
</div>
<div class="menu"><a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}"><i class="fa fa-angle-left"></i> Thread {$tema.name|escape|esc}</a></div> 