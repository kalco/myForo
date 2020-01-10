<div class="vertical-align margin-bottom-1">
    <div class="text-left row-phone">
        <h2>{$title2}</h2>
       <p>{$description}</p>
    </div>
</div>

    <table class="table table-bordered">
         <thead>
        <tr>
            <th> Название папки со стилями и шаблонами</th>
            <th>Название шаблона</th>
            <th>Редактор</th>
        </tr>
         </thead>
          <tbody>
        {foreach from=$arrayrowskin item=skin}    
            {assign var="name" value="style/frontend/$skin/info.ini"}
            <tr><td>{$skin}</td> 
                <td>{$name|file_get_contents}</td> 
                <td>   
                    <a href="{$home}{$panel}/templates/view/{$skin}" class="btn btn-xs btn-warning" title="" rel="tooltip" data-original-title="{$lang.a_view}"><span class="glyphicon glyphicon-eye-open"></span></a>
                    <a href="{$home}{$panel}/templates/del/{$skin}" class="btn btn-xs btn-danger" title="" rel="tooltip" data-original-title="{$lang.a_del}"><span class="glyphicon glyphicon-trash"></span></a>
            </tr>
        {/foreach}
         </tbody>
    </table>
{if $setup.compress != 3}<div class="alert alert-danger">Включёно сжатие HTML. Перед редактированием его рекомендуется <a href="{$home}{$panel}/setting">выключить</a>.</div>{/if} 
<h3>Загрузить новый шаблон</h3>
{if isset($error)}<div class="alert alert-danger">
        <button data-dismiss="alert" class="close close-sm" type="button"><i class="fa fa-times"></i></button>{$error}</div>{/if}    
    <form action="{$home}{$panel}/templates" method="post" enctype="multipart/form-data" class="fon">
        <font color="red">*</font>Выбрать zip архив <input name="file" type="file" required/><br/><br/>
        <input type="submit" name="ok" value="Отправить" class="btn btn-primary">
    </form>

   
