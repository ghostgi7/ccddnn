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
                <h3 class="m-0"><i class="icon iconfont">&#xe67a;</i>最近更新</h3>
                <div class="more pull-right"><a href="{cms_domain1}" target="_blank" class="text-muted"
                                                title="线路一">线路一 </a><a href="{cms_domain1}" target="_blank"
                                                                       class="text-muted" title="线路二"> 线路二 </a></div>
            </div>
            <ul class="clearfix">
                {new_list:vod,12}
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
                {/new_list}
            </ul>
        </div>

        {video_hot}
        <div class="layout-box clearfix">
            <div class="box-title">
                <h3 class="m-0"><i class="icon iconfont">&#xe67a;</i>{type_name}</h3>
                <div class="more pull-right"><a href="{type_more}" target="_blank" class="text-muted"
                                                title="更多">更多 <i class="icon iconfont"></i></a></div>
            </div>
            <ul class="clearfix">
                {video_list:12}
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
        </div>
        {/video_hot}
    </div>
</div>
{include file="footer.php"}
</body>
</html>