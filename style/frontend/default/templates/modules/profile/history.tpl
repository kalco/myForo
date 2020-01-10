      <div class="btn-group  margin-b-15">
           <a href="#" data-toggle="modal" data-target="#helper_clear" class="btn btn-primary btn-sm">Clear logs</a>
            </div>
<div class="panel">
                      <div class="panel-heading">{$title2}</div>
                         <div class="panel-body">
						
{if $count > 0}
    {foreach from=$arrayrow item=row}
     <div class="row" id="{$row.id}">
         <div class="col-sm-9 text-justify">
             <h4>{$row.ip|esc}</h4>
                    {$row.browser|esc}
                       </div>
                        <div class="col-sm-3 ">
                             <span class="label label-default">{$row.time|times}</span>     
                             </div>
       </div> 
       <hr>
    {/foreach}
    {if $count > $message}
        <div class="pagination pull-right">{$pagenav}</div>
    {/if}    
{else}
    <div class="alert alert-danger">Authorization history is empty ...</div>
{/if}
</div>
</div>

  {include file='system/sidebar.tpl'}
                           {$smarty.capture.sidebar_profile}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>
<div class="modal fade" id="helper_clear">
   <div class="modal-dialog modal-small" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">{$lang.my_login_history_clear}</h4>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-12">
              <form action="{$home}/profile/history/clear" method="post" enctype="multipart/form-data" class="fon">
        <p>Are you sure you want to clear the login history?</p>
        <input type="submit" name="ok" value="OK" class="btn btn-default pull-right">
    </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>