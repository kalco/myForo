<?php
/* Smarty version 3.1.30, created on 2018-07-25 22:10:19
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/setting/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b58d92b417800_20672109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65ae6605323881389304ba8a363504943d554224' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/setting/index.tpl',
      1 => 1532549417,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b58d92b417800_20672109 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="vertical-align margin-bottom-1">
   <div class="text-left row-phone">
      <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
      <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
   </div>
</div>
<div class="tabbable mobile-nav-tabs">
   <ul class="nav nav-tabs" role="tablist">
      <li class="active"> <a href="#system" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['general_settings'];?>
</a> </li>
      <li> <a href="#other" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['other_settings'];?>
</a></li>
      <li> <a href="#forum" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['forum_settings'];?>
</a></li>
      <li> <a href="#email" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['email_settings'];?>
</a></li>
      <li> <a href="#counters" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['lang']->value['counters'];?>
</a></li>
   </ul>
   <form action="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/setting" method="post">
      <div class="tab-content tab-page margin-bottom-1">
         <div id="system" class="tab-pane active">
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_url'];?>
:</label><input class="form-control" id="item" name="home" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['home']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_copyright'];?>
:</label><input class="form-control" id="item" name="copy" value="<?php echo htmlspecialchars(smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['copy']), ENT_QUOTES, 'UTF-8', true);?>
" type="text" readonly>
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_site_name'];?>
:</label>
               <input class="form-control" id="item" name="namesite" value="<?php echo htmlspecialchars(smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['namesite']), ENT_QUOTES, 'UTF-8', true);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_p_name'];?>
:</label>
               <input class="form-control" id="item" name="adminpanel" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['adminpanel']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_p_email'];?>
:</label>
               <input class="form-control" id="item" name="emailadmin" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['emailadmin']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['antiflood'];?>
: <br>
               <small><i><?php echo $_smarty_tpl->tpl_vars['lang']->value['in_sec'];?>
.</i></small></label>
               <input class="form-control" id="item" name="antiflood" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['antiflood']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_keyword'];?>
:</label>
               <textarea rows="3" name="keywords" class="form-control"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['keywords']);?>
</textarea>
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_description'];?>
:</label>
               <textarea rows="3" name="description" class="form-control"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['description']);?>
</textarea>
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_message_page'];?>
:</label>
               <input class="form-control" id="item" name="message" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['message']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_p_template'];?>
</label>
               <select class="form-control" name="adminskin">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowadminskin']->value, 'adminskin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['adminskin']->value) {
?>
               <?php $_smarty_tpl->_assignInScope('name', "style/backend/".((string)$_smarty_tpl->tpl_vars['adminskin']->value)."/info.ini");
?>
               <option value="<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['setup']->value['adminskin'] == $_smarty_tpl->tpl_vars['adminskin']->value) {?>selected="selected"<?php }?>><?php echo file_get_contents($_smarty_tpl->tpl_vars['name']->value);?>
</option>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

               </select>
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_template'];?>
:</label>
               <select class="form-control" name="skin">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowskin']->value, 'skin');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['skin']->value) {
?>
               <?php $_smarty_tpl->_assignInScope('name', "style/frontend/".((string)$_smarty_tpl->tpl_vars['skin']->value)."/info.ini");
?>
               <option value="<?php echo $_smarty_tpl->tpl_vars['skin']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['setup']->value['skin'] == $_smarty_tpl->tpl_vars['skin']->value) {?>selected="selected"<?php }?>><?php echo file_get_contents($_smarty_tpl->tpl_vars['name']->value);?>
</option>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

               </select>
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_language'];?>
:</label>
               <select class="form-control" name="lang">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrowlang']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
               <option value="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['setup']->value['lang'] == $_smarty_tpl->tpl_vars['lang']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
</option>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

               </select>
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_time_zone'];?>
:</label>
               <select class="form-control" name="timezone">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'zone');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['zone']->value) {
?>
               <option value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['zone']->value['zone_name']);?>
"<?php if ($_smarty_tpl->tpl_vars['setup']->value['timezone'] == smarty_modifier_esc($_smarty_tpl->tpl_vars['zone']->value['zone_name'])) {?> selected="selected"<?php }?>><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['zone']->value['zone_name']);?>
</option>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 
               </select>
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_p_log'];?>
:</label>
               <input type="checkbox" id="adminlogs" <?php if ($_smarty_tpl->tpl_vars['setup']->value['adminlogs'] == 1) {?> checked="check"<?php }?> name="adminlogs" value="1" >
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['compress_html'];?>
:</label>
               <select class="form-control" name="compress">
               <option value="1" <?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] == 1) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['compress_html_1'];?>
</option>
               <option value="2" <?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] == 2) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['compress_html_2'];?>
</option>
               <option value="3" <?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] == 3) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['compress_html_3'];?>
</option>
               </select>
            </div>
         </div>
         <div id="other" class="tab-pane">
            <?php $_smarty_tpl->_assignInScope('highlight', "js/codemirror/lib/codemirror.js");
?>
            <?php if (file_get_contents($_smarty_tpl->tpl_vars['highlight']->value)) {?>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_highlight'];?>
:</label>
               <input type="checkbox" id="highlight" <?php if ($_smarty_tpl->tpl_vars['setup']->value['highlight'] == 1) {?> checked="check"<?php }?> name="highlight" value="1" >
            </div>
            <?php }?>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['point_create_thread'];?>
:</label>
               <input class="form-control" id="item" name="balls_add_thread" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['balls_add_thread']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['point_create_post'];?>
:</label>
               <input class="form-control" id="item" name="balls_add_post" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['balls_add_post']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['point_cost_login'];?>
:</label>
               <input class="form-control" id="item" name="login_edit" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['login_edit']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_limit'];?>
:</label>
               <input class="form-control" id="item" name="adslimit" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['adslimit']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['allow_registration'];?>
:</label>
               <div class="icheckbox_square-blue">
                  <input type="checkbox" id="registration" <?php if ($_smarty_tpl->tpl_vars['setup']->value['registration'] == 1) {?> checked="check"<?php }?> name="registration" value="1" >
               </div>
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['email_activation'];?>
:</label>
               <input type="checkbox" id="activation" <?php if ($_smarty_tpl->tpl_vars['setup']->value['activation'] == 1) {?> checked="check"<?php }?> name="activation" value="1" >
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_captcha_registration'];?>
:</label>
               <input type="checkbox" id="captcha_signup" <?php if ($_smarty_tpl->tpl_vars['setup']->value['captcha_signup'] == 1) {?> checked="check"<?php }?> name="captcha_signup" value="1" >
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_captcha_width'];?>
: <br>
               <small><i><?php echo $_smarty_tpl->tpl_vars['lang']->value['in_px'];?>
.</i></small></label>
               <input class="form-control" id="item" name="captcha_width" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['captcha_width']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_captcha_height'];?>
: <br>
               <small><i><?php echo $_smarty_tpl->tpl_vars['lang']->value['in_px'];?>
.</i></small></label>
               <input class="form-control" id="item" name="captcha_height" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['captcha_height']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_captcha_f_size'];?>
: <br>
               <small><i><?php echo $_smarty_tpl->tpl_vars['lang']->value['in_px'];?>
.</i></small></label>
               <input class="form-control" id="item" name="captcha_font_size" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['captcha_font_size']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_captcha_char'];?>
:</label>
               <input class="form-control" id="item" name="captcha_let_amount" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['captcha_let_amount']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_captcha_char_bg'];?>
:</label>
               <input class="form-control" id="item" name="captcha_let_amount_fon" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['captcha_let_amount_fon']);?>
" type="text">
            </div>
         </div>
         <div id="forum" class="tab-pane">
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_captcha_new_thread'];?>
:</label>
               <input type="checkbox" id="captcha_add_thread" <?php if ($_smarty_tpl->tpl_vars['setup']->value['captcha_add_thread'] == 1) {?> checked="check"<?php }?> name="captcha_add_thread" value="1" >
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_captcha_new_post'];?>
:</label>
               <input type="checkbox" id="captcha_add_post" <?php if ($_smarty_tpl->tpl_vars['setup']->value['captcha_add_post'] == 1) {?> checked="check"<?php }?> name="captcha_add_post" value="1" >
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['allowed_file_format'];?>
:</label>
               <textarea rows="3" name="filetype_forum" class="form-control"><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['filetype_forum']);?>
</textarea>
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['max_file_size'];?>
: <br>
               <small><i><?php echo $_smarty_tpl->tpl_vars['lang']->value['in_mb'];?>
.</i></small></label>
               <input class="form-control" id="item" name="filesize_forum" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['filesize_forum']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['max_file_in_post'];?>
:</label>
               <input class="form-control" id="item" name="filecount_forum" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['filecount_forum']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_time_old_thread'];?>
: <br>
               <small><i><?php echo $_smarty_tpl->tpl_vars['lang']->value['in_sec'];?>
.</i></small></label>
               <input class="form-control" id="item" name="time_forum" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['time_forum']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_vote_options'];?>
:</label>
               <input class="form-control" id="item" name="vote_forum" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['vote_forum']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_last_thread_show'];?>
:</label>
               <input class="form-control" id="item" name="lastthread" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['lastthread']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_last_post_show'];?>
:</label>
               <input class="form-control" id="item" name="lastposts" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['lastposts']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['time_edit_post_user'];?>
: <br>
               <small><i><?php echo $_smarty_tpl->tpl_vars['lang']->value['in_min'];?>
.</i></small></label>
               <input class="form-control" id="item" name="forum_time_edit_post" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['forum_time_edit_post']);?>
" type="text">
            </div>
         </div>
         <div id="email" class="tab-pane">
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_type_email'];?>
:</label>
               <select class="form-control" name="sendmail">
               <option value="mail" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sendmail'] == 'mail') {?>selected="selected"<?php }?>>mail</option>
               <option value="smtp" <?php if ($_smarty_tpl->tpl_vars['setup']->value['sendmail'] == 'smtp') {?>selected="selected"<?php }?>>SMTP</option>
               </select>
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_smtp_port'];?>
:</label>
               <input class="form-control" id="item" name="smtpport" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['smtpport']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_smtp_host'];?>
:</label>
               <input class="form-control" id="item" name="smtphost" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['smtphost']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_smtp_username'];?>
:</label>
               <input class="form-control" id="item" name="smtpusername" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['smtpusername']);?>
" type="text">
            </div>
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_smtp_password'];?>
:</label>
               <input class="form-control" id="item" name="smtppassword" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['smtppassword']);?>
" type="text">
            </div>
         </div>
         <div id="counters" class="tab-pane">
            <div class="form-group">
               <label><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_ga'];?>
: <br>
               <small><i><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_ex'];?>
 UA-XXXXXXXX-1</i></small></label>
               <input class="form-control" id="item" name="counters" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['counters']);?>
" type="text">
            </div>
            <?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?>
            <div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_disable_compress'];?>
</div>
            <?php }?>
         </div>
         <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">
               <input type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_save'];?>
" class="btn btn-primary">
            </div>
            <div class="col-md-5"></div>
         </div>
      </div>
   </form>
</div><?php }
}
