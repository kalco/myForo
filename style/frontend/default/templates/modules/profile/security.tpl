<div class="btn-group  margin-b-15 actionbuttons">
           <a href="{$home}/profile" class="btn btn-link">Personal Details</a>
            <a href="{$home}/profile/setup" class="btn btn-link">Settings</a>            
            <a href="{$home}/profile/security" class="active btn btn-link">Security</a>                                
            <a href="{$home}/{$user.id}-{$user.login}" title="Privacy" class="btn btn-link">See my profile</a>                                                                        
            </div>
<div class="panel">
    <div class="panel-heading">{$title2}</div> 

<div class="panel-body">

{if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}
<form action="{$url}" method="post" class="form-horizontal">
                          <div class="form-group">
                      <label class="col-sm-3 control-label">Old Password:</label>
    								  <div class="col-sm-9">
                        <input class="form-control" name="oldpass" value="{$smarty.post.oldpass}" type="password">
                       </div>
                    </div>
                    
                                          <div class="form-group">
                      <label class="col-sm-3 control-label">New Password:</label>
    								  <div class="col-sm-9">
                        <input class="form-control" name="newpass" value="{$smarty.post.newpass}" type="password">
                       </div>
                    </div>
                                          <div class="form-group">
                      <label for="field_password" class="col-sm-3 control-label">Posts per Page:</label>
    								  <div class="col-sm-9">
                        <input class="form-control" name="newpass_confirm" value="{$smarty.post.newpass_confirm}" type="password">
                       </div>
</div>
    <input type="submit" name="ok" value="Save" class="btn btn-primary pull-right">
</form>
 </div>
  </div>
    {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>