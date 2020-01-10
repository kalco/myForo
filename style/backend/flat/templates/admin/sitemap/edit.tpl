<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
     	<code> {$file} </code>
    </div>
</div>

    {if isset($error)}<div class="alert alert-danger">
            <button data-dismiss="alert" class="close close-sm" type="button"><i class="fa fa-times"></i></button>{$error}</div>
            {else}
        <form action="{$home}{$panel}/sitemap/edit/{$file}" method="post" class="form-horizontal">
        	 <div class="form-group">
            <textarea class="form-control" rows="20" name="text"/>{$template|escape}</textarea>
            </div>
            <input type="submit" name="ok" value="{$lang.a_edit}" class="btn btn-primary">
        </form>	
    {/if} 
{if $setup.compress != 3}<div class="alert alert-danger">Включёно сжатие HTML. Перед редактированием его рекомендуется <a href="{$home}{$panel}/setting">выключить</a>.</div>{/if} 
