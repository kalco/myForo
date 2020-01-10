<div class="panel">
        <div class="panel-heading">{$title2}</div>
        <div class="panel-body clearfix">
    {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}    
    <form action="{$url}" method="post" enctype="multipart/form-data" class="form-horizontal">
             <div class="form-group">
                      <label class="col-sm-3 control-label">Title:</label>
    								  <div class="col-sm-9">
                        <input class="form-control text" name="name" value="{$smarty.post.name}" type="text">
    							    </div>
                    </div>
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Category:</label>
                        <div class="col-sm-9">
    									     <select class="form-control" name="cat" >
    				 {foreach from=$cat item=cats}
                <option value="{$cats.id}"{if $cats.id == $cats.name|esc} selected="selected"{/if}>{$cats.name|esc}</option>
            {/foreach}   
            </select>
                        </div>
                      </div>
        <div class="form-group">
                   <label class="col-sm-2 control-label">Message:</label>
                   <input name="text" type="hidden">
                  <div class="col-sm-10">
                  	<div id="editor-container"></div>
                     		    </div>
                    </div>
        {if $setup.captcha_add_theme == 1}
            {include file='system/captcha.tpl'}
        {/if}
        {$smarty.capture.add_file}
        <input type="submit" name="ok" value="Send" class="btn btn-sm btn-primary">
    </form> 
</div>
</div>

  {include file='system/sidebar.tpl'}
{$smarty.capture.sidebar_global}

      <div class="hidden-xs">
    </div>      
  </div>