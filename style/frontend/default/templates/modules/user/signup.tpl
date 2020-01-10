<div class="col-sm-12 col-md-12 aw-main-content">
<div class="mod-body">
    <div class="mod-head common-head">
							<h2><i class="fa fa-sign-in"></i>{$title2}</h2>
						</div>
						<div class="aw-register-box">
						    {if $setup.registration == 1} 
        {if isset($error)}<div class="alert alert-danger">{$error}</div>{/if}
        <form action="{$url}" method="post">
            <ul>
            <li><input id="aw-register-user-name" class="form-control" value="{$smarty.post.login}" placeholder="Username" name="login" type="text" required></li>
            <li><input id="aw-register-user-name" class="form-control" value="{$smarty.post.email}" placeholder="Email" name="email" type="email" required></li>
            <li><input id="aw-register-user-name" class="form-control" alue="{$smarty.post.password}" placeholder="Password" name="password" type="password" required></li>
             {if $setup.captcha_signup == 1}
                        {include file='system/captcha.tpl'}
                    {/if}
            <li class="clearfix">
            <input class="btn btn-large btn-blue btn-block" type="submit" name="ok" value="Sign up"></li>
                        <li class="last">
                            Already registered? <a href="{$home}/user/login">Login</a>
            </li>
            </ul>
        </form>
         {if $setup.activation == 1}<div class="alert alert-info">A link to activate your account will be sent to your e-mail.</div>{/if}
         {else}
            <div class="alert alert-danger">Registration on the site is disabled!</div>
        {/if}
    </div>
        </div>
    </div>
</div>