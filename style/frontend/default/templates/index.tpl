<div class="panel">
                      <div class="panel-heading">{$lang.all_thread}</div>
                         <div class="panel-body">
                                 {if $count > 0}
        {foreach from=$arrayrow item=rows key=k}
         <div class="row">
             <div class="col-sm-3 hidden-xs">
                <span class="label label-default padding-15 "> <a href="{$home}/forums/thread-{$rows.id}?page={$starts.$k}#{$rows.id_post_last}" title="Last post">{$rows.countpost|number_format:0} <i class="fa fa-comments-o"></i></a></span>
                  <span class="label label-default padding-15">{$rows.views|number_format:0} <i class="fa fa-eye"></i></span>
                 </div>
 <div class="col-sm-9">
     <h4><a href="{$home}/forums/thread-{$rows.id}">{$rows.name|escape|esc}</a> </h4>
               <span class="label label-info">{$rows.namecat}</span><span>{if $rows.up == 1} <i class="fa fa-thumb-tack"></i>{/if} {if $rows.closed == 1} <i class="fa fa-lock"></i>{/if}</span>

               <small><span class="pull-right text-muted"><a href="{$home}/{$rows.id_user_last}-{$rows.login}">{$rows.login|escape|esc}</a> {$rows.time|times}</span></small>
 </div>
            </div>
       <hr>
        {/foreach}
    {else}
    
        <div class="alert alert-danger text-center margin-t-15">No threads yet!</div>
    {/if}
    {if $count > $message}
        <div class="paging_bootstrap pagination">{$pagenav}</div>
    {/if} 
                                 </div>      
  </div>
 {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_home}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>