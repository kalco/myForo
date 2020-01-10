<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
        <p>{$description}</p>
    </div>
    <div class="text-right row-phone">
       <a href="#" data-toggle="modal" data-target="#add_forum" class="btn btn-phone btn-primary">{$lang.a_forums_add}</a>
        </div>
</div>
               {if $count > 0}
               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th class="visible-lg hidden-xs">{$lang.a_id}</th>
                        <th>{$lang.a_title}</th>
                        <th>{$lang.a_perms}</th>
                        <th>{$lang.a_action}</th>
                     </tr>
                  </thead>
                  <tbody>
                     {foreach from=$arrayrow item=row key=k}
                     {counter name=num assign=num}
  <div class="modal fade" id="del{$row.id}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-small">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               {$lang.a_del} - <code>{$row.name}</code>
            </h4>
         </div>
         <div class="modal-body">
              <div class="text-center">{$lang.a_del_confirm}</div>
                  </div>
         <div class="modal-footer">
         <a href="{$home}{$panel}/forums/del/{$row.id}" class="btn btn-primary">{$lang.a_del}</a> </div>

</div>
</div>
</div>
                     <tr>
                        <td class="visible-lg hidden-xs">{$row.id}</td>
                        <td>{$row.name|esc}</td>
                        <td>{if $row.type == 0}<span class="badge badge-success" title="" rel="tooltip" data-original-title="{$lang.perms_desc_1}">{$lang.a_perms_all}</span>
                            {else if $row.type == 1}<span class="badge badge-info" title="" rel="tooltip" data-original-title="{$lang.perms_desc_2}">{$lang.a_perms_users}
                            {else if $row.type == 2}<span class="badge badge-error" title="" rel="tooltip" data-original-title="{$lang.perms_desc_3}">{$lang.a_perms_admins}</span>{/if}</td>
                        <td>
                           <a href="{$home}{$panel}/forums/edit/{$row.id}" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
                            <a href="#" data-toggle="modal" data-target="#del{$row.id}" class="btn btn-xs btn-danger" title="" rel="tooltip" data-original-title="{$lang.a_del}"><span class="glyphicon glyphicon-trash"></span></a>
                           {if $num > 1}
                           <a href="{$home}{$panel}/forums/up/{$row.id}" class="btn btn-xs btn-default" title="" rel="tooltip" data-original-title="{$lang.a_up}"><span class="glyphicon glyphicon-chevron-up"></span></a>
                           {/if}
                           {if $num != $count}            
                         <a href="{$home}{$panel}/forums/down/{$row.id}" class="btn btn-xs btn-default" title="" rel="tooltip" data-original-title="{$lang.a_down}"><span class="glyphicon glyphicon-chevron-down"></span></a>
                           {/if}
                        </td>
                     </tr>
                     {/foreach}
                  </tbody>
               </table>
               {else}
               <div class="alert alert-danger">{$lang.categories_empty}</div>
               {/if} 

{capture name=add_forum}
<div class="modal fade" id="add_forum" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               {$lang.a_forums_add}
            </h4>
         </div>
         <div class="modal-body">
            {if isset($error)}
            <div class="alert alert-danger">{$error}</div>
            {/if}  
            <form class="form-horizontal" role="form" action="{$home}{$panel}/forums/add" method="post">
               <div class="form-group">
                  <label class="control-label">{$lang.a_perms}:</label>
                     <select name="type" class="form-control">
                     <option value="0"{if $smarty.post.type == 0} selected="selected"{/if}>{$lang.a_perms_all}</option>
                     <option value="1"{if $smarty.post.type == 1} selected="selected"{/if}>{$lang.a_perms_users}</option>
                     <option value="2"{if $smarty.post.type == 2} selected="selected"{/if}>{$lang.a_perms_admins}</option>
                     </select>
               </div>
               <div class="form-group">
                  <label class="control-label">{$lang.a_title}</label>
                     <input name="name" class="form-control" id="name" value="{$smarty.post.name|esc}" type="text"/>
               </div>
               {include file='admin/seo.tpl'}
               {$smarty.capture.add_seo}
         </div>
         <div class="modal-footer">
         <input type="submit" name="ok" value="{$lang.add_cat}" class="btn btn-primary"></div>
         </form>
      </div>
   </div>
</div>
{/capture}
{$smarty.capture.add_forum}