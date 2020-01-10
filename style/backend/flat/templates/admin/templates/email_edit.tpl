<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
       <code>{$email}</code>
    </div>
</div>

    <form action="{$url}" method="post">
        <textarea name="text" id="code" rows="25" class="form-control"/>{$template|escape}</textarea><br/>
        <input type="submit" name="ok" value="{$lang.a_save}" class="btn btn-primary">
    </form>
    {if $setup.highlight == 1}
        <link rel="stylesheet" href="{$home}/js/codemirror/lib/codemirror.css">
        <script src="{$home}/js/codemirror/lib/codemirror.js"></script>
        <script src="{$home}/js/codemirror/mode/xml/xml.js"></script>
        <script src="{$home}/js/codemirror/mode/javascript/javascript.js"></script>
        <script src="{$home}/js/codemirror/mode/css/css.js"></script>
        <script src="{$home}/js/codemirror/mode/vbscript/vbscript.js"></script>
        <script src="{$home}/js/codemirror/mode/htmlmixed/htmlmixed.js"></script>	
        <style type="text/css">
            {literal}
                .CodeMirror {border: 1px solid #ccc;}
            {/literal}
        </style>    
        <script>
            {literal}
                var mixedMode = {
                    name: "htmlmixed",
                    scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
                            mode: null},
                        {matches: /(text|application)\/(x-)?vb(a|script)/i,
                            mode: "text/x-scss"}]
                };
                var editor1 = CodeMirror.fromTextArea(document.getElementById("code"), {mode: mixedMode, tabMode: "indent"});
            {/literal}  

        </script>{/if}         
