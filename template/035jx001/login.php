<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>登录 - {cms_title}</title>
    <meta name="description" content="{cms_description}" />
    <meta name="keywords" content="{cms_keywords}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {include file="include.php"}
</head>
<body>
    <div class="container">
        <div class="row">
            {include file="header.php"}
            
            <div class="stui-pannel clearfix">

                <div class="qr-block qr-block-title">
                    <span  class="title-bg"> <i class="layui-icon layui-icon-user"></i> 用户登录</span>
                </div>

                <div class="row">
                    <div class="col-sm-12" style="padding: 16px 0">
                        <form action="" method="post" class="layui-form  layui-form-pane">
                            <div class="layui-form-item">
                                <label class="layui-form-label">邮箱</label>
                                <div class="layui-input-block">
                                    <input type="text" name="email" required  lay-verify="required" placeholder="请输入邮箱" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item">
                                <label class="layui-form-label">密码</label>
                                <div class="layui-input-block">
                                    <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-form-item layer-zhuce">
                                    <button class="layui-btn layui-btn-success">登录</button>
                                    <a href="{:U('user','reg',1,1)}" class="layui-btn layui-btn-success">去注册</a>
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

