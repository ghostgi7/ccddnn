<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="renderer" content="webkit">
<title>{cms_title}-指针资源-福利视频-福利导航-福利电影</title>
<meta name="keywords" content="{cms_keywords}" />
<meta name="description" content="{cms_description}" />
{include file="include.php"}
</head>
<body>
<div class="container">
{include file="header.php"}
<div class="title">
<li>当前位置</li>
<li><a href="/">首页</a></li>
<li>热门直播</li>
<span class="r"><a href="{type_more}">更多>></a></span>
</div>
<div class="pic"><ul>
        {live_hot_list:12}
<li><a href="{list_view}" title="{list_name}" target="_blank"><img src="{list_pic}"><br /><span>{list_time}.</span> {list_name}</a></li>
{/live_hot_list}</ul>
</div>

{video_hot}
    <div class="title">{type_name}<span class="r"><a href="{type_more}">更多>></a></span></div>
    <div class="pic2">
        <ul>
            {video_list:24}
            <li><a href="{list_detail}" title="{list_name}" target="_blank">{list_name}</a></li>
            {/video_list}
        </ul>
    </div>
{/video_hot}
<div class="clearfix"></div>
<div class="links"><h1>友情链接</h1></div>
<ul class="link">
    {cms_link}
</ul>
{include file="footer.php"}
</div>
</body>
</html>