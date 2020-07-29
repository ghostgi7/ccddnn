<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{cmsobj_typename} -{cms_title}</title>
<meta name="keywords" content="{cms_keywords}">
<meta name="description" content="{cms_description}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="renderer" content="webkit">
<meta http-equiv="Cache-Control" content="no-siteapp">
<meta http-equiv="Cache-Control" content="no-transform">
<meta name="applicable-device" content="mobile">
		 <!-- // 引入css和js-->
		 {include file="include.php"} 
		 <link rel="stylesheet" href="{cms_template}/static/css/beijing.css">
		 <!-- 结束 -->

<script>var sitePath=''</script>
<script type="text/javascript" src="{cms_template}/static/js/jquery.min.js"></script>
<!--<script type="text/javascript" src="static/js/LazyLoad.js"></script>-->
<script type="text/javascript" src="{cms_template}/static/js/jquery-lazyload.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/base.js"></script>
<script type='text/javascript' src="{cms_template}/static/js/swiper.min.js"></script>
<!--<script type="text/javascript" src="static/js/system.js"></script>-->
<script type="text/javascript" src="{cms_template}/static/js/common.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/function.js"></script>
<script language='javascript' type='text/javascript' src='{cms_template}/static/js/ipquery.js'></script>
<script language='javascript' type='text/javascript'>var city = localAddress.province+localAddress.city;</script>
<!--[if lt IE 9]>
<script src="static/js/html5shiv.min.js"></script>
<script src="static/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<!-- // 引入头部-->
{include file="header.php"} 

<body class="vod-play">
<!-- // header start-->

<!-- // header end-->
<!-- content -->
<div class="content"> 

	                当前位置：<a href='/' >首页</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;<a href='{cmsobj_typemore}' >小说专区</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;<a href='{cmsobj_typemore}'>{cmsobj_typename}</a>
        <div class="container">
{cmsobj_content}
</div>

		 <!-- // 引入尾部-->
		 {include file="footer.php"} 
		 <!-- 结束 -->

</div>
