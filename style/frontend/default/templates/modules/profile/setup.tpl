<div class="btn-group  margin-b-15 actionbuttons">
           <a href="{$home}/profile" class="btn btn-link">Personal Details</a>
            <a href="{$home}/profile/setup" class="active btn btn-link">Settings</a>            
            <a href="{$home}/profile/security" class="btn btn-link">Security</a>                                
            <a href="{$home}/{$user.id}-{$user.login}" title="Privacy" class="btn btn-link">See my profile</a>                                                                        
            </div>

<div class="panel">
    <div class="panel-heading">{$title2}</div> 

<div class="panel-body">
{if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}

<form action="{$url}" method="post" class="form-horizontal">
    <div class="form-group">
                        <label for="field_language" class="col-sm-3 control-label">Template:</label>
                        <div class="col-sm-9">
    									     <select class="form-control" name="skin" >
    					{foreach from=$arrayrowskin item=skin}
                {assign var="name" value="style/frontend/$skin/info.ini"}
                <option value="{$skin}" {if $user.skin == $skin}selected="selected"{/if}>{$name|file_get_contents}</option>
            {/foreach}>
            </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="field_language" class="col-sm-3 control-label">Languages:</label>
                        <div class="col-sm-9">
    									     <select class="form-control" name="lang">
    				  {foreach from=$arrayrowlang item=lang}
              <option value="{$lang}" {if $user.lang == $lang}selected="selected"{/if}>{$lang}</option>
            {/foreach}
            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="field_language" class="col-sm-3 control-label">Time Zone:</label>
                        <div class="col-sm-9">
    									     <select class="form-control" name="timezone" >
    				 {foreach from=$arrayrow item=zone}
                <option value="{$zone.zone_name|esc}"{if $user.timezone == $zone.zone_name|esc} selected="selected"{/if}>{$zone.zone_name|esc}</option>
            {/foreach}   
            </select>
                        </div>
                      </div>
                      <div class="form-group">
                      <label for="field_password" class="col-sm-3 control-label">Posts per Page <small>5 - 100</small>:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="message" value="{$user.message|esc}" type="text">
                       </div>
                    </div>

    <p><input type="submit" name="ok" value="Save" class="btn btn-primary pull-right"></p>
</form>
</div>
</div>
  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>