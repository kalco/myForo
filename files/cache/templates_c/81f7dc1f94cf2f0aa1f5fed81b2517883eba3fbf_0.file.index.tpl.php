<?php
/* Smarty version 3.1.30, created on 2018-03-02 17:45:10
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a997f96585c34_92666320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81f7dc1f94cf2f0aa1f5fed81b2517883eba3fbf' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/index.tpl',
      1 => 1520009108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a997f96585c34_92666320 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_number')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.number.php';
?>
<div class="vertical-align margin-bottom-1">
   <div class="text-left row-phone">
      <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
      <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
   </div>
</div>
<div class="row">
   <div class="col-md-6">
      <table class="table table-bordered">
         <thead>
            <tr>
               <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['statistics'];?>
</th>
               <th></th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_total_users'];?>
</td>
               <td>
                  <div class="pull-right">
                     <div class="btn-group">
                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/users"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['users']->value);?>
</a>
                     </div>
                  </div>
               </td>
            </tr>
            <tr>
               <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_total_ads'];?>
</td>
               <td>
                  <div class="pull-right">
                     <div class="btn-group">
                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/ads"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['ads']->value);?>
</a>
                     </div>
                  </div>
               </td>
            </tr>
            <tr>
               <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_total_cat'];?>
</td>
               <td>
                  <div class="pull-right">
                     <div class="btn-group">
                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/forums"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['forum']->value);?>
</a>
                     </div>
                  </div>
               </td>
            </tr>
            <tr>
               <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_total_pages'];?>
</td>
               <td>
                  <div class="pull-right">
                     <div class="btn-group">
                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/pages"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['pages']->value);?>
</a>
                     </div>
                  </div>
               </td>
            </tr>
            <tr>
               <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_total_thread'];?>
</td>
               <td>
                  <div class="pull-right">
                     <div class="btn-group">
                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['tema']->value);?>
</a>
                     </div>
                  </div>
               </td>
            </tr>
            <tr>
               <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_total_log'];?>
</td>
               <td>
                  <div class="pull-right">
                     <div class="btn-group">
                        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/logs"><?php echo smarty_modifier_number($_smarty_tpl->tpl_vars['logs']->value);?>
</a>
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
               <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info'];?>
</th>
               <th></th>
            </tr>
         </thead>
         <tbody>
            <tr>
               <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_v'];?>
</td>
               <td> <span class="badge badge-inverse"><?php echo $_smarty_tpl->tpl_vars['setup']->value['version'];?>
</span> </td>
            </tr>
            <tr>
               <td><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_php'];?>
</td>
               <td><?php if ($_smarty_tpl->tpl_vars['php']->value > '5.4') {?> <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['php']->value;?>
</span><?php } else { ?><span class="badge badge-error"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span> <?php }?></td>
            </tr>
            <tr>
               <td>MySQL:</td>
               <td><?php if ($_smarty_tpl->tpl_vars['mysql']->value == 1) {?> <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span class="badge badge-error"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span> <?php }?></td>
            </tr>
            <tr>
               <td>PDO:</td>
               <td><?php if ($_smarty_tpl->tpl_vars['pdo']->value == 1) {?> <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span class="badge badge-error"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span> <?php }?></td>
            </tr>
            <tr>
               <td>GD:</td>
               <td><?php if ($_smarty_tpl->tpl_vars['gd']->value == 1) {?> <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span class="badge badge-error"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span> <?php }?></td>
            </tr>
            <tr>
               <td>ZLIB:</td>
               <td><?php if ($_smarty_tpl->tpl_vars['zlib']->value == 1) {?> <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span class="badge badge-error"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span> <?php }?></td>
            </tr>
            <tr>
               <td>ICONV:</td>
               <td><?php if ($_smarty_tpl->tpl_vars['iconv']->value == 1) {?> <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span class="badge badge-error"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span> <?php }?></td>
            </tr>
            <tr>
               <td>Mbstring:</td>
               <td><?php if ($_smarty_tpl->tpl_vars['mbstring']->value == 1) {?> <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span class="badge badge-error"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span> <?php }?></td>
            </tr>
            <tr>
               <td>XML:</td>
               <td><?php if ($_smarty_tpl->tpl_vars['xml']->value == 1) {?> <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span class="badge badge-error"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span> <?php }?></td>
            </tr>
            <tr>
               <td>XMLWriter:</td>
               <td><?php if ($_smarty_tpl->tpl_vars['XMLWriter']->value == 1) {?> <span class="badge badge-success"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_ok'];?>
</span><?php } else { ?><span class="badge badge-error"><?php echo $_smarty_tpl->tpl_vars['lang']->value['server_info_no'];?>
</span> <?php }?></td>
            </tr>
         </tbody>
      </table>
   </div>
</div>

<?php }
}
