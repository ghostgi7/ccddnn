<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>{cmsobj_name} - {cms_title}</title>
    <meta name="description" content="{cmsobj_name},{cms_description}" />
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}" />
    {include file="include.php"}
</head>

<body class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-pink mdui-theme-accent-pink">
    <!--[if lte IE 9]>
        <div class="mdui-text-center mdui-p-a-2 mdui-typo lteie9">您的浏览器版本太低了，为了能更好的体验本站，请升级您的浏览器。下载最新版本的浏览器：<a href="http://ie.microsoft.com" target="_blank">IE</a>、<a href="http://www.google.cn/chrome/" target="_blank">chrome(谷歌浏览器)</a>、<a href="http://www.firefox.com.cn/" target="_blank">Firefox(火狐浏览器)</a>，推荐使用谷歌浏览器</div>
    <![endif]-->
    <!-- 顶部工具栏开始 -->
{include file="header.php"}

<div class="mdui-p-b-3 mdui-p-t-3 mdui-container main-container">
    <div class="show-videos-container">
        <div class="mdui-row flex-grid playerbox" style="height: 600px;">
            <div class="mdui-m-a-0 mdui-p-a-0 mdui-col-xs-12 mdui-col-md-9 playerarea-left">
                {cmsobj_content}
            </div>
        </div>
    </div>
</div>
<!-- 视频详情介绍开始 -->
<div class="mdui-container main-container video-details">
    <div class="banner-ad">
        {cms_banner_b} 
    </div>
    <h3 class="mdui-p-a-0">{cmsobj_name}</h3>
    <div class="mdui-clearfix mdui-text-color-grey">
        <div class="mdui-float-right">
            <button class="mdui-btn mdui-ripple btn-tread-digg">分类:{cmsobj_typename}</button>
            <button class="mdui-btn mdui-ripple btn-tread-digg">更新时间:{cmsobj_time}</button>
        </div>
        <div class="mdui-float-left midu-hit">
        <i class="mdui-icon ion-ios-videocam-outline"></i> 
        <span id="hit"><?php  echo rand(5, 10000); ?></span>
        </div>
    </div>

    <div class="mdui-typo"><hr></div>

        <h3 class="column-title">猜你喜欢</h3>
        <!-- 视频列表开始 -->
        <div class="mdui-row-xs-1 mdui-row-sm-2 mdui-row-md-4 mdui-grid-list mdui-typo list-videos">
            <div class="flex-grid">
                {video_list:8}
                <div class="mdui-col">
                    <a href="{list_detail}" target="_blank">
                        <div class="mdui-grid-tile">
                            <img src="{list_pic}" style="height: 200px;"/>
                        </div>
                        <div class="mdui-m-y-1 clamp2 list-grid-title">
                            {list_name}
                        </div>
                    </a>
                </div>
                {/video_list}
            </div>
        </div>
        <!-- 视频列表结束 -->
</div>

{include file="footer.php"}


 </body>
</html>
