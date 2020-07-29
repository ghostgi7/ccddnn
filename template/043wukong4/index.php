<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="renderer" content="webkit|ie-comp|ie-stand">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
		<title>{cms_title}</title>
		<meta name="keywords" content="{cms_keywords}" />
		<meta name="description" content="{cms_description}" />
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<meta http-equiv="Cache-Control" content="no-transform" />
		<meta name="applicable-device" content="pc,mobile" />
             {include file="include.php"}
		<script src="{cms_template}/static/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="{cms_template}/static/js/bootstrap.min.js"></script>
</head>
<body>
		{include file="header.php"}	
		<div class="container">
			<div class="row">
				<div class="layout-box clearfix">
					<div class="box-title">
						<h3 class="m-0"><i class="icon iconfont text-color"></i>最近更新</h3>
					</div>
					<ul class="clearfix">
						{new_list:vod,12}
							<li class="col-md-2 col-sm-3 col-xs-4 ">
							<a class="video-pic loading" style="background-image: url({list_pic});" href="{list_detail}" title="{type_name}">
							<span class="player"></span>
							<span class="note text-bg-r"></span>
							</a>
							<div class="title">
								<h5 class="text-overflow"><a href=" {list_view}" title=" {type_name}">{list_name}</a></h5>
							</div>
							<div class="subtitle text-time text-overflow">热度: {list_hit}</div>
						</li>
						{/new_list}
					</ul>	
					{video_hot}
                    <div class="box-title">
						<h3 class="m-0"><i class="icon iconfont text-color"></i>{type_name}</h3>
					</div>
					<ul class="clearfix">
						{video_list:12}
							<li class="col-md-2 col-sm-3 col-xs-4 ">
							<a class="video-pic loading" style="background-image: url({list_pic});" href="{list_detail}" title="{list_name}">
							<span class="player"></span>
							<span class="note text-bg-r"></span>
							</a>
							<div class="title">
								<h5 class="text-overflow"><a href="{list_view}" title="{list_name}">{list_name}</a></h5>
							</div>
							<div class="subtitle text-time text-overflow">热度: {list_hit}</div>
						</li>
						{/video_list}
					</ul>	
                   {/video_hot}					
					<div class="box-title">
						<h3 class="m-0"><i class="icon iconfont text-color"></i>直播推荐</h3>
					</div>
					<ul class="clearfix">
						{live_hot_list:8}
							<li class="col-md-2 col-sm-3 col-xs-4 ">
							<a class="video-pic loading" style="background-image: url(https:{list_pic});" href="{list_view}" title="{list_name}">
							<span class="player"></span>
							<span class="note text-bg-r"></span>
							</a>
							<div class="title">
								<h5 class="text-overflow"><a href="{list_view}" title="{list_name}">{list_name}</a></h5>
							</div>
							<div class="subtitle text-time text-overflow">热度: {list_hit}</div>
						</li>
						{/live_hot_list}
					</ul>					
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="layout-box clearfix">
					<div class="box-title">
						<h3 class="m-0"><i class="icon iconfont text-color"></i>友情链接</h3>
					</div>
					<ul class="clearfix">
						{cms_link}
					</ul>

				</div>
			</div>
		</div>	
			<ul class="slider-extra clearfix">
	<li><a class="backtop" href="javascript:scroll(0,0)" style="display: block;"><i class="icon iconfont"></i></a></li>
	
</ul>
		{include file="footer.php"} 			
 </body>
</html>

