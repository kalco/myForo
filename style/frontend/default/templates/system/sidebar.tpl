{*
     {if $lastthems}
     <ul>
            {foreach from=$lastthems item=rows key=k}
                {math equation="max(0, z - ((( z % y) == 0) ? y : ( z % y)))" z=$rows.countpost y=$message assign="starts"}
               <dl>
                
			<dt class="pull-left aw-border-radius-5">
			<i class="fa fa-commenting-o fa-2x"></i>
			</dt>
		
			<dd class="pull-left">
				<a href="{$home}/{$rows.id_razdel}/{$rows.id_forum}/{$rows.id}?page={$starts}#{$rows.id_post_last}" title="Go to last post" class="aw-user-name">{$rows.name|truncate:25:"...":true|escape|esc}</a>
				<p class="signature"></p>
				<p><b><a href="{$home}/{$rows.id_user_last}-{$rows.login}">{$rows.login|escape|esc}</a></b>,<b>{$rows.time|times}</b></p>
			</dd>
		</dl>
            {/foreach}
        </ul>
    {/if}
 


     {if $lastposts}
     <ul>
            {foreach from=$lastposts item=rows key=k}
                {math equation="max(0, z - ((( z % y) == 0) ? y : ( z % y)))" z=$rows.countpost y=$message assign="starts"}
               <dl>
                
			<dt class="pull-left aw-border-radius-5">
			<i class="fa fa-commenting-o fa-2x"></i>
			</dt>
		
			<dd class="pull-left">
				<a href="{$home}/{$rows.id_razdel}/{$rows.id_forum}/{$rows.id_tema}?page={$starts}#{$rows.id}" title="Go to last post" class="aw-user-name">{$rows.text|truncate:25:"...":true|escape|esc}</a>
				<p class="signature"></p>
				<p><b><a href="{$home}/{$rows.id_user_last}-{$rows.login}">{$rows.login|escape|esc}</a></b>,<b>{$rows.time|times}</b></p>
			</dd>
		</dl>
            {/foreach}
        </ul>
    {/if}
 *}
 </div>
 <div class="col-lg-3">
         <div class="panel">
           <div class="panel-body clearfix">
        <form action="{$home}/search" id="global_search_form" method="post" accept-charset="utf-8">
        <div class="input-group col-lg-12">
            <input class="form-control" type="text" name="search" placeholder="Search" value="{$search|esc}"/>
 <span class="input-group-btn" style="width:0;">
 <button type="submit" class="pull-right btn btn-primary"><i class="fa fa-search" onClick="$('#global_search_form').submit();"></i></button>  </span>                                     
                </div>                           
                    </form>
 
    </div>
    </div>
     {if $user.id}
 <div class="panel">
        <div class="panel-body clearfix">
            <a class="btn btn-sm btn-primary col-lg-12" href="{$home}/forums/add"><i class="fa fa-plus"></i>  Create Thread</a>
        </div>
</div>
   {/if}
     {capture name=sidebar_global}
      {if $adsleft} 
        <div class="panel">
        <div class="panel-heading">Advertisement</div>
        <div class="panel-body clearfix">
           
            {foreach from=$adsleft item=left key=kleft}
                <div class="menu"><a href="{$home}/go/{$left.id}"><img src="{$home}/files/banners/view-{$left.photo}" class="img-responsive" alt=""/></a></div>
                {/foreach}
                
            </div>
</div>
   {/if}
{/capture}

{capture name=sidebar_home}
 <div class="panel">
        <div class="panel-heading">Categories</div>
            
{if $catcount > 0}
<ul class="list-group">
            {foreach from=$catcount item=row key=k}
                {counter name=num assign=num}
                <li class="list-group-item inactive">
                    <a href="{$home}/forums/{$row.id}.{$row.translate}">
                        {$row.name|esc} <span class="pull-right label label-primary">{$row.countthread|number}</span></a>
                </li>
                    {/foreach} 
                    </ul>
                     {else}
           <div class="text-center margin-t-15 padding-b-5">No categories</div>
        {/if}
</div>
    <div class="panel">
        <div class="panel-heading">Statistics</div>
        <ul class="list-group">
                            <li class="list-group-item">Threads<span class="pull-right">{$tema|number}</span></li>
                            <li class="list-group-item">Posts<span class="pull-right">{$post|number}</span></li>
                            <li class="list-group-item">Users<span class="pull-right">{$users|number}</span></li>
                            <li class="list-group-item">Last User<span class="pull-right"><a href="{$home}/{$last.id}-{$last.login}">{$last.login|escape|esc}</a></span></li>
                  
                    </ul>
</div>
{/capture}

{capture name=sidebar_users}
     <div class="panel">
        <div class="panel-heading">Users</div>
        <ul class="list-group">
               <li class="list-group-item"><a href="{$home}/users">All users<span class="pull-right label label-primary">{$users|number}</span></a></li>
               <li class="list-group-item"><a href="{$home}/users/admin">Staff <span class="pull-right label label-primary">{$users_admin|number}</span></a></li>
               <li class="list-group-item"><a href="{$home}/users/online">Online users <span class="pull-right label label-primary">{$usersonline|number}</span></a></li>
               <li class="list-group-item"><a href="{$home}/users/guest">Online guests <span class="pull-right label label-primary">{$guestonline|number}</span></a></li>
                  
                    </ul>
</div>
{/capture}

{capture name=sidebar_profile}
<div class="panel">
        <div class="panel-heading">My Profile</div>
        <ul class="list-group">
               <li class="list-group-item"><a href="{$home}/profile/mail">Messages<span class="pull-right label label-primary">{$mail|number}{if $newmail} <font color="green">+{$newmail|number}</font>{/if}</span></a></li>
               <li class="list-group-item"><a href="{$home}/profile/notice">Notifications<span class="pull-right label label-primary">{$notice|number}</span></a></li>
               <li class="list-group-item"><a href="{$home}/profile/friends">Friends<span class="pull-right label label-primary">{$friends|number}{if $friendsnew > 0} <font color="red"> +{$friendsnew|number}</font>{/if}</span></a></li>
               <li class="list-group-item"><a href="{$home}/profile/bookmark">Bookmarks <span class="pull-right label label-primary">{$bookmark|number}</span></a></li>
               <li class="list-group-item"><a href="{$home}/profile/blacklist">Black list <span class="pull-right label label-primary">{$blacklist|number}</span></a></li>
               <li class="list-group-item"><a href="{$home}/profile/history">Login history <span class="pull-right label label-primary">{$history|number}</span></a></li>
                    </ul>
</div>
{/capture}

{capture name=sidebar_personal}
<div class="panel">
        <div class="panel-heading">About - {$title2}</div>
<ul class="list-group">
                             {if $row.firstname}<li class="list-group-item">Name<span class="pull-right">{$row.firstname|escape|esc}</span></li>{/if}
                             {if $row.lastname}<li class="list-group-item">Surname<span class="pull-right">{$row.lastname|escape|esc}</span></li>{/if}
                             {if $row.city}<li class="list-group-item">Location<span class="pull-right">{$row.city|escape|esc}</span></li>{/if}
                            <li class="list-group-item">Joined<span class="pull-right">{$row.date_reg|times}</span></li>
                            <li class="list-group-item">Last Visit<span class="pull-right">{$row.date_last|times}</span></li>
                            

                  
                    </ul>
</div>
<div class="panel">
        <div class="panel-heading">Statistics - {$title2}</div>
<ul class="list-group">
                            <li class="list-group-item"><a href="{$home}/active/thems/{$row.id}">Threads</a><span class="pull-right label label-primary">{$row.counttema|number}</span></li>
                            <li class="list-group-item"><a href="{$home}/active/posts/{$row.id}">Posts</a><span class="pull-right label label-primary">{$row.countpost|number}</span></li>
                            <li class="list-group-item">XP<span class="pull-right label label-default">{$row.balls|esc|number}</span></li>
                    </ul>
</div>
{/capture}
   