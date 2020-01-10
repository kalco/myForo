<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
        <p>{$description}</p>
    </div>
    <div class="text-right row-phone">
       <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_page">{$lang.pages_add}</a>
        </div>
</div>

{if $count > 0}
<table class="table table-bordered">
                  <thead>
			<tr>
                            <th>{$lang.a_title}</th>
                            <th>{$lang.a_url}</th>
                            <th>{$lang.a_time}</th>
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
               {$lang.a_del} - <code>{$row.name}</code>
            </h4>
         </div>
         <div class="modal-body">
               <div class="text-center">{$lang.a_del_confirm}</div>
                  </div>
         <div class="modal-footer">
         <a href="{$home}{$panel}/pages/del/{$row.id}" class="btn btn-primary">{$lang.a_del}</a> </div>

</div>
</div>
</div>
				<tr>  
                                <td><a href="{$home}/pages/{$row.id}-{$row.translate}" target="_blank">{$row.name|esc}</a></td>
                                                        <td>    <div class="row">
                              <div class="col-md-12" style="margin-right:10px">
                                 <div class="form-group">
                                    <input class="form-control" value="{$home}/pages/{$row.id}-{$row.translate}" readonly="readonly" type="text">
                                 </div>
                              </div>
                           </div> </td>
                                <td>{$row.time|times}</td>
				<td>            
                                <a href="{$home}{$panel}/pages/edit/{$row.id}" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
                                <a href="#" data-toggle="modal" data-target="#del{$row.id}" class="btn btn-xs btn-danger" title="" rel="tooltip" data-original-title="{$lang.a_del}"><span class="glyphicon glyphicon-trash"></span></a>
                                </td>
                                </tr>
{/foreach}
                  </tbody>
               </table>
{if $count > $message}<div class="paging_bootstrap pagination">{$pagenav}</div><br/>{/if}
{else}
    <div class="alert alert-danger">{$lang.page_empty}</div>
    {/if}    

{capture name=add_page}
<div class="modal fade" id="add_page" tabindex="-1" role="dialog" 
   aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               {$lang.pages_add}
            </h4>
         </div>
         <div class="modal-body">
              {if isset($error)}
        <div class="alert alert-danger">{$error}</div>
              {/if} 
            <form class="form-horizontal" role="form" action="{$home}{$panel}/pages/add" method="post">
               <div class="form-group">
                  <label class="control-label">{$lang.a_title}:</label>
                     <input name="name" class="form-control" id="name" value="{$smarty.post.name}" type="text" required />
               </div>
                <div class="form-group">
               	 <label for="text" class="control-label">{$lang.a_text}:</label>
               	 <input name="text" type="hidden">
                 <div id="editor-container">{$smarty.post.text}</div>
                  </div>
         </div>
         <div class="modal-footer">
         <input type="submit" name="ok" value="{$lang.add_new_page}" class="btn btn-primary"></div>
         </form>
      </div>
   </div>
</div>
{/capture}
{$smarty.capture.add_page}
