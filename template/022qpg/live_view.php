<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="renderer" content="webkit">
<title>在线播放{cmsobj_name}  - 高清观看{cmsobj_name} - {cms_title}</title>
<meta name="keywords" content="{cmsobj_name}免费在线观看,{cmsobj_name}在线播放,{cmsobj_name}剧情介绍" />
<meta name="description" content="{cmsobj_name}免费在线观看,{cmsobj_name}剧情介绍" />
{include file="include.php"}
</head>
<body>
<div class="container">
{include file="header.php"}
<div class="play-t"><span class="l"><a href="javascript:;" >
影片报错</a></span>提示: 手机端让播放器加载一下再点播<span class="r"><a href="{cmsobj_view}">在线播放-{cmsobj_name}</a></span></div>
<div id="bofang_box">{cmsobj_content}</div>
    <div class="title">{cms_banner_b}</div>
<div class="title"><li>正在播放: {cmsobj_name}</li></div>
<div class="title">热播{cmsobj_typename}<span class="r"><a href="{cmsobj_typemore}">更多>></a></span></div>
<div class="pic"><ul>{live_list:12}
<li><a href="{list_view}" title="{list_name}"><img src="{list_pic}"><br />{list_name}</a></li>
{/live_list}</ul>
</div>
{include file="footer.php"}
</div>
</body>
</html>