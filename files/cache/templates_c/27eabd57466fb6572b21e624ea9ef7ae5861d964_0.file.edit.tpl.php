<?php
/* Smarty version 3.1.30, created on 2017-12-11 12:32:12
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/ads/edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a2e509c9f2a51_27415449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27eabd57466fb6572b21e624ea9ef7ae5861d964' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/admin/ads/edit.tpl',
      1 => 1512984731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a2e509c9f2a51_27415449 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
?>
<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
        <code><?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['link']);?>
</code>
    </div>
</div>


    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {?>
        <div class="alert alert-error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
    <?php }?>
    <form class="form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" method="post" enctype="multipart/form-data">
    	              <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_link'];?>
</label>
                  <input type="text" class="form-control" name="link" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['link']);?>
"/>
                  </div>
                  <div class="form-group">
                  <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_title'];?>
</label>
                 <input type="text" class="form-control" name="name" value="<?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['row']->value['name']);?>
"/>
                  </div>
                   <div class="form-group">
                 <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_time'];?>
:
                        <small><i><?php echo $_smarty_tpl->tpl_vars['lang']->value['time_show'];?>
</i></small></label>
                 <input type="text" name="ch" class="form-control" value="<?php echo $_POST['ch'];?>
"/>
                 <br>
                  <select class="form-control" name="mn">
                            <option value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_days'];?>
</option>
                            <option value="7" selected="selected"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_weeks'];?>
</option>
                            <option value="31"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_months'];?>
</option>
                        </select>
                  </div>
                  <hr>
                 <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['count_views'];?>
:
                        <small><i><?php echo $_smarty_tpl->tpl_vars['lang']->value['count_views_help'];?>
</i></small></label>
                        <input type="text" class="form-control" name="count" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['count'];?>
"/>
                    </div>
                    <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_new_window'];?>
:</label>
                           <input type="checkbox" name="target" value="1"<?php if ($_smarty_tpl->tpl_vars['row']->value['target'] == 1) {?> checked <?php }?>/>
                    </div>
                  <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['a_position'];?>
:</label>
                        <select class="form-control" name="type">
                <option value="head_index"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'head_index') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_1'];?>
</option>
                <option value="head_no_index"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'head_no_index') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_2'];?>
</option>
                <option value="head"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'head') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_3'];?>
</option>
                <option value="foot"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'foot') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_4'];?>
</option>
                <option value="left"<?php if ($_smarty_tpl->tpl_vars['row']->value['type'] == 'left') {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['ads_pos_5'];?>
</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label"><?php echo $_smarty_tpl->tpl_vars['lang']->value['banner_img'];?>
:</label>
                        <input name="file" class="form-control" id="file" type="file"/>
                    </div>
        <input type="submit" name="ok" value="Отправить" class="btn btn-primary">
    </form>

<?php }
}
