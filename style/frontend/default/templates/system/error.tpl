{capture name=comments}
    <div class="alert alert-danger margin-top-10">In order to leave a comment, you need to <a href="{$home}/user/login">login</a> or <a href="{$home}/user/signup">register</a> on site!</div> 
{/capture}

{capture name=del_comments}
    <p>{$text|escape|esc|nl2br}</p>
    <form action="{$url}" method="post" class="fon">
        <div class="alert alert-danger">Are you sure you want to delete this comment?</div>
        <input type="submit" name="ok" value="Yes" class="btn btn-primary"> <input type="submit" name="close" value="No" class="btn btn-primary">
    </form>
{/capture}