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

<div class="mdui-p-b-3 mdui-container main-container">
    <div class="video-head uk-clearfix uk-margin-bottom">
        <!-- 面包屑 -->
        <div class="bred uk-float-left">
            <p>
                <i class="icon iconfont ion-home"></i>
                <span>您当前位置：</span>
                <i class="icon iconfont ion-android-arrow-dropright"></i>
                <a href="JavaScript:;" class="">{cmsobj_typename}</a>
                <i class="icon iconfont ion-android-arrow-dropright"></i>
                <span class="right">{cmsobj_name}</span>
            </p>
        </div>
    </div>

    <div class="video-content">
        <div class="read">
            <div class="read-img">
                <img src="{cmsobj_pic}" alt="{cmsobj_name}">
            </div>
            <!-- 标题 -->
            <h3 class="uk-text-left uk-margin-bottom">{cmsobj_name}</h3>
            <!-- 影片信息 -->
            <div class="read-text uk-margin-top-remove uk-clearfix">
                <!-- 播放按钮 -->
                <div class="read-btn uk-float-left">
                    <a href="{cmsobj_view}" class="uk-float-left uk-button h-line ">在线播放</a>
                </div>
                <div class="read-btn uk-float-left">
                    <a href="{cmsobj_view}#bofang" class="uk-float-left uk-button h-line ">备用线路</a>
                </div>
                <p class="uk-float-left uk-margin-large-right">
                    <i class="icon iconfont ion-home"></i>影片分类:<span>{cmsobj_typename}</span>
                </p>
                <p class="uk-float-left uk-margin-large-right"> 
                    <i class="icon iconfont ion-android-time"></i>更新时间:<span>{cmsobj_time}
                </span>
                </p>
            </div>
        </div>
    </div>
    <div class="banner-ad">
        {cms_banner_b}
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
<!-- footer开始 -->

{include file="footer.php"}


 </body>
</html>