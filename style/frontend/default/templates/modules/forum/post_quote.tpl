{include file='system/panel.tpl'}
<div class="head">{$title2}</div>
<div class="fon">
    {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}  
    <form action="{$url}" method="post" enctype="multipart/form-data" class="fon">
        <p><font color="red">*</font>Message:<br/> 
            <textarea name="text"{if $smarty.session.device == 'web'} id="bbcode" rows="15"{/if} class="form-control">{if empty($smarty.post.text)}[quote][b]{$row.login|escape|esc}[/b], [i]{$row.time|times}[/i]&#13;&#10;{$row.text|escape|esc|replace:'[quote]':''|replace:'[/quote]':''}[/quote]&#13;&#10;{else}{$smarty.post.text}{/if}</textarea>
            {$smarty.capture.smile}   
        </p>
        <input type="hidden" name="quote" value="1">
        {$smarty.capture.add_file}
        {if $setup.captcha_add_post == 1}
            {include file='system/captcha.tpl'}
        {/if}
        <p><input type="submit" name="ok" value="Send" class="btn btn-primary"></p>
    </form>
</div>
<div class="menu"><a href="{$home}/forums/thread-{$tema.id}?page={$starts}#{$row.id}"><i class="fa fa-angle-left"></i> Thread {$tema.name|escape|esc}</a></div> 