<div class="vertical-align margin-bottom-1">
   <div class="text-left row-phone">
        <h2>{$title2}</h2>
         <code> {$row.name} </code>
    </div>
</div>

              {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}  
          <form class="form-horizontal" role="form" action="{$home}{$panel}/pages/edit/{$row.id}" method="post">
              <div class="form-group">
                  <label class="control-label">{$lang.a_title}:</label>
                     <input name="name" class="form-control" id="name" value="{$row.name}" type="text" required />
               </div>
               <div class="form-group">
               	 <label for="text" class="control-label">{$lang.a_text}:</label>
               	 <input name="text" type="hidden">
                 <div id="editor-container">{$row.text|esc}</div>
                  </div>
<input type="submit" name="ok" value="{$lang.a_save}" class="btn btn-primary">
</form>     

