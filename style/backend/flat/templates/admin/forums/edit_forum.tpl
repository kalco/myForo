<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
        <p>{$description}</p>
    </div>
</div>
<div class="row">
   {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}    
<form action="{$url}" method="post" enctype="multipart/form-data" class="fon">
    <div class="form-group">
                                    <label>{$lang.a_perms}:</label>
                                        <select name="type" class="form-control">
                <option value="0"{if $row.type == 0} selected="selected"{/if}>{$lang.a_perms_all}</option>
                <option value="1"{if $row.type == 1} selected="selected"{/if}>{$lang.a_perms_users}</option>
                <option value="2"{if $row.type == 2} selected="selected"{/if}>{$lang.a_perms_admins}</option>
            </select>
    </div>
 <div class="form-group">
                                    <label>{$lang.a_title}:</label>
            <input type="text" class="form-control" name="name" value="{$row.name|esc}"/>
            {include file='admin/seo.tpl'}
            {$smarty.capture.edit_seo}

        	</div>
        <input type="submit" name="ok" value="Отправить" class="btn btn-primary">
</form> 
</div> 
