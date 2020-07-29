<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0,user-scalable=no" /> 
  <meta name="renderer" content="webkit" /> 
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" /> 
    <meta charset="utf-8" />
	<title>正在播放 {cmsobj_name}</title>
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
<div class="container">


	<div class="row">
			<!-- begin col-lg-8-->
			<div class="col-lg-12">
				<div class="row">
					<!-- Page Content UP AD-->

						<div class="col-md-12 center">

							<div class="col-lg-12">
								<h1 class="page-header">{cmsobj_name}</h1>
							</div>
						</div>
						
						<div class="col-md-12 center"id="cms_player" style="height:400px">
												{cmsobj_content}
						</div>

		<div class="ad">
		{cms_banner_b}
	</div>

				</div>
			</div>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">视频推荐
                    <small>movie</small></h1>
		</div>
	</div>
	<hr>
	<div class="row">
				{video_list:8}

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
	
	
	


{include file="footer.php"}
</body>
</html>
