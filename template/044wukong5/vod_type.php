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
<div id="midBox"></div>
<div class="mod">
	<div class="area">
		<div class="mod-title"><h3><a href=/m01 target="_blank">{type_name}</a></h3></div>
		<div id="modVideo" class="mod-row col5 clearfix">
        {video_list:50}
		<dl>
			<dt><a href="{list_detail}" title="{list_name}" target="_blank"><img src="{cms_template}/static/picture/empty.jpg"><img class="nature" src="{list_pic}" data-original="{list_pic}" alt="{list_name}" /><i>{list_time}</i></a></dt>
			<dd><a href="{list_detail}" target="_blank"><h2>{list_name}</h2></a></dd>
		</dl>
		{/video_list}
		</div>
	</div>
</div>
<div id="btmBox"></div>
<div class="area">
	<div class="pagination"> <a href="{cms_page:first}">首页</a> <a href="{cms_page:prev}">上一页</a><strong>{cms_page:current}/{cms_page:count}</strong><a href='{cms_page:next}'>下一页</a> <a href='{cms_page:last}'>尾页</a></div>
</div>
{include file="footer.php"}
<div style="display:none;"><script type="text/javascript" src="/js/tongji.js"></script></div>
<div style="display:none;"><script type="text/javascript" src="/js/tongji1.js"></script></div>
</body>
</html>