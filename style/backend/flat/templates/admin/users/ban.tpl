<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
        <p>{$description}</p>
    </div>
</div>
   
        {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}
        <form action="{$url}" method="post" class="form-horizontal">
        	<div class="form-group">
           <label class="control-label">{$lang.ban_expire}:</label>
                <input type="text" name="count" class="form-control"/>
                  </div>
                <div class="form-group">
                <select name="time" class="form-control">
                    <option value="1">{$lang.a_days}</option>
                    <option value="7">{$lang.a_weeks}</option>
                    <option value="31">{$lang.a_months}</option>
                </select>
          </div>
          
        <div class="form-group">
                  <label class="control-label">{$lang.ban_reason}:</label>
                     <input name="text" class="form-control" value="{$smarty.post.text|escape}" type="text" required />
               </div>
         
            <p><input type="submit" name="ok" value="{$lang.a_save}" class="btn btn-primary"></p>

    </form>
            