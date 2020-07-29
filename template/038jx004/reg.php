<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="minimum-scale=0.5,maximum-scale=1.0,user-scalable=no, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <meta name="applicable-device" content="pc,mobile">
    <title>注册 - {cms_title}</title>
    <meta name="description" content="{cms_description}" />
    <meta name="keywords" content="{cms_keywords}" />
    {include file="include.php"}
</head>

<body>
{include file="header.php"}
    <div style="clear:both:"></div>
    <div class="content">
        <div class="main-content">
            <div id="list_videos_most_recent_videos">
                <div class="headline">
                    <h2><i class="layui-icon layui-icon-user" style="font-size: 24px;"></i> 用户注册</h2>
                </div>

                <div class="row">
                    <div class="col-sm-12" style="padding: 16px 0">
                        <form action="" method="post" class="layui-form  layui-form-pane">
                            <div class="layui-form-item">
                                <label class="layui-form-label" style="color: #666">验证码</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="verifycode" required  lay-verify="required" placeholder="请输入验证码" autocomplete="off" class="layui-input">

                                </div>
                                <img src="/lib/class/yzm.php" style="height: 38px;" onclick="this.src = '/lib/class/yzm.php?t='+(new Date()).getTime()">
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label" style="color: #666">邮箱</label>
                                <div class="layui-input-inline">
                                    <input type="text" name="email" required  lay-verify="required" placeholder="请输入邮箱" autocomplete="off" class="layui-input">

                                </div>
                                <button type="button" class="layui-btn layui-btn-success sendcode">发送验证码</button>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label" style="color: #666">邮箱验证码</label>
                                <div class="layui-input-block">
                                    <input type="text" name="emailcode" required  lay-verify="required" placeholder="邮箱验证码" autocomplete="off" class="layui-input">

                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label" style="color: #666">密码</label>
                                <div class="layui-input-block">
                                    <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label" style="color: #666">确认密码</label>
                                <div class="layui-input-block">
                                    <input type="password" name="repassword" required lay-verify="required" placeholder="确认密码" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                    <button class="layui-btn layui-btn-success submit2">注册</button>
                                    <a href="{:U('user','login',1,1)}" class="layui-btn layui-btn-success" style="color: #fff">去登录</a>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
{include file="footer.php"}
<script>
    window.onload = function () {
        layui.use(['jquery'],function () {
            var $ = layui.jquery;
            $('.close-plus').on('click',function () {
                $(this).toggleClass('active');
                $(this).parent().next().toggleClass('active')
            })
            $('.sendcode').on('click',function () {
                if($('.sendcode').text()=='发送验证码'){
                    if($('input[name=email]').val()!=''&&$('input[name=verifycode]').val()!=''){
                        $.ajax({
                            type:'post',
                            url:'',
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
                                    layer.msg(data.msg);
                                }
                            }
                        })
                    }else{
                        layer.msg('信息填写不完整');
                    }
                }
            })
            $('.submit2').on('click',function () {
                if($('input[name=password]').val()!=$('input[name=repassword]').val()){
                    layer.msg('两次输入密码不一致');
                    return false;
                }
                if($('input[name=password]').val().length<6){
                    layer.msg('密码至少需要六位数');
                    return false;
                }
            })
        })
    }
</script>
</body>
</html>
