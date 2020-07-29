<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" />
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
	<title>{cmsobj_name}-{cmsobj_typename}-{cms_title}</title>
	<link rel="stylesheet" href="{cms_template}/static/css/style.css" />
</head>
<body>

{include file="header.php"}
<div id="midBox"></div>
<div class="mod">
	<div class="area">
		<h1 class="h1-title">{cmsobj_name}</h1>
		<div class="main-content">

    	<p>
       {cmsobj_content}
			</p>
		
		</div>
	</div>
</div>
<div id="btmBox"></div>
{include file="footer.php"} 
<div style="display:none;"><script type="text/javascript" src="/js/tongji.js"></script></div>
<div style="display:none;"><script type="text/javascript" src="/js/tongji2.js"></script></div>
</body>
</html>