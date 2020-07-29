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
    <div class="container">
        <div class="row">
        	<div class="col-lg-wide-8 col-xs-1 padding-0">	
	        	<!-- 播放器-->		
	            <div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box">
					{cmsobj_content}
						<div class="stui-pannel-bd">												
							<div class="stui-player col-pd">
								<div class="stui-player__video clearfix">
									<script type="text/javascript">var player_data={"flag":"play","encrypt":0,"trysee":0,"points":0,"link":"\/vod\/play\/id\/48333\/sid\/1\/nid\/1.html","link_next":"","link_pre":"","url":"http:\/\/cn7.18787000118.com\/hls\/20200428\/59560028bba544f95e222e460eaab64e\/index.m3u8","url_next":"","from":"wlm3u8","server":"no","note":""}</script><script type="text/javascript" src="/static/js/playerconfig.js?t=20200430"></script><script type="text/javascript" src="/static/js/player.js?t=20200430"></script>									
								</div>						
								<div class="stui-player__detail detail">
									<ul class="more-btn">	
										 							
										<li>
											<a href="{cmsobj_view}" class="btn btn-default" onclick="window.location.reload()">刷新 <i class="icon iconfont icon-refresh hidden-xs"></i></a>
										</li>
																				<li>
											<a class="btn btn-default copylink" href="{cmsobj_view}">分享 <i class="icon iconfont icon-share hidden-xs"></i></a>
										</li>
										<li><a class="btn btn-default" href="{cmsobj_view}"><i class="icon iconfont icon-back hidden-xs"></i> 线路一</a></li>
										<li><a class="btn btn-default" href="{cmsobj_view}">线路二<i class="icon iconfont icon-more hidden-xs"></i></a></li>
									</ul>
                                    <h1 style="font-size:16px;color:#FF4A4A;font-weight:bold">如果无法播放请刷新页面或切换线路,视频载入与网速有关请耐心等待几秒</h1>
									<h1 class="title"><a href="{cmsobj_view}">{cmsobj_name}</a></h1>
									<p class="data margin-0">
										<span class="text-muted">类型：</span><a href="{cmsobj_view}" target="_blank">{cmsobj_typename}</a>&nbsp;										<span class="split-line"></span>
										<span class="text-muted">时间：</span><a href="{cmsobj_view}" target="_blank">{cmsobj_time}</a>&nbsp;									</p>
								</div>
							</div>
						</div>
					</div>					
				</div>	
				<!-- end 播放器 -->		
				
				<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box b playlist mb">
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head bottom-line active clearfix">
				<span class="more text-muted pull-right">在线播放,无需安装播放器</span>
				<h3 class="title">
					线路①				</h3>						
			</div>																		
		</div>
		<div class="stui-pannel_bd col-pd clearfix">
			<ul class="stui-content__playlist clearfix">
				                <li class="active"><a href="{cmsobj_view}">HD高清</a></li>
                 			</ul>
		</div>
	</div>
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box b playlist mb">
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head bottom-line active clearfix">
				<span class="more text-muted pull-right">在线播放,无需安装播放器</span>
				<h3 class="title">
					线路②				</h3>						
			</div>																		
		</div>
		<div class="stui-pannel_bd col-pd clearfix">
			<ul class="stui-content__playlist clearfix">
				                <li ><a href="{cmsobj_view}">HD高清</a></li>
                 			</ul>
		</div>
	</div>
</div>
<!-- 播放地址-->	
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
			{live_list:12}
								<li class="col-md-6 col-sm-4 col-xs-3 ">
					<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="{list_view}" title="{list_name}" data-original="{list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right">HD</span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="{list_view}" title="{list_name}">{list_name}</a></h4>
		<p class="text text-overflow text-muted hidden-xs">热度: {list_hit}</p>
	</div>												
</div>															
				</li>		
				{/live_list}
							</ul>			
		</div>			
	</div>						
</div><!-- 猜你喜欢-->
			</div>				
<!-- 侧栏列表 -->	
			</div>
        </div>
    </div>
    {include file="footer.php"} 