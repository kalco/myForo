{$title2}
<div class="fon">
    {include file='system/user.tpl'}
    {$smarty.capture.forum}
    {$text|esc|bbcode}
</div>
<div class="menu"><a href="{$home}/forums/thread-{$tema.id}?page={$starts}#{$rows.id}"><i class="fa fa-angle-left"></i> Thread {$tema.name|escape|esc}</a></div> 