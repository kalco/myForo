
<div class="panel">
        <div class="panel-heading">{$title2}</div>
        <div class="panel-body clearfix">
    {if empty($user.id)}
        
            <div class="alert alert-warning text-center margin-t-15">Guests are not shown closed from unauthorized posts!</div>
      
    {else if $user.level < 50}
        
            <div class="alert alert-warning ttext-center margin-t-15">Hidden posts are displayed only by the site administration!</div>
   
    {/if}    

  {include file='system/posts.tpl'}
  
  