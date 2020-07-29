<html>
<head>
    <title>{cmsobj_name}免费在线观看 - {cms_title} </title>
<meta name="keywords" content="{cms_keywords}" />
<meta name="description" content="{cms_description}" />   
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="baidu-site-verification" content="{cms_title}" />
{include file="include.php"} 
<script type="text/javascript" src="{cms_template}/javascript/jquery.min.js"></script>
<script type="text/javascript" src="{cms_template}/javascript/stui_default.js"></script>
<script type="text/javascript" src="{cms_template}/javascript/stui_block.js "></script>
<script type="text/javascript" src="{cms_template}/javascript/home.js"></script>

<!--[if lt IE 9]>
<script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
<script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
	{include file="header.php"}
</head>
<body>


<script type="text/javascript">
	$(".stui-header__user li,.stui-header__menu li").click(function(){
		$(this).find(".dropdown").toggle();
		if(!stui.browser.useragent.mobile){
			$(".MacPlayer").toggle();
		}
	});
</script>
	        	<!-- 播放器-->		
					<div class="stui-pannel-box">
					{cmsobj_content}
						<div class="stui-pannel-bd">												
							<div class="stui-player col-pd">					
								<div class="stui-player__detail detail">
									<h1 class="title"><a href="{cmsobj_view}">{cmsobj_name}</a></h1>
									<p class="data margin-0">
										<span class="text-muted">类型：</span><a href="{cmsobj_view}" target="_blank">{cmsobj_typename}</a>&nbsp;										<span class="split-line"></span>
										<span class="text-muted">时间：</span><a href="{cmsobj_view}" target="_blank">{cmsobj_time}</a>&nbsp;									</p>
								</div>
							</div>
						</div>
					</div>						
				<!-- end 播放器 -->		
<!-- 播放地址-->	
	<div>{cms_banner_b} </div>
				<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head bottom-line active clearfix">
				<h3 class="title">
					<img src="{cms_template}/image/icon_6.png"/>
					猜你喜欢
				</h3>						
			</div>																		
		</div>
		<div class="stui-pannel_bd">
			<ul class="stui-vodlist__bd clearfix">
			{rand_list:vod,12}
								<li class="col-md-6 col-sm-4 col-xs-3 ">
					<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right">HD</span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="{list_detail}" title="{list_name}">{list_name}</a></h4>
		<p class="text text-overflow text-muted hidden-xs">热度: {list_hit}</p>
	</div>												
</div>															
				</li>		
				{/rand_list}
							</ul>			
		</div>			
	</div>						
</div><!-- 猜你喜欢-->
<!-- 侧栏列表 -->	
    {include file="footer.php"} 