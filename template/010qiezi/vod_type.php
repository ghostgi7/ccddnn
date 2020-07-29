<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>{type_name} - {cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" />
<link href="{cms_template}/images/bootstrap.css" rel="stylesheet">
<link href="{cms_template}/images/nky.css" rel="stylesheet">
<link href="{cms_template}/images/font-awesome.min.css" rel="stylesheet">
<link href="{cms_template}/images/simple-line-icons.min.css" rel="stylesheet" type="text/css">
<link href="{cms_template}/images/default.css" rel="stylesheet">
<link href="{cms_template}/images/layout.css" rel="stylesheet" type="text/css">
<link href="{cms_template}/images/custom.css" rel="stylesheet" type="text/css">
<script src="{cms_template}/js/jquery.js"></script>
<script src="{cms_template}/js/jq/jquery.lazyload.js"></script>
<script src="{cms_template}/js/jq/jquery.autocomplete.js"></script>
<script src="{cms_template}/js/home.js"></script>
<script src="{cms_template}/js/tpl.js"></script>
</head>
<body class="ad-box">
{include file="header.php"}
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">视频分类：{type_name}
                    <small>movie</small></h1>
		</div>
	</div>
	<hr>
	<div class="row">
        {video_list:16}
		<div class="col-md-3 portfolio-item new-video">
			<div class="new-video-icon">
			</div>
			<a href=" {list_view}" target="_blank"><img class="img-responsive" src="{list_pic}" width="280" height="160"/></a>
			<div class="v-title">
				<div class="uptime">
					{list_name}
				</div>
				  上架时间：{list_time}<br>
				<a href=" {list_view}"target="_blank">{list_name}</a>
			</div>
		</div>
     {/video_list}
	</div>	

<div class="row text-center">
	<div class="col-lg-12">
		<div class="news-feed-btn">
			<ul>
                <a href="{cms_page:first}">首页</a>
                <a href="{cms_page:prev}">上一页</a>
                <a href="javascript:;">共 {cms_page:count}页</a>
                <a href="javascript:;">当前 {cms_page:current}页</a>
                <a href="{cms_page:next}">下一页</a>
                <a href="{cms_page:last}">尾页</a>
			</ul>
		</div>
	</div>
</div>


 
{include file="footer.php"}
</body>
</html>		
