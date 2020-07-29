<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>{type_name} - {cms_title}</title>
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
        <h3 class="column-title">套图-{type_name}</h3>
        <div class="mdui-typo"><hr></div>
        <!-- 视频列表开始 -->
        <div class="mdui-row-xs-1 mdui-row-sm-2 mdui-row-md-4 mdui-grid-list mdui-typo list-videos">
            <div class="flex-grid">
                {pic_list:24}
                <div class="mdui-col">
                    <a href="{list_view}" target="_blank">
                        <div class="mdui-grid-tile">
                            <img src="{list_pic}" style="height: 200px;"/>
                        </div>
                        <div class="mdui-m-y-1 clamp2 list-grid-title">
                            {list_name}
                        </div>
                    </a>
                </div>
                {/pic_list}
            </div>
        </div>
        <!-- 视频列表结束 -->
        <div class="mdui-clearfix pages">
            <div id="wr-page">{include file="page.php"}</div>
        </div>
</div>
<!-- footer开始 -->

{include file="footer.php"}


 </body>
</html>