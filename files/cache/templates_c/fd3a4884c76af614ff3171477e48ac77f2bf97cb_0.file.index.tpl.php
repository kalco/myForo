<?php
/* Smarty version 3.1.30, created on 2017-07-02 13:58:03
  from "/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/sitemap/index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5958d1bbcee637_52528783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd3a4884c76af614ff3171477e48ac77f2bf97cb' => 
    array (
      0 => '/home/l/lfatal1/kalco.ru/public_html/style/backend/flat/templates/admin/sitemap/index.tpl',
      1 => 1498993042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5958d1bbcee637_52528783 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_times')) require_once '/home/l/lfatal1/kalco.ru/public_html/app/lib/smarty/plugins/modifier.times.php';
?>
					<div class="row">
						<div class="col-sm-12">
					
							<div class="page-header"> <h3> <?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
 </h3>
							<p class="title-description"> <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
 </p>
							</div>
						</div>
					</div> 
					<div class="row">
						<div class="col-sm-12">
						    <div class="text-center">
						        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/generate" class="btn btn-xs btn-bricky"><i class="clip-tree"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['a_generate'];?>
</a> 
						        <a href="#" class="btn btn-xs btn-warning" data-toggle="modal" data-target="#robots"><i class="clip-file"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['a_robots'];?>
</a>
						        <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/setup" class="btn btn-xs btn-blue"><i class="clip-settings"></i> <?php echo $_smarty_tpl->tpl_vars['lang']->value['a_sitemap_conf'];?>
</a> 
						    </div>
						    <p>&nbsp;</p>
						</div>
				    </div>
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="clip-tree"></i>
									<?php echo $_smarty_tpl->tpl_vars['title2']->value;?>

								</div>
								<p>&nbsp;</p>
								<div class="panel-body">
									<div id="users_block">
									    <?php if ($_smarty_tpl->tpl_vars['arrayrow']->value) {?>
									 <table class="table table-striped table-bordered table-hover table-full-width">
									    <thead>
									        <tr>
									            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
</th>
									            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_link'];?>
</th>
									            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_time'];?>
</th>
									            <th><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_action'];?>
</th>
									            </tr>
									       </thead>
									       <tbody>
									           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrayrow']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>    
									           <tr>
									               <td><a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/sitemap/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a></td>
									               <td><div class="row">
                                                     <div class="col-md-12" style="margin-right:10px">
                                                         <div class="form-group">
                                                             <input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/sitemap/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" readonly="readonly" type="text">
                                                          </div>
                                                     </div>
                                                   </div>
                                                   </td>
									               <td><?php echo smarty_modifier_times(filectime($_smarty_tpl->tpl_vars['name']->value));?>
</td>
									               <td>
									                   <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/edit/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="btn btn-xs btn-blue tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_edit'];?>
"><i class="clip-pencil-3"></i></a>
									                   <a href="<?php echo $_smarty_tpl->tpl_vars['home']->value;
echo $_smarty_tpl->tpl_vars['panel']->value;?>
/sitemap/del/<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
" class="btn btn-xs btn-bricky tooltips" title="" data-original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del'];?>
" onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['lang']->value['a_del_confirm'];?>
');"><i class="clip-remove"></i></a>
									               </td>
									           </tr>
									            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

									       </tbody>
									  </table>
									      <?php if ($_smarty_tpl->tpl_vars['setup']->value['compress'] != 3) {?><div class="alert alert-warning"><?php echo $_smarty_tpl->tpl_vars['lang']->value['compression_info'];?>
</div><?php }?>        
<?php } else { ?>
    <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sitemap_empty'];?>
</div>
									  <?php }?> 
									  </div>
								</div>
							</div>
						</div>
					</div>
					<?php }
}
