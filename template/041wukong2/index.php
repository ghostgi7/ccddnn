<!DOCTYPE html>
<html>
<head>
    <title>{cms_title}</title>
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
<script src="./javascript/html5.min.js"></script>
<script src="./javascript/respond.min.js"></script>
<![endif]-->
</head>
<body>
{include file="header.php"}
        	<!-- D063 by v.shoutu.cn -->
<div class="stui-pannel clearfix">		
	<div class="stui-pannel-box padding-0">
		<div class="col-lg-wide-8 col-xs-1 padding-0">
			<div class="col-pd stui-pannel-bg">													
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head bottom-line active clearfix">
						<a class="more text-muted pull-right" href="{:U('vod','type','1','1')}">更多 <i class="icon iconfont icon-more"></i></a>
						<h3 class="title">
							<img src="{cms_template}/image/icon_1.png"/>
							<a href="/">最新电影</a>
						</h3>						
						<ul class="nav nav-text pull-right hidden-sm hidden-xs">
									                    <li><a href="{:U('vod','type','1','1')}" class="text-muted">制服丝袜</a> <span class="split-line"></span></li>
		                    		                    <li><a href="{:U('vod','type','2','1')}" class="text-muted">群交淫乱</a> <span class="split-line"></span></li>
		                    		                    <li><a href="{:U('vod','type','3','1')}" class="text-muted">无码专区</a> <span class="split-line"></span></li>
		                    		                    <li><a href="{:U('vod','type','4','1')}" class="text-muted">偷拍自拍</a> <span class="split-line"></span></li>
		                    		                    <li><a href="{:U('vod','type','5','1')}" class="text-muted">卡通动漫</a> <span class="split-line"></span></li>
		                    						</ul>										
					</div>																		
				</div>
				
				<div class="stui-pannel_bd clearfix">	
					<ul class="stui-vodlist clearfix">
					{new_list:vod,12}
												<li class="col-md-6 col-sm-4 col-xs-3 ">
							<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right">HD</span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="{list_detail}" title="{list_name}"> {list_name}</a></h4>
	</div>												
</div>				
{/new_list}									
						</li>
							 
					</ul>	
				</div>	
			</div>
				{cms_banner_a}
		</div>	
		<div class="col-lg-wide-2 stui-pannel-side hidden-md hidden-sm hidden-xs">	
			<div class="col-pd stui-pannel-bg clearfix">												
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head bottom-line active clearfix">
						<h3 class="title">
							本周热门电影						</h3>													
					</div>																		
				</div>
				<div class="stui-pannel_bd">																			
					<ul class="stui-vodlist__media active col-pd clearfix">
					{type_list:vod,8,5}
													<li >
	<div class="thumb">
		<a class="stui-vodlist__thumb" href="" title="{list_detail}" style="width: 43.5px; background-image: url({list_pic})"></a>
	</div>
	<div class="detail detail-side" style="padding-top: 7px;">
		<p class="margin-0"><a href="{list_detail}">{list_name}</a></p>	
	</div>																										
</li>	
{/type_list}
</ul>										
				</div>	
			</div>					
		</div>
	</div>
</div>
{video_hot}
<div class="stui-pannel clearfix">		
	<div class="stui-pannel-box padding-0">
		<div class="col-lg-wide-8 col-xs-1 padding-0">
			<div class="col-pd stui-pannel-bg">													
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head bottom-line active clearfix">
						<a class="more text-muted pull-right" href="{type_more}">更多 <i class="icon iconfont icon-more"></i></a>
						<h3 class="title">
							<img src="{cms_template}/image/icon_2.png"/>
							<a href="">{type_name}</a>
						</h3>															
					</div>																		
				</div>
				
				<div class="stui-pannel_bd clearfix">	
					<ul class="stui-vodlist clearfix">
					{video_list:12}
												<li class="col-md-6 col-sm-4 col-xs-3 ">
							<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right">{type_name}</span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="{list_detail}" title="{list_name}">{list_name}</a></h4>
	</div>												
</div>													
						</li>
						{/video_list}
					</ul>	
				</div>	
			</div>
		</div>	
		<div class="col-lg-wide-2 stui-pannel-side hidden-md hidden-sm hidden-xs">	
			<div class="col-pd stui-pannel-bg clearfix">												
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head bottom-line active clearfix">
						<h3 class="title">
							 {type_name}					</h3>													
					</div>																		
				</div>
				<div class="stui-pannel_bd">																			
					<ul class="stui-vodlist__media active col-pd clearfix">
					{video_list:4}
													<li >
	<div class="thumb">
		<a class="stui-vodlist__thumb" href="{list_detail}" title="{list_name}" style="width: 33.5px; background-image: url({list_pic});"></a>
	</div>
	<div class="detail detail-side" style="padding-top: 5px;">
		<p class="margin-0"><a href="{list_detail}">{list_name}</a></p>	
	</div>																										
</li>		
{/video_list}
</ul>										
				</div>	
			</div>					
		</div>
	</div>
</div>
{/video_hot}
<div class="stui-pannel clearfix">		
	<div class="stui-pannel-box padding-0">
		<div class="col-lg-wide-8 col-xs-1 padding-0">
			<div class="col-pd stui-pannel-bg">													
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head bottom-line active clearfix">
						<a class="more text-muted pull-right" href="{type_more}">更多 <i class="icon iconfont icon-more"></i></a>
						<h3 class="title">
							<img src="{cms_template}/image/icon_2.png"/>
							<a href="">直播推荐</a>
						</h3>															
					</div>																		
				</div>
				
				<div class="stui-pannel_bd clearfix">	
					<ul class="stui-vodlist clearfix">
					{live_hot_list:12}
												<li class="col-md-6 col-sm-4 col-xs-3 ">
							<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="{list_view}" title="{list_name}" data-original="{list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right">{list_time}</span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="{list_view}" title="{list_name}">{list_name}</a></h4>
	</div>												
</div>													
						</li>
						{/live_hot_list} 
					</ul>	
				</div>	
			</div>
		</div>	
		<div class="col-lg-wide-2 stui-pannel-side hidden-md hidden-sm hidden-xs">	
			<div class="col-pd stui-pannel-bg clearfix">												
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head bottom-line active clearfix">
						<h3 class="title">
							{type_name}					</h3>													
					</div>																		
				</div>
				<div class="stui-pannel_bd">																			
					<ul class="stui-vodlist__media active col-pd clearfix">
					{live_hot_list:7}
													<li >
	<div class="thumb">
		<a class="stui-vodlist__thumb" href="{list_detail}" title="{list_name}" style="width: 33.5px; background-image: url({list_pic});"></a>
	</div>
	<div class="detail detail-side" style="padding-top: 5px;">
		<p class="margin-0"><a href="{list_detail}">{list_name}</a></p>	
	</div>																										
</li>		
{/live_hot_list} 
</ul>										
				</div>	
			</div>					
		</div>
	</div>
</div>
<!-- 分类列表 -->
        {include file="footer.php"}   
