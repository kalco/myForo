<div class="head">{$title2}{if $user.id} / <a href="{$home}/smiles">smiles</a>{/if}</div>
<div class="fon">
    {if $count > 0}
            <table width="100%" border="2" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                <tr>
                  
                    <th style="text-align:center;"><b>Image </b></th>
                    <th style="text-align:center;"><b>Code </b></th>
                </tr>
                {foreach from=$arrayrow item=rows}  
                    <tr>  
                      
                        <td style="text-align:center;"><img src="{$home}/files/smiles/{$rows.photo}"/></td>
                        <td style="text-align:center;">{$rows.code}</td>
                    </tr>
                {/foreach}
            </table>

            {if $count > $message}<div class="paging_bootstrap pagination">{$pagenav}</div><br/>{/if}
        {else}
            <div class="alert alert-danger">No smiels yet ...</div>
        {/if} 
    </div>
    <div class="menu"><a href="{$smarty.session.referer}"><i class="fa fa-angle-left"></i> Back</a></div>
    
      {include file='system/sidebar.tpl'}
{$smarty.capture.sidebar_global}
      <div class="hidden-xs">
    </div>      
  </div>