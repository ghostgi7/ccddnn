<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" />
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<title>{cms_title}</title>
	<link rel="stylesheet" href="{cms_template}/static/css/style.css" />
</head>
<body>

{include file="header.php"} 
<div id="midBox"></div>
<div class="mod">
	<div class="area">
		<div class="mod-title"><h3><a href="#">最新视频</a></h3></div>
		<div class="mod-row col5 clearfix">
		{new_list:vod,20}		
		<dl>
			<dt><a href="{list_detail}" title="{list_name}" target="_blank"><img src="{cms_template}/static/picture/empty.jpg"><img class="nature" src="{list_pic}" data-original="{list_pic}" alt="{list_name}" /><i>{list_time}</i></a></dt>
			<dd><a href="{list_detail}" target="_blank"><h2>{list_name}</h2></a></dd>
		</dl>
		{/new_list}
		</div>
	</div>
</div>
{video_hot}
<div class="mod">
	<div class="area">
		<div class="mod-title"><h3><a href="{type_more}">{type_name}</a></h3></div>
		<div class="mod-row col5 clearfix">
		{video_list:20}		
		<dl>
			<dt><a href="{list_detail}" title="{list_name}" target="_blank"><img src="{cms_template}/static/picture/empty.jpg"><img class="nature" src="{list_pic}" data-original="{list_pic}" alt="{list_name}" /><i>{list_time}</i></a></dt>
			<dd><a href="{list_detail}" target="_blank"><h2>{list_name}</h2></a></dd>
		</dl>
		{/video_list}
		</div>
	</div>
</div>
{/video_hot}
<div class="mod">
	<div class="area">
		<div class="mod-title"><h3><a href="{type_more}">直播推荐</a></h3></div>
		<div class="mod-row col5 clearfix">
		{live_hot_list:20}	
		<dl>
			<dt><a href="{list_view}" title="{list_name}" target="_blank"><img src="{cms_template}/static/picture/empty.jpg"><img class="nature" src="{list_pic}" data-original="{list_pic}" alt="{list_name}" /><i>{list_time}</i></a></dt>
			<dd><a href="{list_view}" target="_blank"><h2>{list_name}</h2></a></dd>
		</dl>
		{/live_hot_list}
		</div>
	</div>
</div>
<div class="mod">
	<div class="area">
		<div class="mod-title"><h3><a href="{type_more}">友情链接</a></h3></div>
		<div class="mod-row col5 clearfix">	
           {cms_link}
		</div>
	</div>
{include file="footer.php"} 
	</div>
</div>

<div id="btmBox">
</div>
</body>
</html>