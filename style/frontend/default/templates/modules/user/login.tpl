      <div class="panel panel-primary">
          <div class="panel-heading">{$title2}</div>
         <div class="panel-body">
              {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}
           <div class="form-horizontal">
        <form action="{$url}" method="post">
            <div class="fieldset">
                 <div class="form-group">
                          <label class="col-lg-3" for="field_username">Username</label>
                          <div class="col-lg-8">
                              <input id="field_username" name="login" value="{$smarty.post.login}" class="form-control" type="text" required>
                          </div>
                      </div>
                                            <div class="form-group">
                          <label class="col-lg-3" for="field_password">Password</label>
                           <div class="col-lg-8">
                              <input id="field_password" name="password" value="{$smarty.post.password}" class="form-control" type="password" required>
                         </div>
                      </div>
               <div class="form-group">
                          <label class="control-label col-sm-3 ">&nbsp;</label>
          								  <div class="col-sm-9">  
                              <small>Forget password?  <a href="{$home}/user/lostpass">Reset password</a></small>
                            </div>
                          </div>
            <input class="btn btn-primary center-block" type="submit" name="ok" value="Log in">
          </div>
        </form>
          </div>
        </div>
	</div>
	
	  {include file='system/sidebar.tpl'}
{$smarty.capture.sidebar_global}
      <div class="hidden-xs">
    </div>      
  </div>