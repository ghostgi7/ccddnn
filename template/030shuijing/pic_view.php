<html>
<head>
    <title>{cmsobj_name}在线观看 - 图片区 - {cms_title}</title>
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
            <div class="images-wrap">
                    {cmsobj_content}
            </div>


    </div>
    </div>



    <div style="width: 100%;"></div>
    <div class="group-box" style="background: rgba(221, 173, 203, 0.4);">
        <p class="group-title"><i class="layui-icon layui-icon-engine"></i>&nbsp;&nbsp;相关推荐</p>
        <ul class="group-contents layui-row">


            {book_list:12}
            <a href="{list_view}" target="_blank" class="group-item group-item-novel layui-col-md12 m-md12">
                <p>

                    <span class="layui-badge layui-bg-blue">3.0分</span>&nbsp;

                    {list_name}
                </p>
            </a>
            {/book_list}
        </ul>
    </div>

    <div style="width: 100%;"></div>
</div>
<div style="width: 100%;"></div>

{include file="footer.php"}
</body>
</html>