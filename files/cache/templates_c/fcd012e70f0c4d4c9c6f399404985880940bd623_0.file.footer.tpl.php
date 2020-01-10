<?php
/* Smarty version 3.1.30, created on 2018-07-25 22:16:57
  from "/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b58dab9b283a7_86768981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcd012e70f0c4d4c9c6f399404985880940bd623' => 
    array (
      0 => '/home/l/lfatal1/myforo.ru/public_html/style/backend/flat/templates/footer.tpl',
      1 => 1532549530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/modals.tpl' => 1,
  ),
),false)) {
function content_5b58dab9b283a7_86768981 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_esc')) require_once '/home/l/lfatal1/myforo.ru/public_html/app/lib/smarty/plugins/modifier.esc.php';
$_smarty_tpl->_subTemplateRender("file:admin/modals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'helper_info');?>

</div>
</div>
<div class="margin-top-1  margin-bottom-1 hidden-md"></div>
<footer class="container visible-md visible-lg">
   <p class="pull-right">
      <span>
      &copy; <?php echo $_smarty_tpl->tpl_vars['year']->value;?>
 Created by<a class="highlight" href="<?php echo $_smarty_tpl->tpl_vars['setup']->value['copyright_txt'];?>
" target="_blank"> <?php echo smarty_modifier_esc($_smarty_tpl->tpl_vars['setup']->value['copy']);?>
</a> | <?php echo $_smarty_tpl->tpl_vars['times_page']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['sec'];?>
</span>
   </p>
</footer>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php if ($_SESSION['device'] == 'web') {?>
<link href="https://cdn.quilljs.com/1.3.5/quill.snow.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="https://cdn.quilljs.com/1.3.5/quill.js"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/js/icheck.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/style/backend/<?php echo $_smarty_tpl->tpl_vars['adminskin']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/highlight/styles/default.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
/js/highlight/highlight.pack.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
   var url = window.location;
   $('ul.nav navbar-nav a').filter(function() {
    return this.href == url;
   }).parent().addClass('active');
   
   // for treeview
   $('ul.dropdown-menu a').filter(function() {
    return this.href == url;
   }).closest('.active').addClass('active');
   
   $(document).ready(function() {
   $('[rel="tooltip"]').tooltip();
   
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%'
      });
   });
   
   var toolbarOptions = [
  ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
  ['blockquote', 'code-block'],

  [{ 'list': 'ordered'}, { 'list': 'bullet' }],
  [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
  [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent

  [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

  [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
  [{ 'font': [] }],
  [{ 'align': [] }],
  
  ['link', 'image', 'video'],

  ['clean']                                         // remove formatting button
];
   
   
var quill = new Quill('#editor-container', {
  modules: {
    toolbar: toolbarOptions
  },
  theme: 'snow'
});

var form = document.querySelector('form');
form.onsubmit = function() {
  var text = document.querySelector('input[name=text]');
  text.value = quill.root.innerHTML;
};
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
