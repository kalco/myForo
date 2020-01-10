{capture name=level}
    {if $row.level == 90}
    <span class="label label-primary">Moderator</span>
    {else if $row.level == 100}
        <span class="label label-success">Administrator</span>
    {else if $row.level == 1}
       <span class="label label-default">Member</span>
    {/if}
{/capture}
        <div class="panel">
        <div class="panel-body clearfix">
<div id="prof_topimg" class="bg-default relative margin-b-15">
     <div id="prof_leftimg">

                   <div class="profimg round_img online-indicator">
          <img class="img-thumbnail img-responsive" {if $online}style="border: 2px solid #4B8232" {else}style="border: 2px solid #e74c3c" {/if}src="{$home}/files/{if $row.avatar}user/{$row.id}/{$row.avatar}{else}nophoto-view.jpg{/if}" alt="" border="0" />  
  {if $online}
    <div class="in-bounce1-online"></div>
    <div class="in-bounce2-online"></div>
    {else}
    <div class="in-bounce1-offline"></div>
    <div class="in-bounce2-offline"></div>
  {/if}
                 </div>
                    </div>
                    
                      <div id="prof_userdata">
                             <div class="vt_prof_name">{$title2}</div>
                             <div class="vt_prof_from">
                             {$smarty.capture.level}
{if $row.ban == 1}
    [Banner until: {$row.bantime|date_format:"d.m.o, H:i"}
   {if $row.ban == 1}{$row.banprichina|escape|esc}{/if}]
{/if}</div>
                         </div>  
                 
                     {if $user.id && $row.id != $user.id}
                         <div id="profile_btns" class="margin-b-15">
                         	<a href="{$home}/profile/mail/{$row.id}" class="btn btn-sm btn-default"><i class="fa fa-envelope"></i> Send message</a>
                         	{if $friends == 0}
						<a href="{$home}/profile/friends/add/{$row.id}" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Add to friends</a>
						{else}
                        <a href="{$home}/profile/friends/del/{$row.id}" class="btn btn-sm btn-default"><i class="fa fa-minus"></i> Remove from friends</a>
                {/if}
                {if $blacklist == 0}
              <a href="{$home}/profile/blacklist/add/{$row.id}" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Add to blacklist</a>
               {else}
              <a href="{$home}/profile/blacklist/del/{$row.id}" class="btn btn-sm btn-default"><i class="fa fa-minus"></i> Remove from blacklist</a>
                {/if}
                  </div>
            {/if}
</div>
</div>
</div>
 {if $row.about}
<div class="panel">
        <div class="panel-heading">About Me</div>
        <div class="panel-body clearfix">
<p>{$row.about|escape|esc} </p>
</div>
</div>
  {/if}   
    {include file='system/sidebar.tpl'}
    {$smarty.capture.sidebar_personal}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>