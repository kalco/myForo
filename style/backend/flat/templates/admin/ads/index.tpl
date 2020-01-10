<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
        <p>{$description}</p>
    </div>
    <div class="text-right row-phone">
        <a href="#" data-toggle="modal" data-target="#add_banner" class="btn btn-phone btn-primary">{$lang.add_new_banner}</a>
    </div>
</div>
{if $count > 0}
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="visible-lg hidden-xs">{$lang.a_link}</th>
            <th>{$lang.a_views}</th>
            <th>{$lang.a_time}</th>
            <th>{$lang.a_position}</th>
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
         <a href="{$home}{$panel}/ads/del/{$row.id}" class="btn btn-primary">{$lang.a_del}</a> </div>

</div>
</div>
</div>
        
        <tr>
            <td class="visible-lg hidden-xs"><a href="{$row.link|esc}" target="_blank">{$row.name|esc}</a></td>
            <td><a href="{$home}{$panel}/ads/{$row.id}">{$row.counts}</a></td>
            <td>{if $row.time > $realtime}{$row.time|times}{else if $row.count}{$lang.rev_rem}: {$row.count}{else}<span class="badge badge-error">{$lang.expired}</span>{/if}</td>
            <td>
                {if $row.type == 'head_index'}{$lang.ads_pos_1}{/if}
                {if $row.type == 'head'}{$lang.ads_pos_2}{/if}
                {if $row.type == 'head_no_index'}{$lang.ads_pos_3}{/if}
                {if $row.type == 'foot'}{$lang.ads_pos_4}{/if}
                {if $row.type == 'left'}{$lang.ads_pos_5}{/if}
            </td>
            <td>
                <a href="{$home}{$panel}/ads/edit/{$row.id}" class="btn btn-xs btn-info" title=""  rel="tooltip" data-original-title="{$lang.a_edit}"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="#" data-toggle="modal" data-target="#del{$row.id}" class="btn btn-xs btn-danger" title=""  rel="tooltip" data-original-title="{$lang.a_del}"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
        </tr>
        {/foreach}
    </tbody>
</table>
{if $setup.compress != 3}
<div class="alert alert-warning">{$lang.compression_info}</div>
{/if} 
{if $count > $message}
<div class="paging_bootstrap pagination">{$pagenav}</div>
{/if}
{else}
<div class="alert alert-danger">{$lang.banner_empty}</div>
{/if} 
{capture name=add_banner}
<div class="modal fade" id="add_banner" tabindex="-1" role="dialog" 
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" 
                    data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    {$lang.add_new_banner}
                </h4>
            </div>
            <div class="modal-body">
                {if isset($error)}
                <div class="alert alert-danger">{$error}</div>
                {/if} 
                <form class="form-horizontal" action="{$home}{$panel}/ads/add" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="control-label">{$lang.a_link}:</label>
                        <input name="link" class="form-control" id="link" value="{$smarty.post.link}" type="text"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{$lang.a_title}:</label>
                        <input name="name" class="form-control" id="name" value="{$smarty.post.name}" type="text"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{$lang.a_time}:
                        <small><i>{$lang.time_show}</i></small></label>
                        <input name="ch" class="form-control" id="ch" value="{$smarty.post.ch}" type="text"/>
                        <br>
                        <select class="form-control" name="mn">
                            <option value="1">{$lang.a_days}</option>
                            <option value="7" selected="selected">{$lang.a_weeks}</option>
                            <option value="31">{$lang.a_months}</option>
                        </select>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="control-label">{$lang.count_views}:
                        <small><i>{$lang.count_views_help}</i></small></label>
                        <input name="count" class="form-control" id="count" value="{$smarty.post.count}" type="text"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{$lang.a_new_window}:</label>
                        <div class="make-switch switch-small" data-on="success" data-off="danger" data-on-label="{$lang.a_yes}" data-off-label="{$lang.a_no}">
                            <input type="checkbox" id="target" checked="check" name="target" value="1" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{$lang.a_position}:</label>
                        <select class="form-control" name="type">
                            <option value="head_index">{$lang.ads_pos_1}</option>
                            <option value="head_no_index">{$lang.ads_pos_2}</option>
                            <option value="head">{$lang.ads_pos_3}</option>
                            <option value="foot">{$lang.ads_pos_4}</option>
                            <option value="left">{$lang.ads_pos_5}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{$lang.banner_img}:</label>
                        <input name="file" class="form-control" id="file" type="file"/>
                    </div>
            </div>
            <div class="modal-footer">
            <input type="submit" name="ok" value="{$lang.add_banner}" class="btn btn-primary"></div>
            </form>
        </div>
    </div>
</div>
{/capture}
{$smarty.capture.add_banner}