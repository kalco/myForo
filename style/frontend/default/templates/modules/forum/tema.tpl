{if $row.type == 1 && empty($user.id)}
    <div class="fon">
        <div class="alert alert-danger margin-top-10">In order to add the messages you need <a href="{$home}/user/login">login</a> or <a href="{$home}/user/signup">register</a> on site!</div>
    </div>    
{else if $row.type == 2 && $user.level < 10}
    <div class="fon">
        <div class="alert alert-danger margin-top-10">This thread is available only for the site administration!</div>
    </div> 
{else}
    <div class="panel">
    	<div class="panel-heading"><h4>{$title2} </h4></div>
    	    		{if $user.level > 50 || $user.id == $tema.id_user}
    	<div class="panel-body">
    <span class="pull-right">
          <div class="btn-group">
  <button type="button" class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Thread Action <span class="caret"></span>
  </button>
  <div class="dropdown-menu">
  	 {if $user.level > 30}
  	 <li><a href="{$home}/forums/thread-{$tema.id}/edit"><i class="fa fa-pencil"></i> Edit Thread</a></li>
  	 {if $tema.closed == 0}<li><a href="{$home}/forums/thread-{$tema.id}/lock"> <i class="fa fa-lock"></i>  Lock Thread</a></li>{else}<li><a href="{$home}/forums/thread-{$tema.id}/open"> <i class="fa fa-unlock"></i>  Open Thread</a></li>{/if}
  	  {if $tema.up == 0}<li><a href="{$home}/forums/thread-{$tema.id}/sticky"><i class="fa fa-thumb-tack"></i>  Sticky</a></li>{else}<li><a href="{$home}/forums/thread-{$tema.id}/unsticky"><i class="fa fa-thumb-tack"></i>  Unsticky</a></li>{/if}
     <li><a href="{$home}/forums/thread-{$tema.id}/del"><i class="fa fa-trash"></i>  Delete Thread</a></li>
      {/if}
        {if $user.level > 50 || $user.id == $tema.id_user}
            {if $tema.countvote == 0}
                <li><div class="divider"></div><a href="{$home}/forums/thread-{$tema.id}/vote-{$row.id}"><i class="fa fa-question"></i> Add Poll</a></li>
            {else}
        
                    <a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}/vote/edit">Edit poll</a> | <a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}/vote/del">Delete poll</a>           
               
            {/if}
        {/if} 
  </div>
</div>
        </span>
          
     </div> 
        {/if} 
    </div> 
    <div class="fon">
        {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if} 
        {if isset($errorvote)}<div class="alert alert-danger">{$errorvote}</div>{/if} 
        {if $tema.countvote > 0 && $user.id}
            <div class="fon"><h4><i class="fa fa-question-circle"></i> Poll </h4>
                <p><b>{$tema.namequestion|esc|escape}</b></p>
                {if $checkvote == 0}
                    <form action="{$smarty.server.REQUEST_URI}" method="post">
                        {foreach from=$arrayrowvote item=vote}
                            <p><label><input type="radio" name="reply" value="{$vote.id}"/> {$vote.name|esc|escape}</label></p>
                                {/foreach}
                        <p><input type="submit" name="vote" value="Vote" class="btn btn-primary"></p>    
                    </form>
                {else}
                    {foreach from=$arrayrowvote item=vote}
                        <p>{$vote.name|esc|escape} ({$vote.count|number})</p>
                    {/foreach}
                {/if}
                {if $tema.countvoteall}<div class="menu"><a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}/vote/all">Voted: {$tema.countvoteall}</a></div>{/if}            
            </div>
        {/if}
        {if $count > 0}
            {foreach from=$arrayrow item=rows key=k}
                    {math equation="x - y" x=$realtime y={$setup.forum_time_edit_post}*60 assign="edit"}  
                    <div class="panel" id="{$rows.id}">
                        {include file='system/user.tpl'}
                        {$smarty.capture.forum}
                        {$smarty.capture.text}
                        {if $arrayrowfile && $rows.count_file > 0}
                            <h4>Attached files:</h4>
                            {foreach from=$arrayrowfile item=file}
                                {if $rows.id == $file.id_post}
                                    <div>
                                        {if $file.type == 'png' || $file.type == 'jpg' || $file.type == 'jpeg' || $file.type == 'gif'}
                                            <p><a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}/load/{$file.id}" title="Download file"><img src="{$home}/files/user/{$file.id_user}/forum/{$file.file}" class="img-responsive img-mini" /></a></p>
                                                {/if}
                                        <a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}/load/{$file.id}" title="Download file"><i class="fa fa-file"></i> {$file.file|escape|esc}</a> ({$file.size|esc}{if $file.loadcounts > 0}, downloaded: {$file.loadcounts|number}{/if})
                                    </div>   
                                {/if}
                            {/foreach}
                        {/if}
                       <div class="panel-footer"> {if !empty($rows.timeedit)}<small class="pull-right">Edited by: <b><a href="{$home}/{$rows.id_user_edit}-{$rows.login_edit}">{$rows.login_edit}</a></b> ({$rows.timeedit|times}) [{$rows.kedit}]</small>{/if}
                        {if $user.id && $rows.id_user != $user.id}
                       <button class="btn btn-danger btn-xs"><i class="fa fa-thumbs-down"></i></button> 
                       {/if}
                       <span class="label label-default"><i class="fa fa-thumbs-up"></i> 2</span>
                       </div>
                    </div>
                {/foreach}
                {else}
                    <div class="alert alert-error">No messages yet ...</div>
                    {/if}
                        {if $tema.closed == 0}
                            {if $user.id}
                                <form action="{$url}" method="post" enctype="multipart/form-data" class="fon">
                                    <div class="form-group">
                   <label class="col-sm-1 control-label">Message:</label>
                     <input name="text" type="hidden">
                  <div class="col-sm-11">
                  	<div id="editor-container"></div>
                     		    </div>
                    </div>
                                    {$smarty.capture.add_file}
                                    {if $setup.captcha_add_post == 1}
                                        {include file='system/captcha.tpl'}
                                    {/if}
                                    <p><input type="submit" name="ok" value="Send" class="btn btn-primary"></p>
                                </form>
                            {else}
                                <div class="alert alert-danger margin-top-10">In order to add the messages you need <a href="{$home}/user/login">login</a> or <a href="{$home}/user/signup">register</a> on site!</div>    
                            {/if}
                        {else}
                            <div class="alert alert-danger margin-top-10">Thread is locked!</div>
                        {/if}
                        {if $count > $message}
                            <div class="paging_bootstrap pagination">{$pagenav}</div>
                        {/if} 
                        {if $tema.count > 0}
                            <div class="menu"><a href="{$home}/{$forum.id}/{$row.id}/{$tema.id}/files"><i class="fa fa-file"></i> All files in this thread ({$tema.count|number})</a></div> 
                        {/if}
                    </div>
                    {/if}

                      {include file='system/sidebar.tpl'}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>