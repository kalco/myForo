{capture name=helper_info}
<div class="modal fade" id="helper_info">
   <div class="modal-dialog modal-small" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">{$lang.help_info}</h4>
         </div>
         <div class="modal-body">
            <div class="row">
               <div class="col-md-12">
                  {assign var="name" value="https://xplosive.ru/myforo_info.ini"}
                  {$name|file_get_contents}
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
{/capture}