{capture name=add_seo}
<div class="form-group">
   <label class="control-label">{$lang.a_keyword}:</label>
      <textarea rows="3" name="keywords" class="form-control">{$smarty.post.keywords}</textarea>
</div>
<div class="form-group">
   <label class="control-label">{$lang.a_description}:</label>
      <textarea rows="3" name="description" class="form-control">{$smarty.post.description}</textarea>
</div>
{/capture}
{capture name=edit_seo}
<div class="form-group">
   <label class="control-label">{$lang.a_keyword}:</label>
      <textarea rows="3" name="keywords" class="form-control">{$row.keywords}</textarea>
</div>
<div class="form-group">
   <label class="control-label">{$lang.a_description}:</label>
      <textarea rows="3" name="description" class="form-control">{$row.description}</textarea>
</div>
{/capture}