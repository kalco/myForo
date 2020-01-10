<div class="vertical-align margin-bottom-1">
   <div class="text-left row-phone">
      <h2>{$title2}</h2>
      <p>{$description}</p>
   </div>
</div>
<div class="row">
   <div class="col-md-6">
      <table class="table table-bordered">
         <thead>
            <tr>
               <th>{$lang.statistics}</th>
               <th></th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>{$lang.a_total_users}</td>
               <td>
                  <div class="pull-right">
                     <div class="btn-group">
                        <a class="btn btn-primary" href="{$home}{$panel}/users">{$users|number}</a>
                     </div>
                  </div>
               </td>
            </tr>
            <tr>
               <td>{$lang.a_total_ads}</td>
               <td>
                  <div class="pull-right">
                     <div class="btn-group">
                        <a class="btn btn-primary" href="{$home}{$panel}/ads">{$ads|number}</a>
                     </div>
                  </div>
               </td>
            </tr>
            <tr>
               <td>{$lang.a_total_cat}</td>
               <td>
                  <div class="pull-right">
                     <div class="btn-group">
                        <a class="btn btn-primary" href="{$home}{$panel}/forums">{$forum|number}</a>
                     </div>
                  </div>
               </td>
            </tr>
            <tr>
               <td>{$lang.a_total_pages}</td>
               <td>
                  <div class="pull-right">
                     <div class="btn-group">
                        <a class="btn btn-primary" href="{$home}{$panel}/pages">{$pages|number}</a>
                     </div>
                  </div>
               </td>
            </tr>
            <tr>
               <td>{$lang.a_total_thread}</td>
               <td>
                  <div class="pull-right">
                     <div class="btn-group">
                        <a class="btn btn-primary" href="{$home}">{$tema|number}</a>
                     </div>
                  </div>
               </td>
            </tr>
            <tr>
               <td>{$lang.a_total_log}</td>
               <td>
                  <div class="pull-right">
                     <div class="btn-group">
                        <a class="btn btn-primary" href="{$home}{$panel}/logs">{$logs|number}</a>
                     </div>
                  </div>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
   <div class="col-md-6">
      <table class="table table-bordered">
         <thead>
            <tr>
               <th>{$lang.server_info}</th>
               <th></th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td>{$lang.server_info_v}</td>
               <td> <span class="badge badge-inverse">{$setup.version}</span> </td>
            </tr>
            <tr>
               <td>{$lang.server_info_php}</td>
               <td>{if $php > '5.4'} <span class="badge badge-success">{$php}</span>{else}<span class="badge badge-error">{$lang.server_info_no}</span> {/if}</td>
            </tr>
            <tr>
               <td>MySQL:</td>
               <td>{if $mysql == 1} <span class="badge badge-success">{$lang.server_info_ok}</span>{else}<span class="badge badge-error">{$lang.server_info_no}</span> {/if}</td>
            </tr>
            <tr>
               <td>PDO:</td>
               <td>{if $pdo == 1} <span class="badge badge-success">{$lang.server_info_ok}</span>{else}<span class="badge badge-error">{$lang.server_info_no}</span> {/if}</td>
            </tr>
            <tr>
               <td>GD:</td>
               <td>{if $gd == 1} <span class="badge badge-success">{$lang.server_info_ok}</span>{else}<span class="badge badge-error">{$lang.server_info_no}</span> {/if}</td>
            </tr>
            <tr>
               <td>ZLIB:</td>
               <td>{if $zlib == 1} <span class="badge badge-success">{$lang.server_info_ok}</span>{else}<span class="badge badge-error">{$lang.server_info_no}</span> {/if}</td>
            </tr>
            <tr>
               <td>ICONV:</td>
               <td>{if $iconv == 1} <span class="badge badge-success">{$lang.server_info_ok}</span>{else}<span class="badge badge-error">{$lang.server_info_no}</span> {/if}</td>
            </tr>
            <tr>
               <td>Mbstring:</td>
               <td>{if $mbstring == 1} <span class="badge badge-success">{$lang.server_info_ok}</span>{else}<span class="badge badge-error">{$lang.server_info_no}</span> {/if}</td>
            </tr>
            <tr>
               <td>XML:</td>
               <td>{if $xml == 1} <span class="badge badge-success">{$lang.server_info_ok}</span>{else}<span class="badge badge-error">{$lang.server_info_no}</span> {/if}</td>
            </tr>
            <tr>
               <td>XMLWriter:</td>
               <td>{if $XMLWriter == 1} <span class="badge badge-success">{$lang.server_info_ok}</span>{else}<span class="badge badge-error">{$lang.server_info_no}</span> {/if}</td>
            </tr>
         </tbody>
      </table>
   </div>
</div>

