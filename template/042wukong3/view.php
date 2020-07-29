<html>
<head>
    <title>{cmsobj_name}-{cmsobj_typename}-{cmsobj_name}-{cms_title}</title>
<meta name="keywords" content="{cmsobj_name}-" />
<meta name="description" content="{cmsobj_name}-" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
{include file="include.php"}
{include file="header.php"}
<script type="text/javascript" src="{cms_template}/static/js/jquery.min.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/stui_default.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/stui_block.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/home.js"></script>
	<style type="text/css">
		.stui-player__head{ display: none;}
		@media (max-width:100%){
			body{ padding-top: 0;}
			.stui-header__top{ display: none;}
			.stui-player__head{ display: block; padding: 12px; background-color: #333; color: #fff;}
			.stui-player__head a{ color: #fff;}
			}
	</style>
	
    <div class="container">
        <div class="row">
        	<div class="col-lg-wide-75 col-xs-1 padding-0">	
	        	<!-- 播放器-->
	        
	            <div class="stui-pannel stui-pannel-bg clearfix">
 	{cmsobj_content}
					<div class="stui-pannel-box">
						<div class="stui-pannel-bd">												
							<div class="stui-player col-pd">
								<div class="stui-player__head">
									<span class="pull-right">
										<a href="/"><i class="iconfont icon-home"></i></a>
							    	</span>   	
							    		
							    	<a href="javascript:;" onclick="window.history.go(-1)"><i class="iconfont icon-back"></i> 返回</a>
								</div>					
								<div class="stui-player__detail detail">
									<h1 class="title"><a href="{cmsobj_view}">{cmsobj_name}</a></h1>
									<p class="data margin-0">
										<span class="text-muted">类型：</span><a href="/index.php/vod/search/class/%E8%87%AA%E6%8B%8D.html" target="_blank">{cmsobj_typename}</a>&nbsp;										<span class="split-line"></span>
										<span class="text-muted">年份：</span>{cmsobj_time}									</p>
								</div>
							</div>
						</div>
					</div>					
				</div>
				 <div>{cms_banner_b}</div>
				<!-- end 播放器 -->				
				<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box b playlist mb">
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head bottom-line active clearfix">
				<span class="more text-muted pull-right"></span>
				<h3 class="title">
					<img src="{cms_template}/static/image/icon_26.png"/>
					UEYUN				</h3>						
			</div>																		
		</div>
		<div class="stui-pannel_bd col-pd clearfix">
			<ul class="stui-content__playlist clearfix">
				                <li class="active"><a href="{cmsobj_view}">HD高清</a></li>
                 			</ul>
		</div>
	</div>
</div>
<!-- 播放地址-->	
				<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head active bottom-line clearfix">
				<h3 class="title">
					<img src="{cms_template}/static/image/icon_3.png"/>
					猜你喜欢
				</h3>						
			</div>																		
		</div>
		<div class="stui-pannel_bd">
			<ul class="stui-vodlist__bd clearfix">
					{video_list:12}
								<li class="col-md-6 col-sm-4 col-xs-3 ">
					<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href=" {list_detail}" title="{list_name}" data-original=" {list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right"> {list_time}</span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow">
			<a href=" {list_detail}" title="{list_name}">
		</h4>
		<p class="text text-overflow text-muted hidden-xs">{list_name}</p>
	</div>												
</div>	
{/video_list}														
				</li>			
	</ul>
		</div>			
	</div>						
</div>
<!-- 猜你喜欢-->
  {include file="footer.php"}	
			</div>				
			<div class="col-lg-wide-25 col-xs-1 stui-pannel-side hidden-sm hidden-xs">	
				<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box clearfix">

		
	</div>
</div><!-- 扫码-->
				<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box">
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head active bottom-line clearfix">
				<h3 class="title">
				<img src="{cms_template}/static/image/icon_12.png"/>
					热门榜单
				</h3>						
			</div>																		
		</div>
		<div class="stui-pannel_bd">
			<ul class="stui-vodlist__text col-pd clearfix">
				{rand_list:vod,17}
									<li class="bottom-line-dot">
	<a href=" {list_detail}" title=" {list_name}">
		<span class="text-muted pull-right hidden-md">
		  {list_time}  </span>
	{list_name}</a>
</li>	
{/rand_list}
					</ul>	
		</div>
	</div>
</div><!-- 热播-->			
</body>

</html>