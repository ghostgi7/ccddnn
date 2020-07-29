<html>
<head>
    <title>{type_name} - 小说区 - {cms_title}</title>
    <meta name="keywords" content="{type_name},{cms_keywords}"/>
    <meta name="description" content="{type_name}在线观看,{cms_description}"/>
    {include file="include.php"}
</head>
<body style="">
{include file="header.php"}

<div class="smcms-wrap">
    <div style="width: 100%;"></div>
    <div class="group-box" style="background: rgba(204, 234, 237, 0.4);">
        <div class="group-title">
            {type_name}

        </div>
        <div class="group-contents layui-row">

            {book_list:24}
            <a href="{list_view}" target="_blank" class="group-item group-item-novel layui-col-md12 m-md12">
                <p>

                    <span class="layui-badge layui-bg-blue">3.0分</span>&nbsp;

                    {list_name}
                </p>
            </a>
            {/book_list}



            {include file="page.php"}
        </div>
    </div>
    <div style="width: 100%;"></div>
</div>
<div style="width: 100%;"></div>

{include file="footer.php"}
</body>
</html>