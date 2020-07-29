<html>
<head>
    <title>{cmsobj_name}-{cmsobj_typename} - {cms_title}</title>
<meta name="keywords" content="{cmsobj_typename}" />
<meta name="description" content="{cmsobj_name}" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
            <div class="col-lg-wide-75 col-xs-1 padding-0">	
            	<!-- 详细信息-->
            	<div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box">
						<div class="col-pd clearfix">	
							<span class="text-muted">当前位置 <i class="icon iconfont icon-more"></i></span>
							<a href="/">首页</a> <i class="icon iconfont icon-more"></i>
							<a href="{cmsobj_typemore}">{cmsobj_typename}</a> <i class="icon iconfont icon-more"></i>
							<span class="text-muted">{cmsobj_name}</span>
						</div>
						<div class="col-pd clearfix">
							<div class="stui-content__thumb">									
								<a class="stui-vodlist__thumb picture v-thumb" href="{cmsobj_view}" title="{cmsobj_name}<">
									<img class="lazyload" src="{cms_template}/static/image/load.gif" data-original="{cmsobj_pic}"/>
									<span class="play active hidden-xs"></span>
									<span class="pic-text text-right">{cmsobj_time}/span>
								</a>					
							</div>
							<div class="stui-content__detail">
								<h1 class="title">{cmsobj_name}<span class="score text-red">5.0</span></h1>
								<p class="data">
									<span class="text-muted hidden-xs">类型：</span>{cmsobj_typename}								<span class="split-line"></span>
									<span class="text-muted hidden-xs">时间：</span>{cmsobj_time}
								</p>						    
								<div class="play-btn clearfix">
									<div class="share bdsharebuttonbox hidden-sm hidden-xs pull-right"></div>
									<a class="btn btn-primary" href="{cmsobj_view}">立即播放</a>
																			
									<!--<span class="bdsharebuttonbox hidden-xs"><a href="javascript:;" class="btn btn-default bds_btn" data-cmd="more">分享</a></span>-->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end 详细信息-->
				<div>{cms_banner_a}</div>
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
				                <li ><a href="{cmsobj_view}">HD高清</a></li>
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
				{video_list:24}
								<li class="col-md-6 col-sm-4 col-xs-3 ">
					<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right">{list_time}</span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="{list_detail}" title="{list_name}">{list_name}</a></h4>
		<p class="text text-overflow text-muted hidden-xs">热度:{list_hit}</p>
	</div>												
</div>															
				</li>	
				{/video_list}							
						</ul>	
		</div>			
	</div>						
</div>
<!-- 猜你喜欢-->			
			</div>
        </div>
    </div>

	    {include file="footer.php"}
</body>
</html>