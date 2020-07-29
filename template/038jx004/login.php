<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="minimum-scale=0.5,maximum-scale=1.0,user-scalable=no, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="renderer" content="webkit">
    <meta name="applicable-device" content="pc,mobile">
    <title>登录 - {cms_title}</title>
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
                    <h2><i class="layui-icon layui-icon-user" style="font-size: 24px;"></i> 用户登录</h2>
                </div>

                <div class="row">
                    <div class="col-sm-12" style="padding: 16px 0">
                        <form action="" method="post" class="layui-form  layui-form-pane">
                            <div class="layui-form-item">
                                <label class="layui-form-label" style="color: #666">邮箱</label>
                                <div class="layui-input-block">
                                    <input type="text" name="email" required  lay-verify="required" placeholder="请输入邮箱" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label" style="color: #666">密码</label>
                                <div class="layui-input-block">
                                    <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layer-zhuce">
                                    <button class="layui-btn layui-btn-success">登录</button>
                                    <a href="{:U('user','reg',1,1)}" class="layui-btn layui-btn-success" style="color: #fff">去注册</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

{include file="footer.php"}

</body>
</html>
