{include file='admin/modals.tpl'}
{$smarty.capture.helper_info}
</div>
</div>
<div class="margin-top-1  margin-bottom-1 hidden-md"></div>
<footer class="container visible-md visible-lg">
   <p class="pull-right">
      <span>
      &copy; {$year} Created by<a class="highlight" href="{$setup.copyright_txt}" target="_blank"> {$setup.copy|esc}</a> | {$times_page} {$lang.sec}</span>
   </p>
</footer>
<script src="{$home}/style/backend/{$adminskin}/assets/js/bootstrap.min.js"></script>
{if $smarty.session.device == 'web'}
<link href="https://cdn.quilljs.com/1.3.5/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.5/quill.js"></script>
{/if}
<script src="{$home}/style/backend/{$adminskin}/assets/js/icheck.min.js"></script>
<script src="{$home}/style/backend/{$adminskin}/assets/js/main.js"></script>
<link rel="stylesheet" href="{$home}/js/highlight/styles/default.css">
<script src="{$home}/js/highlight/highlight.pack.js"></script>
<script>
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
</script>
</body>
</html>
