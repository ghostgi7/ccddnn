<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="renderer" content="webkit">
<title>{cmsobj_name}详情介绍-{cmsobj_name}在线观看-{cmsobj_name}迅雷下载 - {cms_title}</title>
<meta name="keywords" content="{cmsobj_name}在线收看,{cmsobj_name}迅雷下载" />
<meta name="description" content="{cmsobj_name},{cms_title}" />
 {include file="include.php"}
</head>
<body>
<div class="container">
{include file="header.php"}
<div class="title">
<li>当前位置</li>
<li><a href="/">首页</a></li>
<li><a href="">{cmsobj_typename}</a></li>
</div>
<div class="media"><ul>
<li><a href="{cmsobj_view}" target="_blank"><img src="{cmsobj_pic}"></a></li>
<li class="media-info">
<dt>片名：{cmsobj_name}</dt>
<dt>类型：{cmsobj_typename} </dt>
    <dt class="playurl2"><a href="{cmsobj_view}" target="_blank">在线播放</a><dt>
</li></ul>
</div>
<div class="clearfix"></div>
<div class="title">热播{cmsobj_typename}<span class="r"><a href="{cmsobj_typemore}">更多>></a></span></div>
<div class="pic"><ul>{video_list:12}
<li><a href="{list_detail}"><img src="{list_pic}" title="{list_name}" target="_blank"><br />{list_name}</a></li>
{/video_list}</ul>
</div>
{include file="footer.php"}
</div>
</body>
</html>