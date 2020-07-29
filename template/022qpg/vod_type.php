<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="renderer" content="webkit">
<title>最新{type_name}-推荐{type_name}-第{cms_page:current}页 - {cms_title}</title>
<meta name="keywords" content="{type_name}, {cms_title}" />
<meta name="description" content="更多{type_name}视频在线观看, {cms_title}" />
{include file="include.php"}
</head>
<body>
<div class="container">
{include file="header.php"}
<div class="title">
<li>当前位置</li>
<li><a href="/">首页</a></li>
<li><a href="">{type_name}</a></li>
<span class="r">最新排行</span>
</div>
<div class="pic"><ul>{video_list:24}
<li><a href="{list_detail}" title="{list_name}" target="_blank"><img src="{list_pic}"><br /><span>{list_time}.</span> {list_name}</a></li>
{/video_list}</ul>
</div>
<div class="text-center">{include file="page.php"}</div>
{include file="footer.php"}
</div>
</body>
</html>