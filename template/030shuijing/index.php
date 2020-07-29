<html>
<head>
    <title>{cms_title}</title>
    <meta name="keywords" content="{cms_keywords}">
    <meta name="description" content="{cms_description}">
    {include file="include.php"}
</head>
<body style="">
{include file="header.php"}
<div class="smcms-wrap">
    <div style="width: 100%;"></div>
    <div class="group-box layui-row" style="background: rgba(170, 171, 238, 0.4);">
        <div class="layui-col-md6 m-md12">
            <div class="layui-carousel" id="slide" lay-anim="" lay-indicator="inside" lay-arrow="always"
                 style="width: 100%; height: 303px;">
                <div carousel-item="">
                    {new_list:pic,5}
                    <div><a href="{list_view}" target="_blank"><img src="{list_pic}"></a></div>
                    {/new_list}
                </div>
            </div>
        </div>
        <div class="layui-col-md6 m-md12" id="top-novel">
            <ul class="group-contents layui-row">

                {new_list:book,7}
                    <a href="{list_view}" target="_blank"
                       class="group-item group-item-novel layui-col-md12 m-md12">
                        <p> <span class="layui-badge layui-bg-blue">{list_time}</span> {list_name}</p>
                    </a>
                {/new_list}

            </ul>
        </div>
    </div>
    <div class="group-box" style="background: rgba(186, 172, 202, 0.4);">
        <p class="group-title"><i class="layui-icon layui-icon-website"></i>&nbsp;&nbsp;最新视频
        </p>
        <ul class="group-contents layui-row">
            {new_list:vod,8}
            <a href="{list_detail}" target="_blank" class="group-item layui-col-md3 m-md6">
                <img src="{list_pic}"
                     data-src="{list_pic}" h="210px">

                <span class="layui-badge layui-bg-blue score">3.0分</span>

                <p>{list_name}</p>
            </a>
            {/new_list}

        </ul>
    </div>
    <div class="group-box" style="background: rgba(190, 219, 205, 0.4);">
        <p class="group-title"><i class="layui-icon layui-icon-praise"></i>&nbsp;&nbsp;高评分
        </p>
        <ul class="group-contents layui-row">
            {rand_list:vod,8}
            <a href="{list_detail}" target="_blank" class="group-item layui-col-md3 m-md6">
                <img src="{list_pic}"
                     data-src="{list_pic}" h="210px">

                <span class="layui-badge layui-bg-blue score">4.8分</span>

                <p>{list_name}</p>
            </a>
            {/rand_list}


        </ul>
    </div>
    {video_hot}
    <div class="group-box" style="background: rgba(236, 234, 202, 0.4);">
        <p class="group-title"><i class="layui-icon layui-icon-fire"></i>&nbsp;&nbsp;{type_name}<a href="{type_more}">更多>></a></p>
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
    {/video_hot}
    <div class="group-box" style="background: rgba(222, 236, 219, 0.4);">
        <p class="group-title"><i class="layui-icon layui-icon-link"></i>&nbsp;&nbsp;友情链接</p>
        <div class="group-contents layui-row">

            {cms_link}

        </div>
    </div>
    <div style="width: 100%;"></div>
</div>
<div style="width: 100%;"></div>
{include file="footer.php"}

</body>
</html>