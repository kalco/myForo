<div class="panel panel-primary">
          <div class="panel-heading">{$title2}</div>
<div class="panel-body">
        <div class="alert alert-info">A link to reset your password will be sent to your e-mail.</div>
         {if isset($ok)}<div class="alert alert-success">{$ok}</div>{/if}    
        {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}
        {if $smarty.post.ok && !isset($error)}<div class="alert alert-success">Password recovery link has been successfully sent to your e-mail!</div>{/if}
         <div class="form-horizontal">
        <form action="{$url}" method="post">
            <div class="fieldset">
                                 <div class="form-group">
                          <label class="col-lg-3" for="field_password">Email</label>
                           <div class="col-lg-8">
                              <input name="email" value="{$smarty.post.email}" class="form-control" type="email" required>
                         </div>
                      </div>
               <div class="form-group">
                          <label class="control-label col-sm-3 ">&nbsp;</label>
          								  <div class="col-sm-9">  
                              <small>You know your password?  <a href="{$home}/user/login">Log in</a></small>
                            </div>
                          </div>
            <input class="btn btn-primary center-block" type="submit" name="ok" value="Reset password">

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
