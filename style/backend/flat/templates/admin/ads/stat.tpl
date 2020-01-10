<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
 <code>{$row.link|esc}</code>
    </div>
</div>

    {if $count > 0}
                <table class="table table-bordered">
                    <tr>
                        <th>{$lang.a_ip}</th>
                        <th class="visible-lg hidden-xs">{$lang.a_country}</th>
                        <th class="visible-lg hidden-xs">{$lang.a_city}</th>
                        <th class="visible-lg hidden-xs">{$lang.a_browser}</th>
                        <th class="visible-lg hidden-xs">{$lang.a_region}</th>
                        <th>{$lang.a_ref}</th>
                        <th class="visible-lg hidden-xs">{$lang.a_date}</th>
                    </tr>
                    {foreach from=$arrayrow item=row}
                        <tr>
                            <td>{$row.ip}</td>
                            <td class="visible-lg hidden-xs">{$row.country}</td>
                            <td class="visible-lg hidden-xs">{$row.city}</td>
                            <td class="visible-lg hidden-xs">{$row.browser}</td>
                            <td class="visible-lg hidden-xs">{$row.region}</td>
                            <td><a href="{$row.referer}" target="_blank">{$row.referer|truncate:32}</a></td>
                            <td class="visible-lg hidden-xs">{$row.time|times}</td>
                        </tr>
                    {/foreach}
                </table>
                  {if $count > $message}
                <div class="paging_bootstrap pagination">{$pagenav}</div>
                <br/>{/if}
            {else}
                <div class="alert alert-danger">Переходов ещё не было!</div>
            {/if} 
