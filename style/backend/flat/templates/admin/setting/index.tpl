<div class="vertical-align margin-bottom-1">
   <div class="text-left row-phone">
      <h2>{$title2}</h2>
      <p>{$description}</p>
   </div>
</div>
<div class="tabbable mobile-nav-tabs">
   <ul class="nav nav-tabs" role="tablist">
      <li class="active"> <a href="#system" role="tab" data-toggle="tab">{$lang.general_settings}</a> </li>
      <li> <a href="#other" role="tab" data-toggle="tab">{$lang.other_settings}</a></li>
      <li> <a href="#forum" role="tab" data-toggle="tab">{$lang.forum_settings}</a></li>
      <li> <a href="#email" role="tab" data-toggle="tab">{$lang.email_settings}</a></li>
      <li> <a href="#counters" role="tab" data-toggle="tab">{$lang.counters}</a></li>
   </ul>
   <form action="{$home}{$panel}/setting" method="post">
      <div class="tab-content tab-page margin-bottom-1">
         <div id="system" class="tab-pane active">
            <div class="form-group">
               <label>{$lang.a_url}:</label><input class="form-control" id="item" name="home" value="{$setup.home|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_copyright}:</label><input class="form-control" id="item" name="copy" value="{$setup.copy|esc|escape:"html"}" type="text" readonly>
            </div>
            <div class="form-group">
               <label>{$lang.a_site_name}:</label>
               <input class="form-control" id="item" name="namesite" value="{$setup.namesite|esc|escape:"html"}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_p_name}:</label>
               <input class="form-control" id="item" name="adminpanel" value="{$setup.adminpanel|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_p_email}:</label>
               <input class="form-control" id="item" name="emailadmin" value="{$setup.emailadmin|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.antiflood}: <br>
               <small><i>{$lang.in_sec}.</i></small></label>
               <input class="form-control" id="item" name="antiflood" value="{$setup.antiflood|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_keyword}:</label>
               <textarea rows="3" name="keywords" class="form-control">{$setup.keywords|esc}</textarea>
            </div>
            <div class="form-group">
               <label>{$lang.a_description}:</label>
               <textarea rows="3" name="description" class="form-control">{$setup.description|esc}</textarea>
            </div>
            <div class="form-group">
               <label>{$lang.a_message_page}:</label>
               <input class="form-control" id="item" name="message" value="{$setup.message|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_p_template}</label>
               <select class="form-control" name="adminskin">
               {foreach from=$arrayrowadminskin item=adminskin}
               {assign var="name" value="style/backend/$adminskin/info.ini"}
               <option value="{$adminskin}" {if $setup.adminskin == $adminskin}selected="selected"{/if}>{$name|file_get_contents}</option>
               {/foreach}
               </select>
            </div>
            <div class="form-group">
               <label>{$lang.a_template}:</label>
               <select class="form-control" name="skin">
               {foreach from=$arrayrowskin item=skin}
               {assign var="name" value="style/frontend/$skin/info.ini"}
               <option value="{$skin}" {if $setup.skin == $skin}selected="selected"{/if}>{$name|file_get_contents}</option>
               {/foreach}
               </select>
            </div>
            <div class="form-group">
               <label>{$lang.a_language}:</label>
               <select class="form-control" name="lang">
               {foreach from=$arrayrowlang item=lang}
               <option value="{$lang}" {if $setup.lang == $lang}selected="selected"{/if}>{$lang}</option>
               {/foreach}
               </select>
            </div>
            <div class="form-group">
               <label>{$lang.a_time_zone}:</label>
               <select class="form-control" name="timezone">
               {foreach from=$arrayrow item=zone}
               <option value="{$zone.zone_name|esc}"{if $setup.timezone == $zone.zone_name|esc} selected="selected"{/if}>{$zone.zone_name|esc}</option>
               {/foreach} 
               </select>
            </div>
            <div class="form-group">
               <label>{$lang.a_p_log}:</label>
               <input type="checkbox" id="adminlogs" {if $setup.adminlogs == 1} checked="check"{/if} name="adminlogs" value="1" >
            </div>
            <div class="form-group">
               <label>{$lang.compress_html}:</label>
               <select class="form-control" name="compress">
               <option value="1" {if $setup.compress == 1}selected="selected"{/if}>{$lang.compress_html_1}</option>
               <option value="2" {if $setup.compress == 2}selected="selected"{/if}>{$lang.compress_html_2}</option>
               <option value="3" {if $setup.compress == 3}selected="selected"{/if}>{$lang.compress_html_3}</option>
               </select>
            </div>
         </div>
         <div id="other" class="tab-pane">
            {assign var="highlight" value="js/codemirror/lib/codemirror.js"}
            {if $highlight|file_get_contents}
            <div class="form-group">
               <label>{$lang.a_highlight}:</label>
               <input type="checkbox" id="highlight" {if $setup.highlight == 1} checked="check"{/if} name="highlight" value="1" >
            </div>
            {/if}
            <div class="form-group">
               <label>{$lang.point_create_thread}:</label>
               <input class="form-control" id="item" name="balls_add_thread" value="{$setup.balls_add_thread|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.point_create_post}:</label>
               <input class="form-control" id="item" name="balls_add_post" value="{$setup.balls_add_post|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.point_cost_login}:</label>
               <input class="form-control" id="item" name="login_edit" value="{$setup.login_edit|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.ads_limit}:</label>
               <input class="form-control" id="item" name="adslimit" value="{$setup.adslimit|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.allow_registration}:</label>
               <div class="icheckbox_square-blue">
                  <input type="checkbox" id="registration" {if $setup.registration == 1} checked="check"{/if} name="registration" value="1" >
               </div>
            </div>
            <div class="form-group">
               <label>{$lang.email_activation}:</label>
               <input type="checkbox" id="activation" {if $setup.activation == 1} checked="check"{/if} name="activation" value="1" >
            </div>
            <div class="form-group">
               <label>{$lang.a_captcha_registration}:</label>
               <input type="checkbox" id="captcha_signup" {if $setup.captcha_signup == 1} checked="check"{/if} name="captcha_signup" value="1" >
            </div>
            <div class="form-group">
               <label>{$lang.a_captcha_width}: <br>
               <small><i>{$lang.in_px}.</i></small></label>
               <input class="form-control" id="item" name="captcha_width" value="{$setup.captcha_width|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_captcha_height}: <br>
               <small><i>{$lang.in_px}.</i></small></label>
               <input class="form-control" id="item" name="captcha_height" value="{$setup.captcha_height|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_captcha_f_size}: <br>
               <small><i>{$lang.in_px}.</i></small></label>
               <input class="form-control" id="item" name="captcha_font_size" value="{$setup.captcha_font_size|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_captcha_char}:</label>
               <input class="form-control" id="item" name="captcha_let_amount" value="{$setup.captcha_let_amount|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_captcha_char_bg}:</label>
               <input class="form-control" id="item" name="captcha_let_amount_fon" value="{$setup.captcha_let_amount_fon|esc}" type="text">
            </div>
         </div>
         <div id="forum" class="tab-pane">
            <div class="form-group">
               <label>{$lang.a_captcha_new_thread}:</label>
               <input type="checkbox" id="captcha_add_thread" {if $setup.captcha_add_thread == 1} checked="check"{/if} name="captcha_add_thread" value="1" >
            </div>
            <div class="form-group">
               <label>{$lang.a_captcha_new_post}:</label>
               <input type="checkbox" id="captcha_add_post" {if $setup.captcha_add_post == 1} checked="check"{/if} name="captcha_add_post" value="1" >
            </div>
            <div class="form-group">
               <label>{$lang.allowed_file_format}:</label>
               <textarea rows="3" name="filetype_forum" class="form-control">{$setup.filetype_forum|esc}</textarea>
            </div>
            <div class="form-group">
               <label>{$lang.max_file_size}: <br>
               <small><i>{$lang.in_mb}.</i></small></label>
               <input class="form-control" id="item" name="filesize_forum" value="{$setup.filesize_forum|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.max_file_in_post}:</label>
               <input class="form-control" id="item" name="filecount_forum" value="{$setup.filecount_forum|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_time_old_thread}: <br>
               <small><i>{$lang.in_sec}.</i></small></label>
               <input class="form-control" id="item" name="time_forum" value="{$setup.time_forum|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_vote_options}:</label>
               <input class="form-control" id="item" name="vote_forum" value="{$setup.vote_forum|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_last_thread_show}:</label>
               <input class="form-control" id="item" name="lastthread" value="{$setup.lastthread|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_last_post_show}:</label>
               <input class="form-control" id="item" name="lastposts" value="{$setup.lastposts|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.time_edit_post_user}: <br>
               <small><i>{$lang.in_min}.</i></small></label>
               <input class="form-control" id="item" name="forum_time_edit_post" value="{$setup.forum_time_edit_post|esc}" type="text">
            </div>
         </div>
         <div id="email" class="tab-pane">
            <div class="form-group">
               <label>{$lang.a_type_email}:</label>
               <select class="form-control" name="sendmail">
               <option value="mail" {if $setup.sendmail == mail}selected="selected"{/if}>mail</option>
               <option value="smtp" {if $setup.sendmail == smtp}selected="selected"{/if}>SMTP</option>
               </select>
            </div>
            <div class="form-group">
               <label>{$lang.a_smtp_port}:</label>
               <input class="form-control" id="item" name="smtpport" value="{$setup.smtpport|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_smtp_host}:</label>
               <input class="form-control" id="item" name="smtphost" value="{$setup.smtphost|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_smtp_username}:</label>
               <input class="form-control" id="item" name="smtpusername" value="{$setup.smtpusername|esc}" type="text">
            </div>
            <div class="form-group">
               <label>{$lang.a_smtp_password}:</label>
               <input class="form-control" id="item" name="smtppassword" value="{$setup.smtppassword|esc}" type="text">
            </div>
         </div>
         <div id="counters" class="tab-pane">
            <div class="form-group">
               <label>{$lang.a_ga}: <br>
               <small><i>{$lang.a_ex} UA-XXXXXXXX-1</i></small></label>
               <input class="form-control" id="item" name="counters" value="{$setup.counters|esc}" type="text">
            </div>
            {if $setup.compress != 3}
            <div class="alert alert-warning">{$lang.a_disable_compress}</div>
            {/if}
         </div>
         <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">
               <input type="submit" name="submit" value="{$lang.a_save}" class="btn btn-primary">
            </div>
            <div class="col-md-5"></div>
         </div>
      </div>
   </form>
</div>