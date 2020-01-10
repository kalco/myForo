<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8"/>
        <meta http-equiv="Content-Style-Type" content="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="HandheldFriendly" content="true">
        <meta name="MobileOptimized" content="width">
        <meta name="keywords" content="{if $keywords}{$keywords|esc|strip_tags:false}{else}{$setup.keywords|esc|strip_tags:false}{/if}">
        <meta name="description" content="{if $description}{$description|esc|strip_tags:false}{else}{$setup.description|esc|strip_tags:false}{/if}">
        <meta name="author" content="Xplosive Studio">
        <meta name="generator" content="Roka Framework">
        <title>{$title}</title>
        <link rel="apple-touch-icon" sizes="180x180" href="{$home}/style/frontend/{$skin}/assets/images/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="{$home}/style/frontend/{$skin}/assets/images/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="{$home}/style/frontend/{$skin}/assets/images/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="{$home}/style/frontend/{$skin}/assets/images/favicons/manifest.json">
        <link rel="mask-icon" href="{$home}/style/frontend/{$skin}/assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="stylesheet" href="{$home}/style/frontend/{$skin}/assets/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{$home}/style/frontend/{$skin}/assets/css/style.css">
        <link rel="stylesheet" href="{$home}/style/frontend/{$skin}/assets/css/app.css">
        <script src="{$home}/style/frontend/{$skin}/assets/js/jquery.min.js"></script>
    </head>
   <body class="homepage login_1">
<nav class="navbar navbar-default  navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">

      <div style="margin:12px 15px 0 0"  class="visible-xs btn-group pull-right">
                 {if $user.id}
                <a href="{$home}/profile/mail" class="btn btn-sm btn-primary"><span class="fa fa-envelope"></span>{if $newmail > 0}<span class="msg_count">{$newmail|number}</span>{/if} </a> 
                <a href="{$home}/profile/notice" class="btn btn-sm btn-primary"><span class="fa fa-bell"></span>  {if $newnotice > 0}<span class="msg_count">{$newnotice|number}</span>{/if} </a> 
                      	{/if}
                <button class="btn btn-sm btn-primary" data-toggle="collapse" data-target="#navcol"><span class="fa fa-reorder"></span></button>
      </div>

      <a class="navbar-brand" href="{$home}">
         myForo
      </a>
     
    </div>
   

    <div class="collapse navbar-collapse" id="navcol">
          <ul class="nav navbar-nav">
                                                   <li {if $smarty.server.REQUEST_URI == '/users' || $smarty.server.REQUEST_URI == '/users/admin' || $smarty.server.REQUEST_URI == '/users/online' || $smarty.server.REQUEST_URI == '/users/guest'}class="active"{/if}><a href="{$home}/users">Users</a></li>
                                                <li {if $smarty.server.REQUEST_URI == '/new/thems'}class="active"{/if}><a href="{$home}/new/thems">New Threads</a></li>
                                                <li {if $smarty.server.REQUEST_URI == '/new/posts'}class="active"{/if}><a href="{$home}/new/posts">New Posts</a></li> 
            
      </ul>
      <ul class="nav navbar-nav navbar-right"> 
       {if $user.id}
                      <li class="hidden-xs {if $smarty.server.REQUEST_URI == '/profile/mail'}active{/if}">
               <a class="icon_nav icon_user_messages" href="{$home}/profile/mail">
                <div> <i class="fa fa-envelope"></i>
                {if $newmail > 0}
                   <span id="msg_count" class="msg_count">{$newmail|number}</span>
                   	{/if}
                </div>
              </a>
            </li>
                   <li class="hidden-xs {if $smarty.server.REQUEST_URI == '/profile/notice'}active{/if}">
               <a class="icon_nav notificationLink" href="{$home}/profile/notice">
                <div> <i class="fa fa-bell"></i>
                {if $newnotice > 0}
                   <span id="msg_count" class="msg_count">{$newnotice|number}</span>
                   	{/if}
                </div>
              </a>
            </li>       
           <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">{$user.login} <span class="caret"></span></a>
              <ul id="usermenudown" class="dropdown-menu">
    	        <li><a href="{$home}/profile">My Profile</a></li>
    	         {if $user.level == 100}
                <li><a href="{$home}{$panel}">Admin Panel</a></li>
                    {/if}
              	              	<li><div class="divider"></div><a href="{$home}/user/exit" class="outter">Logout</a></li>
            </ul>
          </li>
          {else}
										   	 {if $setup.registration == 1}
					   	<li><a href="{$home}/user/signup">Register</a></li>
					   	  {/if}
					   	<li>  <a href="{$home}/user/login">Log In</a></li>
							   {/if}   
      </ul>  
        </div>        
        
    </div>
 </nav>


 <div class="container">
<div class="row">
    <div  class="col-lg-9">
            <div class="panel">
          {if $smarty.server.REQUEST_URI == '/' && $adsheadindex} 
                <div class="margin-t-15 margin-b-15 list">
                    {foreach from=$adsheadindex item=headindex key=kheadindex}
                        <p><a href="{$home}/go/{$headindex.id}"><img src="{$home}/files/banners/{$headindex.photo}" class="img-responsive" alt=""/></a></p>
                        {/foreach}
                </div>
            {/if}

            {if $smarty.server.REQUEST_URI != '/' && $adsheadnoindex} 
                <div class="margin-top-10 margin-b-15 list">
                    {foreach from=$adsheadnoindex item=headnoindex key=kheadnoindex}
                        <p><a href="{$home}/go/{$headnoindex.id}"><img src="{$home}/files/banners/{$headnoindex.photo}" class="img-responsive" alt=""/></a></p>
                        {/foreach}
                </div>
            {/if}
            {if $adshead} 
               <div class="margin-top-10 margin-b-15 list">
                    {foreach from=$adshead item=head key=khead}
                        <p><a href="{$home}/go/{$head.id}"><img src="{$home}/files/banners/{$head.photo}" class="img-responsive" alt=""/></a></p>
                        {/foreach}
                </div>
            {/if}
            </div>