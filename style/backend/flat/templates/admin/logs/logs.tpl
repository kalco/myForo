<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
       <p>{$description} <span class="badge badge-warning" title="">{$count}</span></p>
    </div>
    <div class="text-right row-phone">
       <a href="#" data-toggle="modal" data-target="#log_clear" class="btn btn-phone btn-danger">{$lang.clear_logs}</a>
        </div>
</div>

               {if $count > 0}
               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th>{$lang.a_username}</th>
                        <th class="visible-lg hidden-xs">{$lang.a_module}</th>
                        <th>{$lang.a_action}</th>
                        <th class="visible-lg hidden-xs">{$lang.a_ip}</th>
                        <th class="visible-lg hidden-xs">{$lang.a_browser}</th>
                        <th>{$lang.a_date}</th>
                     </tr>
                  </thead>
                  <tr>
                  </tr>
                  </thead>
                  <tbody>
                     {foreach from=$arrayrow item=row key=k}    
                     {include file='system/user.tpl'}
                     <tr>
                        <td><a href="{$home}/{$row.id_user}-{$row.login}" target="_blank">{$row.login|esc}</a></td>
                        <td class="visible-lg hidden-xs">{$row.modul|esc}</td>
                        <td>{$smarty.capture.text}</td>
                        <td class="visible-lg hidden-xs">{$row.ip|esc}</td>
                        <td class="visible-lg hidden-xs">{$row.browser|esc}</td>
                        <td>{$row.time|times}</td>
                     </tr>
                     {/foreach}
                  <tbody>
               </table>
               {if $count > $message}
               <div class="paging_bootstrap pagination">{$pagenav}</div>
               <br/>{/if}
               {else}
               <div class="alert alert-danger">{$lang.logs_empty}</div>
               {/if}  

{capture name=log_clear}
<div class="modal fade" id="log_clear" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-small">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               {$lang.clear_logs}
            </h4>
         </div>
         <div class="modal-body">
            <form class="form-horizontal" role="form" action="{$home}{$panel}/logs/clear" method="post">
               <div class="text-center">{$lang.clear_logs_confirm}</div>
         </div>
         <div class="modal-footer">
         <input type="submit" name="ok" value="{$lang.a_clear}" class="btn btn-primary"></div>
         </form>
      </div>
   </div>
</div>
{/capture}
{$smarty.capture.log_clear}