<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>{type_name}搜索结果 - {cms_title}</title>
<meta name="keywords" content="{type_name}搜索结果" />
<meta name="description" content="{type_name}搜索结果" />
{include file="include.php"}
</head>
<body>
<div class="container">
{include file="header.php"}
<div class="title">
<li>当前位置</li>
<li><a href="/">首页</a></li>
<li>搜索" {type_name}" 结果 </li>
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