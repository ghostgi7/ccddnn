<!DOCTYPE html>
<html>
	<head>
		<title>{type_name} -{cms_title}</title>
<meta name="keywords" content="{cms_keywords}">
<meta name="description" content="{cms_description}">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
{include file="include.php"}
<script type="text/javascript" src="static/js/jquery.min.js"></script>
<script type="text/javascript" src="static/js/stui_default.js"></script>
<script type="text/javascript" src="static/js/stui_block.js"></script>
<script type="text/javascript" src="static/js/home.js"></script>
	</head>
	<body>
		{include file="header.php"}
<script type="text/javascript">
	$(".stui-header__user li,.stui-header__menu li").click(function(){
		$(this).find(".dropdown").toggle();
	});
</script>

	    <div class="container">
	        <div class="row">
	           <div class="col-lg-wide-15 col-md-wide-2 col-xs-1 padding-0">	
					<style type="text/css">
	.news-nav{ position: relative;}
	.news-nav li a{ display: block; padding: 15px 0; font-size: 16px; text-align: center;}
	.news-nav li.active a{ color: #FF9900;}
	@media (max-width: 991px){	
		.news-nav li{ float: left; margin-left: 10px; margin-right:10px}
		.news-nav li.top-line-dot:before{ display: none;}
		.news-nav li a{ padding: 0; white-space:nowrap}
	}
</style>
<div class="stui-pannel stui-pannel-bg clearfix">					
	<div class="stui-pannel-box clearfix">
		<div class="stui-pannel-bd col-pd">
			<h3 class="news-nav-head text-muted text-center hidden-sm hidden-xs">资源分类</h3>
			<ul class="news-nav type-slide clearfix">	
				              {pic_menu}  <li class="top-line-dot "><a href="{menu_link}">{menu_name}</a></li>{/pic_menu}
                			</ul>
		</div>
	</div>
</div>	
				</div>
				<div class="col-lg-wide-6 col-md-wide-8 col-xs-1 stui-pannel-side">	
					<div class="stui-pannel stui-pannel-bg clearfix">					
						<div class="stui-pannel-box clearfix">
							<div class="stui-pannel_hd">
								<div class="stui-pannel__head active bottom-line clearfix">
									<span class="more text-muted pull-right hidden-xs"></span>
									<h3 class="title">
										{type_name}									</h3>																
								</div>
							</div>
							<div class="stui-pannel_bd clearfix">											
								<ul class="stui-vodlist__media active col-pd clearfix">
									{pic_list:12}
							<li class="top-line-dot">
								<!--这个你自行决定加不加图片
										<div class="thumb">
											<a class="w-thumb stui-vodlist__thumb active lazyload" href=" {list_view}" title="{list_time}" data-original="http://img2.maccms.com/[db:图片]">											
											</a>
										</div>-->	
										<div class="detail">
											<h4 class="title"><a href="{list_view}">{list_name} </a></h4>										
											<p class="margin-0 font-12">{list_time}</p>
										</div>																		
									</li>
									{/pic_list} 
																		
																	</ul>
							</div>							
						</div>
					</div>
				<ul class="stui-page text-center clearfix">
	<li><a href="{cms_page:first}">首页</a></li>
	<li><a href="{cms_page:prev}">上一页</a></li>
		<li class="active visible-xs"><span class="num">{cms_page:current}/{cms_page:count}</span></li>
	<li><a href="{cms_page:next}">下一页</a></li>
	<li><a href="{cms_page:last}">尾页</a></li>
</ul>							
				</div>
	        </div>
	    </div>
	    <div>{cms_banner_a}</div>
{include file="footer.php"}
	</body>
</html>