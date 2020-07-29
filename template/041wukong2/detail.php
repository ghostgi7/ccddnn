<!DOCTYPE html>
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
</head>
<body>
	{include file="header.php"}
	        	<!-- 详情 -->		
				<div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box clearfix">
						<div class="stui-pannel_bd clearfix">							
							<div class="stui-content col-pd clearfix">
								<div class="stui-content__thumb">									
									<a class="stui-vodlist__thumb picture v-thumb" href="{cmsobj_view}" title="{cmsobj_name}">
										<img class="lazyload" src="{cms_template}/image/load.gif" data-original="{cmsobj_pic}"/>
										<span class="play active hidden-xs"></span>
										<span class="pic-text text-right">HD</span>
									</a>										
								</div>
								<div class="stui-content__detail">
									<h1 class="title">{cmsobj_name}</h1>
									<p class="data">
										<span class="text-muted">类型：</span>{cmsobj_typename}										<span class="split-line"></span>
									</p>
									<p class="data"><span class="text-muted">更新时间：</span>{cmsobj_time}</p>
									<div class="play-btn clearfix">
										<div class="share bdsharebuttonbox hidden-sm hidden-xs pull-right"></div>
										<a class="btn btn-primary" href="{cmsobj_view}">立即播放</a>
																				
										<!--<span class="bdsharebuttonbox hidden-xs"><a href="javascript:;" class="btn btn-default bds_btn" data-cmd="more">分享</a></span>-->
									</div>
								</div>			    																									
							</div>
						</div>
					</div>					
				</div>	
				<!-- end 详情-->			
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
				                <li ><a href="{cmsobj_view}">HD高清</a></li>
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
				<div>{cms_banner_a} </div>
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
			{video_list:12}
								<li class="col-md-6 col-sm-4 col-xs-3 ">
					<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name} " data-original="{list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right">HD</span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="{list_detail}" title="{list_name}"> {list_name} </a></h4>
		<p class="text text-overflow text-muted hidden-xs">热度:{list_hit}</p>
	</div>												
</div>															
				</li>	{/video_list} 		
							</ul>			
		</div>			
	</div>						
</div><!-- 猜你喜欢-->	
	
							</div>				
			
<!-- 侧栏列表 -->	
    {include file="footer.php"}  