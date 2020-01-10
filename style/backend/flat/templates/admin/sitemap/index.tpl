<div class="text-right row-phone">
    <a href="{$home}{$panel}/sitemap/generate" class="btn btn-phone btn-success">{$lang.a_generate}</a>
    <a href="#" class="btn btn-phone btn-warning"  data-toggle="modal" data-target="#robots">{$lang.a_robots}</a>
    <a href="#" class="btn btn-phone btn-info" data-toggle="modal" data-target="#config">{$lang.a_sitemap_conf}</a>
</div>
<hr>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
        <p>{$description}</p>
    </div>
</div>
{if $arrayrow}
<table class="table table-bordered">
    <thead>
        <tr>
            <th>{$lang.a_title}</th>
            <th>{$lang.a_link}</th>
            <th>{$lang.a_action}</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$arrayrow item=row} 
  <div class="modal fade" id="del" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-small">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" 
               data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">
               {$lang.a_del} - <code>{$row}</code>
            </h4>
         </div>
         <div class="modal-body">
              <div class="text-center">{$lang.a_del_confirm}</div>
                  </div>
         <div class="modal-footer">
         <a href="{$home}{$panel}/sitemap/del/{$row}" class="btn btn-primary">{$lang.a_del}</a> </div>

</div>
</div>
</div>
        <tr>
            <td><a href="{$home}/sitemap/{$row}" target="_blank">{$row}</a></td>
            <td>
                <div class="row">
                    <div class="col-md-12" style="margin-right:10px">
                        <div class="form-group">
                            <input class="form-control" value="{$home}/sitemap/{$row}" readonly="readonly" type="text">
                        </div>
                    </div>
                </div>
            </td>
            <td>
                <a href="{$home}{$panel}/sitemap/edit/{$row}" class="btn btn-xs btn-info" title="" rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="#" data-toggle="modal" data-target="#del" class="btn btn-xs btn-danger" title="" rel="tooltip" data-original-title="{$lang.a_del}"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>
{if $setup.compress != 3}
<div class="alert alert-warning">{$lang.compression_info}</div>
{/if}        
{else}
<div class="alert alert-danger">{$lang.sitemap_empty}</div>
{/if} 
{capture name=robots}
<div class="modal fade" id="robots" tabindex="-1" role="dialog" 
    aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" 
                    data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel1">
                    {$lang.robot_edit}
                </h4>
            </div>
            <div class="modal-body">
                {if $setup.compress != 3}
                <div class="alert alert-warning">{$lang.compression_info}</div>
                {/if}
                <form class="form-horizontal" role="form" action="{$home}{$panel}/sitemap" method="post">
                    <div class="form-group">
                        <textarea name="text" class="form-control" rows="10"/>{$template|escape}</textarea>
                    </div>
            </div>
            <div class="modal-footer">
            <input type="submit" name="ok" value="{$lang.a_save}" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
</div>
{/capture}
{capture name=config}
<div class="modal fade" id="config" tabindex="-1" role="dialog" 
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" 
                    data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    {$lang.a_sitemap_conf}
                </h4>
            </div>
            <div class="modal-body">
                {if $setup.compress != 3}
                <div class="alert alert-warning">{$lang.compression_info}</div>
                {/if}
                <form class="form-horizontal" role="form" action="{$home}{$panel}/sitemap/config" method="post">
                    <div class="form-group">
                        <label class="control-label">{$lang.sitemap_index}:</label>
                        <select class="form-control" name="sitemap_index">
                        <option value="1" {if $setup.sitemap_index == '1'}selected="selected"{/if}>{$lang.a_on}</option>
                        <option value="2" {if $setup.sitemap_index == '2'}selected="selected"{/if}>{$lang.a_off}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{$lang.sitemap_text}:</label>
                        <select class="form-control" name="sitemap_txt">
                        <option value="1" {if $setup.sitemap_txt == '1'}selected="selected"{/if}>{$lang.a_on}</option>
                        <option value="2" {if $setup.sitemap_txt == '2'}selected="selected"{/if}>{$lang.a_off}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{$lang.sitemap_probable}:</label>
                        <select class="form-control" name="sitemap_changefreq">
                        <option value="always" {if $setup.sitemap_changefreq == 'always'}selected="selected"{/if}>{$lang.always}</option>
                        <option value="hourly" {if $setup.sitemap_changefreq == 'hourly'}selected="selected"{/if}>{$lang.hourly}</option>
                        <option value="daily" {if $setup.sitemap_changefreq == 'daily'}selected="selected"{/if}>{$lang.daily}</option>
                        <option value="weekly" {if $setup.sitemap_changefreq == 'weekly'}selected="selected"{/if}>{$lang.weekly}</option>
                        <option value="monthly" {if $setup.sitemap_changefreq == 'monthly'}selected="selected"{/if}>{$lang.monthly}</option>
                        <option value="yearly" {if $setup.sitemap_changefreq == 'yearly'}selected="selected"{/if}>{$lang.yearly}</option>
                        <option value="never" {if $setup.sitemap_changefreq == 'never'}selected="selected"{/if}>{$lang.never}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{$lang.sitemap_priority}: <span class="small-link">0,0 - 1,0</span></label>
                        <input name="sitemap_priority" class="form-control" id="sitemap_priority" value="{$setup.sitemap_priority|esc}" type="text"/>
                    </div>
            </div>
            <div class="modal-footer">
            <input type="submit" name="submit" value="{$lang.a_save}" class="btn btn-primary"></div>
            </form>
        </div>
    </div>
</div>
{/capture}
{$smarty.capture.config}
{$smarty.capture.robots}