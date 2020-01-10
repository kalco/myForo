<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
        <p>{$description} <span class="badge badge-warning" title="">{$count}</span></p>
    </div>
    <div class="text-right row-phone">
       <a href="#" data-toggle="modal" data-target="#add_user" class="btn btn-phone btn-primary">{$lang.add_user}</a>
        </div>
</div>

        {if $count > 0}
          <table class="table table-bordered">
             <thead>
                   <tr>
                       <th class="visible-lg hidden-xs">{$lang.a_id}</th>
                       <th>{$lang.a_username}</th>
                       <th class="visible-lg hidden-xs">{$lang.a_email}</th>
                       <th class="visible-lg hidden-xs">{$lang.a_registered}</th>
                       <th class="visible-lg hidden-xs">{$lang.a_last_visit}</th>
                       <th>{$lang.a_action}</th>
                   </tr>
            </thead>
             <tbody>
                 {foreach from=$arrayrow item=row} 
                   <div class="modal fade" id="del{$row.id}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-small">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               {$lang.a_del} - <code>{$row.login}</code>
            </h4>
         </div>
         <div class="modal-body">
              <div class="text-center">{$lang.a_del_confirm}</div> </br>
         	         	 <div class="form-group">
                     <input type="checkbox" name="optimize" value="1"/>
                      <label class="control-label">{$lang.a_opotimize}</label>
                     </div>
                  </div>
         <div class="modal-footer">
        {if $row.id > 1} <a href="{$home}{$panel}/users/del/{$row.id}" class="btn btn-primary">{$lang.a_del}</a> {else} <p class="btn btn-primary disabled">{$lang.a_del}</p> {/if} </div>

</div>
</div>
</div>
                    <tr>
                        <td class="visible-lg hidden-xs">{$row.id|esc}</td>
                        <td><a href="{$home}/{$row.id}-{$row.login}" target="_blank" title="">{$row.login|esc}</a></td>
                        <td class="visible-lg hidden-xs">{$row.email|esc}</td>
                        <td class="visible-lg hidden-xs">{$row.date_reg|times}</td>
                        <td class="visible-lg hidden-xs">{$row.date_last|times}</td>
                        <td>
                            {if $row.ban == 0}
                             {if $row.id > 1} <a href="{$home}{$panel}/users/ban/{$row.id}" class="btn btn-xs btn-warning" title="" rel="tooltip" data-original-title="{$lang.a_ban}"><span class="glyphicon glyphicon-ban-circle"></span></a> {else} <p class="btn btn-xs btn-warning disabled" title="" rel="tooltip" data-original-title="{$lang.ban_admin}"><span class="glyphicon glyphicon-ban-circle"></span></p>{/if}
                                {else}
                                <a href="{$home}{$panel}/users/unban/{$row.id}" class="btn btn-xs btn-default" title="" rel="tooltip" data-original-title="{$lang.a_unban}"><span class="glyphicon glyphicon-ok-circle"></span></a>
                                {/if}
                             <a href="{$home}{$panel}/users/edit/{$row.id}" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
                          {if $row.id > 1}  <a href="#" data-toggle="modal" data-target="#del{$row.id}" class="btn btn-xs btn-danger" title="" rel="tooltip" data-original-title="{$lang.a_del}"><span class="glyphicon glyphicon-trash"></span></a> {else} <p class="btn btn-xs btn-danger disabled" title="" rel="tooltip" data-original-title="{$lang.del_admin}"><span class="glyphicon glyphicon-trash"></span></p>{/if}
                        </td>                    </tr>
                     {/foreach}
                                 </tbody>
           </table>
               {if $count > $message}
               <div class="paging_bootstrap pagination">{$pagenav}</div>
               <br/>{/if}
               {else}
               <div class="alert alert-danger">{$lang.user_empty}</div>
               {/if}    

{capture name=add_user}
<div class="modal fade" id="add_user" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               {$lang.add_user}
            </h4>
         </div>
         <div class="modal-body">

            <form class="form-horizontal" role="form" action="{$home}{$panel}/users/add" method="post">
               <div class="form-group">
                  <label class="control-label">{$lang.a_username}:</label>
                     <input name="login" class="form-control" id="login" value="{$smarty.post.login}" type="text"/>
               </div>
               <div class="form-group">
                  <label class="control-label">{$lang.a_pass}:</label>
                     <input name="password" class="form-control" id="password" value="{$smarty.post.password}" type="text"/>
               </div>
               <div class="form-group">
                  <label class="control-label">{$lang.a_email}:</label>
                     <input name="email" class="form-control" id="email" value="{$smarty.post.email}" type="text"/>
               </div>
                              <div class="form-group">
                  <label class="control-label">{$lang.user_group}:</label>
                     <select class="form-control" name="level">
                <option value="1"{if $smarty.post.level == 1} selected="selected"{/if}>{$lang.a_user}</option>
                <option value="90"{if $smarty.post.level == 90} selected="selected"{/if}>{$lang.a_moderator}</option>
                <option value="100"{if $smarty.post.level == 100} selected="selected"{/if}>{$lang.a_admin}</option>
                     </select>
               </div>
         </div>
         <div class="modal-footer">
         <input type="submit" name="ok" value="{$lang.add_user}" class="btn btn-primary"></div>
         </form>
      </div>
   </div>
</div>
{/capture}
{$smarty.capture.add_user}