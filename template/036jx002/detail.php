<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{cmsobj_name} - {cms_title}</title>
    <meta name="description" content="{cmsobj_name},{cms_description}" />
    <meta name="keywords" content="{cmsobj_name},{cms_keywords}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta name="applicable-device" content="pc,mobile">
    {include file="include.php"}

</head>
<body>
{include file="header.php"}
<div class="main">
            <h1 class="title">
                <li class="home">
                    <a href="{$maccms.path}">首页</a> »
                    <a href="JavaScript:">{cmsobj_typename}</a> »
                    <a href="JavaScript:">{cmsobj_name}</a>
                </li>
            </h1>
            <div class="ct mb clearfix">
                <div class="ct-l"><img class="lazy" src="{cmsobj_pic}" alt="{cmsobj_name}"></div>
                <div class="ct-c">
                    <dl>
                        <dt class="name">{cmsobj_name}</dt>
                        <dt><span>分类：</span>{cmsobj_typename}</dt>
                        <dt><span>观看次数：</span><?php  echo rand(5, 10000); ?></dt>
                        <dt><span>点赞次数：</span><?php  echo rand(5, 10000); ?></dt>
                        <dt><span>更新：</span>{cmsobj_time}</dt>
                    </dl>
                    <a href="{cmsobj_view}" class="playbtn">立即播放</a>
                    <a href="{cmsobj_view}#bofang" class="playbtn">备用线路</a>
                </div>
            </div>
            <div class="DCAd">
                {cms_banner_b}
            </div>
            <div class="tab-title tab mb clearfix"><ul><li class="on">猜你喜欢</li></ul></div>
            <div class="tab-down mb clearfix">
                <div class="index-tj-l clearfix ">
                    <ul>
                        {video_list:10}
                        <li class="p2 m1">
                            <a class="link-hover" href="{list_detail}" title="{list_name}" target="_blank">
                                <img src="{list_pic}" alt="{list_name}">
                                <span class="video-bg"></span>
                                <span class="lzbz">
                                    <p class="name">{list_name}</p>
                                    <p class="actor">观看次数：{list_hit}</p>
                                    <p class="actor">更新时间：{list_time}</p>
                                </span>
                            </a>
                        </li>
                        {/video_list}
                    </ul>
                </div>
            </div>
        </div>

{include file="footer.php"}

</body>
</html>