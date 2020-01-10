<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
        <code>{$row.link|esc}</code>
    </div>
</div>
    {if isset($error)}
        <div class="alert alert-danger">{$error}</div>
    {/if}
    <form class="form-horizontal" action="{$url}" method="post" enctype="multipart/form-data">
    	              <div class="form-group">
                  <label class="control-label">{$lang.a_link}</label>
                  <input type="text" class="form-control" name="link" value="{$row.link|esc}"/>
                  </div>
                  <div class="form-group">
                  <label class="control-label">{$lang.a_title}</label>
                 <input type="text" class="form-control" name="name" value="{$row.name|esc}"/>
                  </div>
                   <div class="form-group">
                 <label class="control-label">{$lang.a_time}:
                        <small><i>{$lang.time_show}</i></small></label>
                 <input type="text" name="ch" class="form-control" value="{$smarty.post.ch}"/>
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
                        <input type="text" class="form-control" name="count" value="{$row.count}"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{$lang.a_new_window}:</label>
                           <input type="checkbox" name="target" value="1"{if $row.target == 1} checked {/if}/>
                    </div>
                  <div class="form-group">
                        <label class="control-label">{$lang.a_position}:</label>
                        <select class="form-control" name="type">
                <option value="head_index"{if $row.type == 'head_index'} selected="selected"{/if}>{$lang.ads_pos_1}</option>
                <option value="head_no_index"{if $row.type == 'head_no_index'} selected="selected"{/if}>{$lang.ads_pos_2}</option>
                <option value="head"{if $row.type == 'head'} selected="selected"{/if}>{$lang.ads_pos_3}</option>
                <option value="foot"{if $row.type == 'foot'} selected="selected"{/if}>{$lang.ads_pos_4}</option>
                <option value="left"{if $row.type == 'left'} selected="selected"{/if}>{$lang.ads_pos_5}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">{$lang.banner_img}:</label>
                        <input name="file" class="form-control" id="file" type="file"/>
                    </div>
        <input type="submit" name="ok" value="Отправить" class="btn btn-primary">
    </form>

