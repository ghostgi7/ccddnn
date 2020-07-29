<html>
<head>
    <title>{type_name} - 图片区 - {cms_title}</title>
    <meta name="keywords" content="{type_name},{cms_keywords}"/>
    <meta name="description" content="{type_name}在线观看,{cms_description}"/>
    {include file="include.php"}
</head>
<body style="">
{include file="header.php"}
<style>
    .page_wrap{
        width: 100%;
        text-align: center;
        margin: 20px 0;
    }
    .page_wrap li{
        display: inline-block;
    }
    .page_wrap li a{
        padding: 5px 10px 4px 10px!important;
        display: inline-block;
        color: #ccc;
        font-size: 16px;
        line-height: 16px;
        border-radius: 2px;
    }
    .page_wrap li a i.layui-icon{
        color: #ddd;
        font-size: 16px;
        line-height: 16px;
        margin:0;
        padding:0;
    }
    .page_wrap li a.activepage{
        background-color: #1e9fff;
        color:#fff;
        cursor:not-allowed;
        margin-right: 5px;
        padding: 5px 15px 4px 15px!important;
    }
    .page_wrap li a.pageitem{
        background: rgba(99,99,99,0.2);
        margin-right: 5px;
        padding: 5px 15px 4px 15px!important;
    }
    .page_wrap .jump-btn{
        background-color: #1e9fff;
        color:#eee;
        cursor: pointer;
    }
    .page_wrap .jump-btn:hover,.page_wrap li a.pageitem:hover{
        background-color: red;
        color:#efefef;
    }
    .bluebg{
        background-color: #1e9fff;
    }
    .greybg{
        background-color: #999!important;
    }
</style>
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