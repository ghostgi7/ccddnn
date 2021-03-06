<html>
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="renderer" content="webkit|ie-comp|ie-stand">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
		<title>{type_name}-{cms_title} </title>
		<meta name="keywords" content="{cms_keywords},{cms_title} " />
		<meta name="description" content="{cms_description},{cms_title} " />
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
			<div class="box-min-mcid clearfix">
				<div class="item clearfix">
					<dl class="clearfix">
						<!--<dt class="text-muted">频道</dt>-->
						<dd class="clearfix">
						<a href="#">视频专区</a>&nbsp;
						 {video_menu}<a  href="{menu_link}">{menu_name}&nbsp;</a>{/video_menu}
					</dl>
				</div>
			</div>
						<div class="box-min-mcid clearfix">
				<div class="item clearfix">
					<dl class="clearfix">
						<!--<dt class="text-muted">频道</dt>-->
						<dd class="clearfix">
						<a href="#">高清专区</a>&nbsp;
						 {hd_menu}<a  href="{menu_link}">{menu_name}&nbsp;</a>{/hd_menu}
					</dl>
				</div>
			</div>	
		</div>		
			
			
				<div class="layout-box clearfix">
					<div class="box-title">
						<h3 class="m-0"><i class="icon iconfont text-color"></i>当前位置:{type_name}</h3>
					</div>
					<ul class="clearfix">
						{video_list:12}
							<li class="col-md-2 col-sm-3 col-xs-4 ">
							<a class="video-pic loading" style="background-image: url({list_pic});" href="{list_detail}" title="{list_name}">
							<span class="player"></span>
							<span class="note text-bg-r"></span>
							</a>
							<div class="title">
								<h5 class="text-overflow"><a href="{list_detail}" title="{list_name}">{list_name}</a></h5>
							</div>
							<div class="subtitle text-time text-overflow">人气:{list_hit}</div>
						</li>
						{/video_list}
					</ul>					
				</div>
			</div>
		</div>
<div class="box-page clearfix" id="long-page">
	<ul>
		<li><a href="{cms_page:first}" class="disabled">首页</a></li>
		<li><a href="{cms_page:prev}" class="disabled">上一页</a></li>
		<li><a href="#" class="disabled">{cms_page:current}/{cms_page:count}</a></li>
		<li><a href="{cms_page:next}" class="disabled">下一页</a></li>
		<li><a href="{cms_page:last}" class="disabled">尾页</a></li></ul>
</div>	
{include file="footer.php"}	
 </body>
</html>