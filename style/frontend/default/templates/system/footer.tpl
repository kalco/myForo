
 
       <div class="col-sm-12">
      {*  {if $smarty.server.REQUEST_URI != '/' && $user.id}
        <a class="aw-back-top" href="{$home}/profile/bookmark/add?name={$title}&url={$home}{$smarty.server.REQUEST_URI}"><i class="fa fa-star-half-empty"></i></a>
        
    {/if} *}
    {if $adsfoot} 
    <div class="margin-t-15 margin-b-15 list">
        {foreach from=$adsfoot item=foot key=kfoot}
           <a href="{$home}/go/{$foot.id}"><img src="{$home}/files/banners/{$foot.photo}" class="img-responsive" alt=""/></a>
            {/foreach}
    </div>
{/if}
      </div>
    </div> 
      </div> 
	<nav id="footer" class="navbar navbar-default">
  <div class="container">
      <div class="row">
          <div class="col-sm-4">
             <a href="{$setup.copyright_txt}" target="_blank">{$setup.copy|esc}</a> | <span class="label label-primary">{$times_page} sec.</span>
          </div>
          <div class="col-md-8 text-right text-xs-left">
             {if $pages}
              {foreach from=$pages item=rows key=k}
              <a style ="padding-right:10px;" href="{$home}/pages/{$rows.id}-{$rows.translate}">{$rows.name|esc}</a>
                       {/foreach}
                     
	{/if}
       </div>
      </div>  
  </div>
</nav>

<script src="{$home}/style/frontend/{$skin}/assets/js/bootstrap.min.js"></script>
<script src="{$home}/style/frontend/{$skin}/assets/js/app.js"></script>
{if $smarty.session.device == 'web'}
<link href="https://cdn.quilljs.com/1.3.5/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.5/quill.js"></script>
{/if}
<link rel="stylesheet" href="{$home}/style/frontend/{$skin}/assets/css/animate.css" type="text/css" />
<link rel="stylesheet" href="{$home}/js/highlight/styles/default.css">
<script src="{$home}/js/highlight/highlight.pack.js"></script>
<script src="{$home}/js/cms.js"></script>
		<script>
		{literal}
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
{/literal}
  ga('create', '{$setup.counters|esc}', 'auto');
  ga('send', 'pageview');

</script>
<script>
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