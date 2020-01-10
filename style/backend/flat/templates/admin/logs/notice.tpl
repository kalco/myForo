<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
        <p>{$description} <span class="badge badge-warning" title="">{$count}</span></p>
    </div>
</div>

               {if $count > 0}
               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th>{$lang.a_username}</th>
                        <th>{$lang.a_action}</th>
                        <th class="visible-lg hidden-xs">{$lang.a_date}</th>
                     </tr>
                  </thead>
                  <tbody>
                     {foreach from=$arrayrow item=rows key=k}  
                     {include file='system/user.tpl'}
                     <tr>
                        <td><a href="{$home}/{$rows.id_user}-{$rows.login}" target="_blank">{$rows.login|esc}</a></td>
                        <td>{$smarty.capture.text}</td>
                        <td class="visible-lg hidden-xs">{$rows.time|times}</td>
                     </tr>
                     {/foreach}
                  <tbody>
               </table>
               {if $count > $message}
               <div class="paging_bootstrap pagination">{$pagenav}</div>
               <br/>{/if}
               {else}
               <div class="alert alert-danger">{$lang.notice_empty}</div>
               {/if}    
