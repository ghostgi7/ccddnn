<strong class="popup-title">注冊</strong>
<div class="popup-holder">
    <form action="{:U('user','reg',1,1)}" method="post">
        <div class="generic-error hidden"></div>
        <div>
            <div class="row">
                <label>請輸入以下畫面的字符。</label>
                <div class="captcha-control">
                    <div class="image">
                        <img src="/lib/class/yzm.php" alt="驗證圖" onclick="this.src = '/lib/class/yzm.php?t='+(new Date()).getTime()"/>
                        <label for="signup_code" class="field-label required">驗證碼</label>
                        <input type="text" name="verifycode" id="signup_code" class="textfield" autocomplete="off"/>
                        <div class="field-error up"></div>
                    </div>


                </div>
            </div>
            <div class="row">
                <label for="signup_email" class="field-label required">電子郵件</label>
                <input type="text" name="email" id="signup_email" class="textfield" maxlength="100" placeholder="用于登录，密碼丟失，可使用電子郵件重設。"/>
                <button type="button" class="sendcode">发送验证码</button>
                <div class="field-error down"></div>
            </div>

            <div class="row">
                <label for="signup_username" class="field-label required">郵件驗證碼</label>
                <input type="text" name="emailcode" id="signup_username" class="textfield" maxlength="100" placeholder="郵件驗證碼（0-9)"/>
                <div class="field-error down"></div>
            </div>

            <div class="row">
                <label for="signup_pass" class="field-label required">密碼</label>
                <input type="password" name="password" id="signup_pass" class="textfield" placeholder="密碼字數必需超過5"/>
                <div class="field-error down"></div>
            </div>

            <div class="row">
                <label for="signup_pass2" class="field-label required">密碼確認</label>
                <input type="password" name="repassword" id="signup_pass2" class="textfield" placeholder="密碼確認"/>
                <div class="field-error down"></div>
            </div>




            <div class="bottom">
                <input type="submit" class="submit" value="注冊"/>
            </div>
        </div>
    </form>
</div>
<script>
    $('.sendcode').on('click',function () {
        if($('.sendcode').text()=='发送验证码'){
            if($('input[name=email]').val()!=''&&$('input[name=verifycode]').val()!=''){
                $.ajax({
                    type:'post',
                    url:'{:U('user','reg',1,1)}',
                    data:'email='+$('input[name=email]').val()+'&verifycode='+$('input[name=verifycode]').val(),
                    success:function (data) {
                        console.log(data.success);
                        if(!!data.success){
                            $('.sendcode').prop('readonly',true);
                            $('.sendcode').text('60');
                            var buttonTimer = setInterval(function () {
                                if($('.sendcode').text()==0){
                                    $('.sendcode').prop('readonly',false);
                                    $('.sendcode').text('发送验证码');
                                    clearInterval(buttonTimer);
                                }else{
                                    $('.sendcode').text($('.sendcode').text()-1);
                                }

                            },1000)
                        }else{
                            alert(data.msg);
                        }
                    }
                })
            }else{
                alert('信息填写不完整');
            }
        }
    })
    $('.submit').on('click',function () {
        if($('input[name=password]').val()!=$('input[name=repassword]').val()){
            alert('两次输入密码不一致');
            return false;
        }
        if($('input[name=password]').val().length<6){
            alert('密码至少需要六位数');
            return false;
        }
    })
</script>