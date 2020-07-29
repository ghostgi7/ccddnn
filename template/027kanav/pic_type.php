<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>{type_name} - {cms_title}</title>
    <meta name="keywords" content="{type_name},{cms_keywords}">
    <meta name="description" content="{type_name},{cms_description}">
    {include file="include.php"}
</head>
<body>

{include file="header.php"}
<div class="container">
    <div class="row">
        <div class="layout-box clearfix">
            <div class="box-title">
                <h3 class="m-0"><i class="icon iconfont">&#xe67a;</i> {type_name}</h3>
            </div>
            <ul class="box-topic-list p-0 clearfix">
                {pic_list:24}
                <li class="col-md-14 col-sm-16 col-xs-12 clearfix news-box"><a  href="{list_view}" title="{list_name}" target="_blank"> <span
                                class="xslist text-bg-c">{list_name}</span>
                        <small>{list_time}</small> </a>
                </li>
                {/pic_list}
            </ul>
            {include file="page.php"}
        </div>

    </div>
</div>
{include file="footer.php"}
</body>
</html>