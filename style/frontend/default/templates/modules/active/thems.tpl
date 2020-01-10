<div class="panel">
        <div class="panel-heading">{$title2}</div>
        <div class="panel-body clearfix">

  
    {if empty($user.id)}
        
            <div class="alert alert-warning text-center margin-t-15">Guests are not shown closed from unauthorized threads!</div>
      
    {else if $user.level < 10}
        
            <div class="alert alert-warning text-center margin-t-15">Hidden threads are displayed only by the site administration!</div>
   
    {/if}    

  {include file='system/thems.tpl'}