<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
    </div>
</div>
    {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}
    <form action="{$url}" method="post"  class="form-horizontal">
    	 <div class="form-group">
                  <label class="control-label">{$lang.user_group}:</label>
            <select name="level" class="form-control">
                <option value="1"{if $row.level == 1} selected="selected"{/if}>{$lang.a_user}</option>
                <option value="90"{if $row.level == 90} selected="selected"{/if}>{$lang.a_moderator}</option>
                <option value="100"{if $row.level == 100} selected="selected"{/if}>{$lang.a_admin}</option>
            </select>
            </div>
         <div class="form-group">
                  <label class="control-label">{$lang.a_username}:</label>
            <input type="text" name="login" value="{$row.login|esc}" class="form-control"/>
            	</div>
            	<div class="form-group">
                  <label class="control-label">{$lang.a_pass}:</label>
            <input type="password" name="pass" value="{$smarty.post.pass}" class="form-control"/>
            	</div>
            	<div class="form-group">
                  <label class="control-label">{$lang.a_email}:</label>
           <input type="text" name="email" value="{$row.email|esc}" class="form-control"/>
            	</div>
          <div class="form-group">
                  <label class="control-label">{$lang.a_name}:</label>
           <input type="text" name="firstname" value="{$row.firstname|esc}" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label">{$lang.a_surname}:</label>
           <input type="text" name="lastname" value="{$row.lastname|esc}" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label">{$lang.a_phone}:</label>
           <input type="text" name="phone" value="{$row.phone|esc}" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label">{$lang.a_city}:</label>
            <input type="text" name="city" value="{$row.city|esc}" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label">{$lang.a_skype}:</label>
           <input type="text" name="skype" value="{$row.skype|esc}" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label">{$lang.a_icq}:</label>
            <input type="text" name="icq" value="{$row.icq|esc}" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label">{$lang.a_points}:</label>
            <input type="text" name="balls" value="{$row.balls|esc}" class="form-control"/>
            	</div>
            	 <div class="form-group">
                  <label class="control-label">{$lang.a_about}:</label>
           <textarea name="about" class="form-control">{$row.about|esc}</textarea>
            	</div>
       
       <input type="submit" name="ok" value="{$lang.a_save}" class="btn btn-primary">
    </form>



