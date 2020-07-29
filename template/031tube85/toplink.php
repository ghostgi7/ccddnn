<div class="top-links">
    <div class="center-hold">
        <div class="member-links">
            <ul>
                {if $cms_config['user_status'] == '1'}
                    {if isset($_SESSION['usermail'])}
                    <li><a href="{:U('user','info','id',1)}">用户中心</a></li>
                    <li><a href="{:U('user','login','logout',1)}">注销</a></li>
                        {else}
                    <li><a data-href="{:U('user','reg',1,1)}" data-fancybox="ajax">注冊</a></li>
                    <li><a data-href="{:U('user','login',1,1)}" data-fancybox="ajax" id="login">登陸</a></li>
                    {/if}

                {/if}

            </ul>
        </div>
    </div>
</div>