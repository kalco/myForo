<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
       <p>{$description}</p>
    </div>
</div>

               <table class="table table-bordered">
                  <thead>
                     <tr>
                        <th>{$lang.a_template_name}</th>
                        <th>{$lang.a_action}</th>
                     </tr>
                  </thead>
                  <tbody>
                     {foreach from=$arrayrowtemplate item=template}
                     <tr>
                        <td>{$template}</td>
                        <td><a href="{$home}{$panel}/templates/email/edit/{$setup.skin}/templates/mail/{$template}" class="btn btn-xs btn-info" title=""rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                     </tr>
                     {/foreach}
                  </tbody>
               </table>
