<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>{cms_title}</title>
    <meta name="keywords" content="{cms_keywords}">
    <meta name="description" content="{cms_description}">
    {include file="include.php"}
</head>
<body>

{include file="header.php"}
<div class="container">
    <div class="row">
        <div class="layout-box clearfix">
            <div class="box-title">
                <h3 class="m-0"><i class="icon iconfont">&#xe67a;</i> 搜索“{type_name}”结果</h3>
            </div>
            <ul class="clearfix">
                {video_list:24}
                <li class="col-md-2 col-sm-3 col-xs-4 "><a class="video-pic loading" data-original="{list_pic}"
                                                           href="{list_view}" title="{list_name}" target="_blank"> <span
                                class="player"></span>
                        <span class="note text-bg-r"></span> </a>
                    <div class="title">
                        <h5 class="text-overflow"><a href="{list_view}" title="{list_name}"
                                                     target="_blank">{list_name}</a></h5>
                    </div>
                    <div class="subtitle text-time text-overflow">{list_time}</div>
                </li>
                {/video_list}
            </ul>
            {include file="page.php"}
        </div>

    </div>
</div>
{include file="footer.php"}
</body>
</html>