<div class="head">{$title2|escape}</div>
<div class="fon">
    {if $tema.countvote == 1}
        {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}  
        <form action="{$url}" method="post" enctype="multipart/form-data" class="fon">
            <p><font color="red">*</font>Question: <br/> <input type="text" class="form-control" name="name" value="{$tema.namevote|esc|escape}"/></p>
                {foreach from=$arrayrowvote item=vote}
                    {counter name=mum assign=num}
                <p>Answer №{$num}:<br/><input type="text" class="form-control" name="reply[{$num}]" value="{$vote.name|esc|escape}"/></p>
                <input type="hidden" name="hidden[{$vote.id}]" value="{$vote.id}">
            {/foreach}
            {foreach from=$array item=reply}
                <p>Answer №{$reply+1}:<br/><input type="text" class="form-control" name="reply[{$reply+1}]" value="{$smarty.post.reply.{$reply+1}}"/></p>
                {/foreach}
            <input type="submit" name="ok" value="Send" class="btn btn-primary">
        </form>
    {else}
        <div class="alert alert-danger">Before editing the vote first <a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}/vote">create</a>!</div>
    {/if}
</div>
<div class="menu"><a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}"><i class="fa fa-angle-left"></i> Thread {$tema.name|escape|esc}</a></div> 