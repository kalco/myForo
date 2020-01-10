{capture name=level}
    {if $rows.level == 90}
      <span class="label label-primary">Moderator</span>
    {else if $rows.level == 100}
        <span class="label label-success">Administrator</span>
     {else $rows.level == 1}
        <span class="label label-default">Member</span>
    {/if}
{/capture}

{capture name=comments}
<div class="well clearfix">
{if $rows.id_user}
     <div class="image col-lg-12"> 
<a href="{$home}/{$rows.id_user}-{$rows.login}">
<img class="img-full img-responsive ease" alt="" src="{$home}/files/{if $rows.avatar}user/{$rows.id_user}/{$rows.avatar}{else}nophoto.jpg{/if}">
</a>
</div>
 {else}
  <div class="image col-lg-12"> 
<img class="img-full img-responsive ease" alt="" src="{$home}/files/{if $rows.avatar}user/{$rows.id_user}/small-{$rows.avatar}{else}nophoto.jpg{/if}">
</div>
   {/if}
   
  <div class="pull-left gift_author margin-t-15"> 
{if $rows.id_user}
            {if $rows.login}<a href="{$home}/{$rows.id_user}-{$rows.login}">{$rows.login|esc}</a>
             {if $user.level > 1}
                {if $rows.ip} <br/> IP: {$rows.ip}{/if} <br/>
                {if $rows.browser}Browser: {$rows.browser}{/if} <br/>
                {if $rows.referer}Where: <a href="{$rows.referer}">{$rows.referer}</a>{/if}
            {/if}
 
 <p>{$smarty.capture.level}{else} User was removed{/if}{elseif $rows.name}{$rows.name|esc}{else}Guest{/if}</p>
<div class="date text-muted">Last Visit: {$rows.time|times}</div>
 </div>
   </div> 
{/capture}

{capture name=forum}
    <div class="panel-heading">
        <div class="img-thumbnail img-responsive"><img src="{$home}/files/{if $rows.avatar}user/{$rows.id_user}/small-{$rows.avatar}{else}nophoto.jpg{/if}"/></div>
            <span class="pull-right margin-top-10">
                <a href="{$home}/post/{$rows.id}" title="See post"><i class="fa fa-hashtag"></i></a>
                {if $user.id && $rows.id_user != $user.id}
                <a href="{$home}/post/{$rows.id}/reply" title="Reply"><i class="fa fa-reply"></i></a>
                <a href="{$home}/post/{$rows.id}/quote" title="Quote"><i class="fa fa-quote-left"></i></a>
                {/if}
                 {if $user.level > 50 || $user.id == $rows.id_user && $rows.time > $edit && $tema.closed == 0}
                <a href="{$home}/post/{$rows.id}/edit" title="Edit"><i class="fa fa-pencil"></i></a>{if $rows.realid == 0} <a href="{$home}/post/{$rows.id}/del" title="Delete"><i class="fa fa-trash-o"></i></a>{/if}
                {/if}
            </span>
        <p>{if $rows.login}<a href="{$home}/{$rows.id_user}-{$rows.login}">{$rows.login|esc}</a> {$smarty.capture.level}{else}<i class="fa fa-trash"></i> User is removed{/if} ({$rows.time|times})</p>
    </div>
{/capture}

{capture name=voteforum}
    <div class="post-user">
        <div class="img"><img src="{$home}/files/{if $rows.avatar}user/{$rows.id_user}/small-{$rows.avatar}{else}nophoto.jpg{/if}"/></div>
        <p>
            {if $rows.login}<a href="{$home}/{$rows.id_user}-{$rows.login}">{$rows.login|esc}</a> {$smarty.capture.level}{else}<i class="fa fa-trash"></i> User is removed{/if} ({$rows.time|times})
            <br/>Votes for: <b>{$rows.option|esc|escape}</b>
        </p>
    </div>
{/capture}

{capture name=users}
<div class="well clearfix">
        <div class="image col-lg-12">   
                                            <a href="{$home}/{$rows.id}-{$rows.login}" data-toggle="tooltip" data-placement="top" data-html="true" data-original-title="Threads: {$rows.counttema|esc|number} <br /> Posts: {$rows.countpost|esc|number} <br /> XP: {$rows.balls|esc|number}">
                                                <img class="img-full img-responsive ease" style="border: 0px" src="{$home}/files/{if $rows.avatar}user/{$rows.id}/{$rows.avatar}{else}nophoto.jpg{/if}" alt="{$rows.login}">
                                            </a>        									
                                    </div>
<div class="pull-left gift_author margin-t-15">          							

	<a href="{$home}/{$rows.id}-{$rows.login}"> {$rows.login|esc} </a>

     						 
                                    </div>
                                    
<div class="clear"></div>
<div class="margin-t-15">
                                     {$smarty.capture.level}
                                  </div>
 </div>
{/capture}

{capture name=text}
<div class="panel-body">
    <p>{$text.$k|esc|bbcode}</p>
    </div>
{/capture}
