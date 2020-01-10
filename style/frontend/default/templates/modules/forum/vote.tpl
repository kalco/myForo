<div class="head">{$title2|escape}</div>
<div class="fon">
    {if $tema.countvote == 0}
        {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}  
        <form action="{$url}" method="post" enctype="multipart/form-data" class="fon">
            <p><font color="red">*</font>Question: <br/> <input type="text" class="form-control" name="name" value="{$smarty.post.name}"/></p>
                {foreach from=$array item=reply}
                    {counter name=mum assign=num}
                <p>Answer №{$num}:<br/><input type="text" class="form-control" name="reply[{$num}]" value="{$smarty.post.reply.$num}"/></p>
                {/foreach}
            <input type="submit" name="ok" value="Send" class="btn btn-primary">
        </form>
    {else}
        <div class="alert alert-danger">Voting has already been created!</div>
    {/if}
</div>
<div class="menu"><a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}"><i class="fa fa-angle-left"></i> Thread {$tema.name|escape|esc}</a></div> 