{capture name=add_comments}
    {if $smile && $smarty.session.device == 'web'}
        <div class="fon menu">    
            <div id="emoticons">
                {foreach from=$smile item=onesmile} 
                    <a href="javascript:void(0);" title="{$onesmile.code|esc|escape}"><img src="{$home}/files/smiles/{$onesmile.photo}" /></a>
                    {/foreach}
            </div>
        </div>               
    {/if}
    <div class="menu">

        <a href="{$home}/smiles">Smiles</a> | <a href="{$home}/bbcode">BB codes</a>
    </div> 
{/capture}

{capture name=edit_comments}
                     <input name="text" type="hidden">
                  	<div id="editor-container">{$row.text|esc|escape}</div>
    {if $smile && $smarty.session.device == 'web'}
        <div class="fon menu">    
            <div id="emoticons">
                {foreach from=$smile item=onesmile} 
                    <a href="javascript:void(0);" title="{$onesmile.code|esc|escape}"><img src="{$home}/files/smiles/{$onesmile.photo}" /></a>
                    {/foreach}
            </div>
        </div>               
    {/if}
    <div class="menu">

        <a href="{$home}/smiles">Smiles</a> | <a href="{$home}/bbcode">BB codes</a>
    </div> 
{/capture}

{capture name=add_file}
    <p>File: <br/> <input type="file" name="file[]" multiple="true" class="form-control"/></p>
    <p>
        Number of files: <em>{$setup.filecount_forum}</em><br/>
       Max size of 1 file: <em>{$setup.filesize_forum}Mb</em>
    </p>
{/capture}

{capture name=smile}
    {if $smile && $smarty.session.device == 'web'}
        <div class="fon menu">    
            <div id="emoticons">
                {foreach from=$smile item=onesmile} 
                    <a href="javascript:void(0);" title="{$onesmile.code|esc|escape}"><img src="{$home}/files/smiles/{$onesmile.photo}" /></a>
                    {/foreach}
            </div>
        </div>               
    {/if}
    <div class="menu">
        <a href="{$home}/smiles">Smiles</a> | <a href="{$home}/bbcode">BB codes</a>
    </div> 
{/capture}