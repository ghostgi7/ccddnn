<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" />
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<title>{type_name}-{cms_title}</title>
	<link rel="stylesheet" href="{cms_template}/static/css/style.css" />
</head>
<body>

{include file="header.php"} 
<div>	{cms_banner_b}</div>
<div id="midBox"></div>
<div class="mod">
	<div class="area">
		<div class="mod-title"><h3><a href=/p01 target="_blank">{type_name}</a></h3></div>
		<div id="colList" class="mod-col clearfix">
			<ul>

			{book_list:50}<li><a href="{list_view}" target="_blank"><em></em><span> {list_time}</span><h2>{list_name}</h2></a></li>{/book_list}
			</ul>
		</div>
	</div>
</div>
<div id="btmBox"></div>
<div class="area">
	<div class="pagination"> <a href="{cms_page:first}">首页</a> <a href="{cms_page:prev}">上一页</a><strong>{cms_page:current}/{cms_page:count}</strong><a href='{cms_page:next}'>下一页</a> <a href='{cms_page:last}'>尾页</a></div>
</div>
{include file="footer.php"}
<div style="display:none;"><script type="text/javascript" src="/js/tongji.js"></script></div>
<div style="display:none;"><script type="text/javascript" src="/js/tongji2.js"></script></div>
</body>
</html>