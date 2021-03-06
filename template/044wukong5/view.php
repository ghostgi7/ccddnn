<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" />
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<title>{cmsobj_typename}-{cmsobj_name}-{cms_title}</title>
	<link rel="stylesheet" href="{cms_template}/static/css/style.css" />
	<link rel="stylesheet" href="https://g.alicdn.com/de/prismplayer/2.8.8/skins/default/aliplayer-min.css" />
	<script type="text/javascript" charset="utf-8" src="https://g.alicdn.com/de/prismplayer/2.8.8/aliplayer-min.js"></script>
</head>
<body>
{include file="header.php"} 
<div class="prism-player" id="player-con"></div>
<script>
var player = new Aliplayer({
  "id": "player-con",
  "source": "{cmsobj_url}",
  "width": "100%",
  "height": "420px",
  "autoplay": true,
  "isLive": false,
  "rePlay": true,
  "playsinline": true,
  "preload": true,
  "controlBarVisibility": "hover",
  "useH5Prism": true
}, function (player) {
    console.log("The player is created");
  }
);
</script>
		<div class="mod">
			<div class="area">
				<div class="mod-title"><h3><a href="{type_more}">猜你喜欢</a></h3></div>
				<div class="mod-row col5 clearfix">
				{video_list:10}
				<dl>
					<dt><a href="{list_detail}" title="{list_name}" target="_blank"><img src="{cms_template}/static/picture/empty.jpg"><img class="nature" src="{list_pic}" data-original="{list_pic}" alt="{list_name}" /><i>{list_time}</i></a></dt>
					<dd><a href="{list_detail}" target="_blank"><h2>{list_name}</h2></a></dd>
				</dl>
				{/video_list}
				</div>
			</div>
		</div>
	</div>
</div>
<div id="btmBox"></div>
{include file="footer.php"}
</body>
</html>