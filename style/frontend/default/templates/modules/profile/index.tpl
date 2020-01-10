<div class="btn-group  margin-b-15 actionbuttons">
           <a href="{$home}/profile" class="active btn btn-link">Personal Details</a>
            <a href="{$home}/profile/setup" class="btn btn-link">Settings</a>            
            <a href="{$home}/profile/security" class="btn btn-link">Security</a>                                
            <a href="{$home}/{$user.id}-{$user.login}" title="Privacy" class="btn btn-link">See my profile</a>                                                                        
            </div>

<div class="panel">
    <div class="panel-heading">{$title2} - {$user.login|escape|esc}</div> 

<div class="panel-body">

    {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}
    <form action="{$url}" method="post" enctype="multipart/form-data" class="form-horizontal">
       <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">Name:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="firstname" value="{$user.firstname|escape|esc}" type="text">
    							    </div>
                    </div>
                    <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">Lastname:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="lastname" value="{$user.lastname|escape|esc}" type="text">
    							    </div>
                    </div>
                    <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">City:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="city" value="{$user.city|escape|esc}" type="text">
    							    </div>
                    </div>
                    <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">E-mail:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="email" value="{$user.email|escape|esc}" type="text">
    							    </div>
                    </div>
                    <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">Phone:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="phone" value="{$user.phone|escape|esc}" type="text">
    							    </div>
                    </div>
                    <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">Skype:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="skype" value="{$user.skype|escape|esc}" type="text">
    							    </div>
                    </div>
                                       <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">ICQ:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="icq" value="{$user.icq|escape|esc}" type="text">
    							    </div>
                    </div>
                                       <div class="form-group">
                      <label for="field_username" class="col-sm-3 control-label">About me:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="about" value="{$user.about|escape|esc}" type="text">
    							    </div>
                    </div>
                    
<div class="container-fluid ">

        <div class="col-lg-4 col-md-4">

                      <div class="image">
                          {if $user.avatar}
                                 <img class="img-responsive img-thumbnail" src="{$home}/files/user/{$user.id}/view-{$user.avatar}" alt="" border="0 " id="avatar_src">{/if} 
                         </div>
                        </div>
                  <div class="col-lg-4 col-md-4">	
                      <div class="form padding-15 padding-l-0">
                              <div class="fieldset">
                                  <div class="form-group">
                                      <label>Avatar:</label>
                                      <input name="file" value="" class="" type="file">
                                      <p>Use jpg, gif or png format</p>
                                  </div> 
                      </div>
                  </div>
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