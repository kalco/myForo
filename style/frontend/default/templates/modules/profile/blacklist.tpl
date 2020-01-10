<div class="panel">
                      <div class="panel-heading">{$title2}</div>
                         <div class="panel-body">
                             <div class="container-fluid">
                  <div class="row">
    {if $count > 0}
        {foreach from=$arrayrow item=row}
         <div class="row" id="{$row.id}">
             <div class="col-sm-2 col-xs-3 loop_album dataitem odd dataitemlast">						               
                                          <div class="album_wrapper bevelbottom">              	
                                              <div class="image">									
                                                  										
                                                        <img class="img-responsive img-thumbnail" src="{$home}/files/{if $row.avatar}user/{$row.user_id}/view-{$row.avatar}{else}nophoto-view.jpg{/if}" alt="" border="0">									
                                                                
                                              </div>  					 	 
                                          </div>
                                      </div>
                         <div class="col-sm-7 col-xs-9 ">
                               <h5><a href="{$home}/{$row.user_id}-{$row.login}">{$row.login|escape|esc}</a></h5>    
                               <small>{$row.time|times} </small>
                 </div>
                <div class="col-sm-3 col-xs-12 text-right">	
                <a class="btn btn-sm btn-danger" href="{$home}/profile/blacklist/del/{$row.user_id}" title="" data-toggle="tooltip" data-placement="top" data-original-title="Delete"> <span class="fa fa-trash-o"></span> </a>  
                </div>
            
             </div>
             <hr>
        {/foreach}
        {if $count > $message}
            <div class="paging_bootstrap pagination">{$pagenav}</div>
        {/if}    
    {else}
        <div class="alert alert-danger">The black list is empty ...</div>
    {/if}
    </div>
</div>

    </div>
</div>

  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>
