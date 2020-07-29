<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>登录 - {cms_title}</title>
    <meta name="description" content="{cms_description}" />
    <meta name="keywords" content="{cms_keywords}" />
    {include file="include.php"}
</head>
<body class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-pink mdui-theme-accent-pink">
    <!--[if lte IE 9]>
        <div class="mdui-text-center mdui-p-a-2 mdui-typo lteie9">您的浏览器版本太低了，为了能更好的体验本站，请升级您的浏览器。下载最新版本的浏览器：<a href="http://ie.microsoft.com" target="_blank">IE</a>、<a href="http://www.google.cn/chrome/" target="_blank">chrome(谷歌浏览器)</a>、<a href="http://www.firefox.com.cn/" target="_blank">Firefox(火狐浏览器)</a>，推荐使用谷歌浏览器</div>
    <![endif]-->
    <!-- 顶部工具栏开始 -->
    {include file="header.php"}

<div class="mdui-p-b-3 mdui-container main-container">
<h1 class="title title-pd">
                    <span  class="title-bg"> <i class="layui-icon layui-icon-user" style="font-size: 26px;"></i> 用户登录</span>
                </h1>

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
                                    <a href="{:U('user','reg',1,1)}" class="layui-btn layui-btn-success" style="color: #fff">去注册</a>
                            </div>

                        </form>
                    </div>
                </div>

</div>

{include file="footer.php"}

</body>
</html>
