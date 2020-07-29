<html>
<head>
    <title>
        {cmsobj_name}在线观看 - 电影区 - {cms_title}</title>
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}"/>
    <meta name="description" content="{cmsobj_name}在线观看,{cms_description}"/>
    {include file="include.php"}
</head>
<body style="">
{include file="header.php"}

<div class="smcms-wrap">
    <div style="width: 100%;"></div>
    <div class="group-box" style="background: rgba(236, 234, 173, 0.4);">
        <p class="group-title">{cmsobj_name}</p>
        <div class="group-contents layui-row">

            <style>
                #video{
                    width: 100%;
                    overflow: hidden;
                }
            </style>

            
            <div id="video" x5-playsinline="" x-webkit-airplay="" playsinline="" webkit-playsinline="" class="prism-player" style="width: 100%; height: 525.375px; z-index: 999;">
                {cmsobj_content}
            </div>
    </div>
        {cms_banner_b}
    </div>

    <div class="group-box" style="background: rgba(234, 220, 220, 0.4);">
        <p class="group-title" id="pf-title"><i class="layui-icon layui-icon-chart"></i>&nbsp;&nbsp;播放线路</p>
        <div class="group-contents layui-row">
            <a href="{cmsobj_view}" class="layui-btn layui-btn-success">立即播放</a><a href="{cmsobj_view}#bofang" class="layui-btn layui-btn-primary">备用播放</a>
        </div>
    </div>


    <div style="width: 100%;"></div>
    <div class="group-box" style="background: rgba(221, 173, 203, 0.4);">
        <p class="group-title"><i class="layui-icon layui-icon-engine"></i>&nbsp;&nbsp;相关推荐</p>
        <ul class="group-contents layui-row">
            {video_list:8}
            <a href="{list_detail}" target="_blank" class="group-item layui-col-md3 m-md6">
                <img src="{list_pic}"
                     data-src="{list_pic}" h="210px">

                <span class="layui-badge layui-bg-blue score">3.0分</span>

                <p>{list_name}</p>
            </a>
            {/video_list}

        </ul>
    </div>

    <div style="width: 100%;"></div>
</div>
<div style="width: 100%;"></div>

{include file="footer.php"}
</body>
</html>