<div class="head">{$title2|escape}</div>
<div class="fon">
    <form action="{$url}" method="post" enctype="multipart/form-data" class="fon">
        <p><font color="red">*</font>Title: <br/> <input type="text" class="form-control" name="name" value="{$tema.name|escape|esc}"/></p>
        <p><font color="red">*</font>
           Category:<br/>
            <select name="forum" class="form-control">
                {foreach from=$arrayrowr item=rowr}
                    <optgroup label="{$rowr.name|escape|esc}">   
                        {foreach from=$arrayrowr item=rowcat}
                            {if $rowr.id == $rowcat.realid}
                                <option value="{$rowcat.id}"{if $rowcat.id == $tema.id_tema} selected="selected"{/if}>{$rowcat.name|escape|esc}</option>
                            {/if}
                        {/foreach}
                    </optgroup>  
                {/foreach}   
            </select>
        </p>
        <p><font color="red">*</font>Position: <br/> <input type="text" class="form-control" name="realid" value="{$tema.realid|escape|esc}"/></p>
        <input type="submit" name="ok" value="Send" class="btn btn-primary">
    </form>
</div>
<div class="menu"><a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}"><i class="fa fa-angle-left"></i> Thread {$tema.name|escape|esc}</a></div> 