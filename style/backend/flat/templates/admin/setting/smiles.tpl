<div class="vertical-align margin-bottom-1">
   <div class="text-left row-phone">
      <h2>{$title2}</h2>
      <p>{$description} <span class="badge badge-warning" title="">{$count|number}</span></p>
   </div>
   <div class="text-right row-phone">
      <a href="{$home}{$panel}/setting/smiles/update" class="btn btn-phone btn-primary">{$lang.smiles_update}</a>
   </div>
</div>
{if $count > 0}
<table class="table table-bordered">
   <thead>
      <tr>
         <th>{$lang.a_image}</th>
         <th>{$lang.a_code}</th>
      </tr>
   </thead>
   <tbody>
      {foreach from=$arrayrow item=rows}  
      <tr>
         <td><img src="{$home}/files/smiles/{$rows.photo}"/></td>
         <td>{$rows.code}</td>
      </tr>
      {/foreach}
   </tbody>
</table>
{if $count > $message}
<div class="paging_bootstrap pagination">{$pagenav}</div>
<br/>{/if}     
{else}
<div class="alert alert-danger">{$lang.smiles_empty}</div>
{/if}