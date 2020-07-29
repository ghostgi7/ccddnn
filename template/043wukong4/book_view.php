<html lang="zh-CN">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="renderer" content="webkit|ie-comp|ie-stand">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
		<title>{cmsobj_name}</title>
		<meta name="keywords" content="{cmsobj_typename}" />
		<meta name="description" content="{cmsobj_name} " />
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta http-equiv="Cache-Control" content="no-transform" />
		<meta name="applicable-device" content="pc,mobile" />
         {include file="include.php"}
		<script src="{cms_template}/static/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="{cms_template}/static/js/bootstrap.min.js"></script>
	</head>
	<body>
{include file="header.php"}
<div class="top_box" id="htmltop"></div>
		<div id="sihu"></div>

		<div class="container">
<div style="position:static">
		<div class="news_details">
			<h1 class="text-overflow">{cmsobj_name}</h1>
			<div class="news_top text-center text-overflow"><span>时间：{cmsobj_time}</span><span class="hidden-xs">类型：<a href="" target="_blank">{cmsobj_typename}</a></span></div>
		</div>
		<div class="details-content text-justify">
			<br />{cmsobj_content} <br>	</div>
		<div class="clearfix"></div>
</div>
			<ul class="slider-extra clearfix">
	<li><a class="backtop" href="javascript:scroll(0,0)" style="display: block;"><i class="icon iconfont"></i></a></li>
	
</ul>
{include file="footer.php"}
	</body>
</html>