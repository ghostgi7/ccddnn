<html>
<head>
    <title>
        {type_name} - 电影区 - {cms_title}</title>
    <meta name="keywords" content="{type_name},{cms_keywords}"/>
    <meta name="description" content="{type_name}在线观看,{cms_description}"/>
    {include file="include.php"}
</head>
<body style="">
{include file="header.php"}

<div class="smcms-wrap">
    <div style="width: 100%;"></div>
    <div class="group-box" style="background: rgba(236, 234, 173, 0.4);">
        <p class="group-title">{type_name}</p>
        <div class="group-contents layui-row">
            {video_list:24}
            <a href="{list_detail}" target="_blank" class="group-item layui-col-md3 m-md6">
                <img src="{list_pic}"
                     data-src="{list_pic}" h="210px">

                <span class="layui-badge layui-bg-blue score">3.0分</span>

                <p>{list_name}</p>
            </a>
            {/video_list}
            {include file="page.php"}
        </div>
    </div>
</div>
<div style="width: 100%;"></div>

{include file="footer.php"}
</body>
</html>