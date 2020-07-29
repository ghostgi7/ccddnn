{if IS_AJAX==false}
<script>location.href='/'</script>
{/if}
<strong class="popup-title">登陸</strong>
<div class="popup-holder">
    <form action="{:U('user','login',1,1)}" data-form="ajax" method="post">
        <div class="generic-error hidden">
        </div>
        <div>
            <div class="row">
                <label for="login_username" class="field-label required">用戶名字</label>
                <input type="text" name="email" id="login_username" class="textfield" placeholder="請登錄您的用戶資料"/>
                <div class="field-error down"></div>
            </div>

            <div class="row">
                <label for="login_pass" class="field-label required">密碼</label>
                <input type="password" name="password" id="login_pass" class="textfield"/>
                <div class="field-error down"></div>
            </div>



            <div class="bottom">
                <input type="hidden" name="action" value="login"/>
                <input type="submit" class="submit" value="登陸"/>
                <div class="links">
                    <p><a href="{:U('user','reg',1,1)}" data-fancybox="ajax">立刻注冊</a></p>
                </div>
            </div>
        </div>
    </form>
</div>