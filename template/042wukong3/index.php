<!DOCTYPE html>
<html>
<head>
    <title>{cms_title}</title>
<meta name="keywords" content="{cms_keywords}">
<meta name="description" content="{cms_description}">   
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
{include file="include.php"}
<script type="text/javascript" src="{cms_template}/static/js/jquery.min.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/stui_default.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/stui_block.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/home.js"></script>
</head>
<body>
	{include file="header.php"}
    <div class="container">
        <div class="row">
			<!-- D072 by v.shoutu.cn -->
<div class="stui-pannel stui-pannel-bg clearfix">
{cms_banner_a}
							</div>
		</div>
	</div>
<!-- 幻灯片 -->				
<div class="stui-pannel stui-pannel-bg clearfix">	
	<div class="stui-pannel-box clearfix">	
		<div class="stui-pannel_bd clearfix">								
			<div class="col-lg-wide-75 col-xs-1 padding-0">	
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
						<a class="more text-muted pull-right" href="{type_more}">更多 <i class="icon iconfont icon-more"></i></a>
						<h3 class="title">
							<img src="{cms_template}/static/image/icon_1.png">
							<a href="#">最近更新</a>
						</h3>						
						<ul class="nav nav-text pull-right hidden-sm hidden-xs">
													</ul>
					</div>																		
				</div>
				<ul class="stui-vodlist clearfix">		
					{new_list:vod,12}									
										<li class="col-md-6 col-sm-4 col-xs-3">
						<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right">{list_time} </span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="{list_detail}" title="{list_name}">{list_name}</a></h4>
		<p class="text text-overflow text-muted hidden-xs">热度: {list_hit}</p>
	</div>												
</div>			
{/new_list}											
					</li>
					 
				</ul>
				<ul class="stui-vodlist__text col-pd clearfix hidden-xs">
					{new_list:vod,12}
										<li class="col-md-4 col-sm-3 col-xs-1 padding-0">
						<a class="top-line-dot text-overflow" href="javascript:;" title="{list_name}">
							<span class="text-muted pull-right">已完结</span>
						{list_name}					</a>									
					</li>
					{/new_list}	
									</ul>
			</div>
			<div class="col-lg-wide-25 hidden-md hidden-sm hidden-xs">
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title">
							<img src="{cms_template}/static/image/icon_12.png">
							<a href="#">本周推荐</a>
						</h3>						
					</div>																		
				</div>
				<ul class="stui-vodlist__text active col-pd clearfix">
					{rand_list:vod,12}
											<li class="bottom-line-dot">
	<a href="{list_detail}" title="{list_name}">{list_name}</a>
 </li>	
{/rand_list}
									</ul>									
			</div>
		</div>
	</div>	
</div>
<!-- 首页推荐 -->	

<div class="stui-pannel stui-pannel-bg clearfix">	
	{video_hot}
	<div class="stui-pannel-box clearfix">	
		<div class="stui-pannel_bd clearfix">								
			<div class="col-lg-wide-75 col-xs-1 padding-0">	
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
						<a class="more text-muted pull-right" href=" {type_more}">更多 <i class="icon iconfont icon-more"></i></a>
						<h3 class="title">
							<img src="{cms_template}/static/image/icon_2.png">
							<a href=" {type_more}">{type_name} </a>
						</h3>						
						<ul class="nav nav-text pull-right hidden-sm hidden-xs">
													</ul>
					</div>																		
				</div>
				<ul class="stui-vodlist clearfix">		
				{video_list:12}									
										<li class="col-md-6 col-sm-4 col-xs-3">
						<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right">{list_time} </span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="{list_detail}" title="{list_name}">{list_name}</a></h4>
		<p class="text text-overflow text-muted hidden-xs">热度: {list_hit}</p>
	</div>												
</div>			
{/video_list}										
					</li>
					 
				</ul>
				<ul class="stui-vodlist__text col-pd clearfix hidden-xs">
					{new_list:vod,12}
										<li class="col-md-4 col-sm-3 col-xs-1 padding-0">
						<a class="top-line-dot text-overflow" href="javascript:;" title="{list_name}">
							<span class="text-muted pull-right">已完结</span>
						{list_name}					</a>									
					</li>
					{/new_list}	
									</ul>
			</div>
			<div class="col-lg-wide-25 hidden-md hidden-sm hidden-xs">
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title">
							<img src="{cms_template}/static/image/icon_12.png">
							<a href="#">随机推荐</a>
						</h3>						
					</div>																		
				</div>
				<ul class="stui-vodlist__text active col-pd clearfix">
					{rand_list:vod,12}
											<li class="bottom-line-dot">
	<a href="{list_detail}" title="{list_name}">{list_name}	</a>
</li>	
{/rand_list}
									</ul>									
			</div>
		</div>
	</div>	
</div>
{/video_hot}
<!-- 直播推荐 -->	
<div class="stui-pannel stui-pannel-bg clearfix">	
	<div class="stui-pannel-box clearfix">	
		<div class="stui-pannel_bd clearfix">								
			<div class="col-lg-wide-75 col-xs-1 padding-0">	
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
						<a class="more text-muted pull-right" href="{type_more}">更多 <i class="icon iconfont icon-more"></i></a>
						<h3 class="title">
							<img src="{cms_template}/static/image/icon_3.png">
							<a href="#">精选直播</a>
						</h3>						
						<ul class="nav nav-text pull-right hidden-sm hidden-xs">
													</ul>
					</div>																		
				</div>
				<ul class="stui-vodlist clearfix">		
					{live_hot_list:12}								
										<li class="col-md-6 col-sm-4 col-xs-3">
						<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href=" {list_view}" title="{list_name}" data-original="https:{list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right">{list_time} </span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href=" {list_view}" title="{list_name}">{list_name}</a></h4>
		<p class="text text-overflow text-muted hidden-xs">热度: {list_hit}</p>
	</div>												
</div>			
{/live_hot_list}										
					</li>
					 
				</ul>
				<ul class="stui-vodlist__text col-pd clearfix hidden-xs">
					{live_hot_list:12}
										<li class="col-md-4 col-sm-3 col-xs-1 padding-0">
						<a class="top-line-dot text-overflow" href="javascript:;" title="{list_name}">
							<span class="text-muted pull-right">已完结</span>
						{list_name}					</a>									
					</li>
					{/live_hot_list}
									</ul>
			</div>
			<div class="col-lg-wide-25 hidden-md hidden-sm hidden-xs">
				<div class="stui-pannel_hd">
					<div class="stui-pannel__head active bottom-line clearfix">
						<h3 class="title">
							<img src="{cms_template}/static/image/icon_12.png">
							<a href="javascript:;">猜你喜欢</a>
						</h3>						
					</div>																		
				</div>
				<ul class="stui-vodlist__text active col-pd clearfix">
					{rand_list:vod,12}
											<li class="bottom-line-dot">
	<a href="{list_detail}" title="{list_name}">{list_name}</a>
</li>	
{/rand_list}
									</ul>									
			</div>
		</div>
	</div>	
</div>
<!-- 分类列表 -->
{include file="footer.php"}
</body>
</html>
