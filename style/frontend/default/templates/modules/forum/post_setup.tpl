<div class="head">{$title2}</div>
<div class="fon">
    {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}  
    <form action="{$url}" method="post" enctype="multipart/form-data" class="fon">
        <p><font color="red">*</font>message:<br/> 
            {include file='system/panel.tpl'}
            {$smarty.capture.edit_comments}
        </p>
        {if $arrayrowfile}
            <p>Choose file for delete:</p>
            {foreach from=$arrayrowfile item=file}
                <label><input type="checkbox" value="{$file.id}" name="del[]"/> {$file.file|escape|esc}</label><br/>
                {/foreach}
            {/if}
        <p><input type="submit" name="ok" value="Send" class="btn btn-primary"></p>
    </form>
</div>
<div class="menu"><a href="{$home}/forums/thread-{$tema.id}?page={$starts}#{$row.id}"><i class="fa fa-angle-left"></i> Thread {$tema.name|escape|esc}</a></div> 