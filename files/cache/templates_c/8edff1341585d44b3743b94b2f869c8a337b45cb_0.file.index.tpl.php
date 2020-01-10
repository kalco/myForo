<?php
/* Smarty version 3.1.30, created on 2017-09-23 13:52:17
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59c64af114a206_74309582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8edff1341585d44b3743b94b2f869c8a337b45cb' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/index.tpl',
      1 => 1506167533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59c64af114a206_74309582 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
?>
<div class="row">
   <div class="col-sm-12">
      <div class="page-header">
         <h3> <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 </h3>
         <p class="title-description"> <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
 </p>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-sm-12">
      <div class="row">
         <div class="col-md-6">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <i class="clip-bars"></i>
                  <?php echo $_smarty_tpl->tpl_vars['lang']->value['statistics'];?>

               </div>
               <div class="panel-body">
                  <div class="flot-small-container">
                     <div id="placeholder6" class="flot-small-container">
                        <table class="table table-condensed table-hover" id="sample-table-3">
                           <tbody>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_total_users'];?>
</td>
                                 <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['users']->value);?>
</a></td>
                              </tr>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_total_ads'];?>
</td>
                                 <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['ads']->value);?>
</a></td>
                              </tr>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_total_cat'];?>
</td>
                                 <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/forums"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['forum']->value);?>
</a></td>
                              </tr>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_total_pages'];?>
</td>
                                 <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/pages"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['pages']->value);?>
</a></td>
                              </tr>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_total_thread'];?>
</td>
                                 <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['tema']->value);?>
</a></td>
                              </tr>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_total_log'];?>
</td>
                                 <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/logs"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['logs']->value);?>
</a></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-6">
            <div class="panel panel-default">
               <div class="panel-heading">
                  <i class="clip-info"></i>
                  <?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info'];?>

               </div>
               <div class="panel-body">
                  <div class="flot-small-container">
                     <div id="placeholder6" class="flot-small-container">
                        <table class="table table-condensed table-hover" id="sample-table-3">
                           <tbody>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_v'];?>
</td>
                                 <td><?php echo $_smarty_tpl->tpl_vars['setup']->value['version'];?>
</td>
                              </tr>
                              <tr>
                                 <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_php'];?>
</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['php']->value > '5.4') {?><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['php']->value;?>
</span><?php } else { ?><span style="color:red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span><?php }?></td>
                              </tr>
                              <tr>
                                 <td>MySQL:</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['mysql']->value == 1) {?><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span style="color:red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span><?php }?></td>
                              </tr>
                              <tr>
                                 <td>PDO:</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['pdo']->value == 1) {?><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span style="color:red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span><?php }?></td>
                              </tr>
                              <tr>
                                 <td>GD:</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['gd']->value == 1) {?><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span style="color:red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span><?php }?></td>
                              </tr>
                              <tr>
                                 <td>ZLIB:</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['zlib']->value == 1) {?><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span style="color:red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span><?php }?></td>
                              </tr>
                              <tr>
                                 <td>ICONV:</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['iconv']->value == 1) {?><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span style="color:red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span><?php }?></td>
                              </tr>
                              <tr>
                                 <td>Mbstring:</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['mbstring']->value == 1) {?><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span style="color:red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span><?php }?></td>
                              </tr>
                              <tr>
                                 <td>XML:</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['xml']->value == 1) {?><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span style="color:red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span><?php }?></td>
                              </tr>
                              <tr>
                                 <td>XMLWriter:</td>
                                 <td><?php if ($_smarty_tpl->tpl_vars['XMLWriter']->value == 1) {?><span style="color:green"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span style="color:red"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span><?php }?></td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div><?php }
}
