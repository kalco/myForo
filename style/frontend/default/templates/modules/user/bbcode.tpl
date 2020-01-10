<div class="head">{$title2}</div>
<div class="fon">
    <table width="100%" border="2" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
        <tr><td align="center">[code]...[/code]</td><td>Code</td></tr>
        <tr><td align="center">[url=http://site_url]Text[/url]</td><td>Link</td></tr>
        <tr><td align="center">[b]...[/b]</td><td><b>Bold</b></td></tr>
        <tr><td align="center">[i]...[/i]</td><td><i>Italic</i></td></tr>
        <tr><td align="center">[u]...[/u]</td><td><u>Underline</u></td></tr>
        <tr><td align="center">[s]...[/s]</td><td><strike>Strike</strike></td></tr>
        <tr><td align="center">[color=color code]...[/color]</td><td>Color text</td></tr>
        <tr><td align="center">[quote]...[/quote]</td><td><blockquote>Quote</blockquote></td></tr>
        <tr><td align="center">[size=font size]...[/size]</td><td>Font size</td></tr>
        <tr><td align="center">[center]...[/center]</td><td><div style="text-align: center;">Center</div></td></tr>
        <tr><td align="center">[img]...[/img]</td><td>Image <img src="/files/nophoto.jpg" class="img-responsive" alt="image"/></td></tr>
    </table>
</div>
<div class="menu"><a href="{$smarty.session.referer}"><i class="fa fa-angle-left"></i> Back</a></div>

  {include file='system/sidebar.tpl'}
{$smarty.capture.sidebar_global}
      <div class="hidden-xs">
    </div>      
  </div>