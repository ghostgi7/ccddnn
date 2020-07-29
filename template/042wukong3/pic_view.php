<html>
	<head>
		<title>{cmsobj_name}-{cms_title}</title>
<meta name="keywords" content="{cmsobj_name}" />
<meta name="description" content="{cmsobj_name}" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
{include file="include.php"}
<script type="text/javascript" src="{cms_template}/static/js/jquery.min.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/stui_default.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/stui_block.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/home.js"></script>
		{include file="header.php"}

	</head>
	<body>

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
				              {book_menu}  <li class="top-line-dot "><a href="{menu_link}">{menu_name}</a></li>{/book_menu}
                			</ul>
		</div>
	</div>
</div>	
				</div>
<div class="col-lg-wide-6 col-md-wide-8 col-xs-1 stui-pannel-side">
					<div class="stui-pannel stui-pannel-bg clearfix">	
						 <div>{cms_banner_b}</div>
						<div class="stui-pannel-box clearfix">
							<div class="stui-pannel_bd col-pd clearfix">	
								<h1 class="news-title">{cmsobj_name}</h1>
								<p class="text-muted">类型：{cmsobj_typename} <span class="split-line"></span>人气：{cmsobj_hit}<span class="split-line"></span>更新：2020-04-26 20:54:39</p>
<div class="pannel article_box">
<article class="article_content">
<div>

{cmsobj_content}
</article>
</div>	
</div>								
								</div>	
					<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="stui-pannel-box clearfix">									
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head active bottom-line clearfix">
				<h3 class="title">
								猜你喜欢
				</h3>								
			</div>																		
		</div>
		<div class="stui-pannel_bd clearfix">			
			<ul class="stui-vodlist__text active col-pd clearfix">
				{pic_list:12}
								<li>
					<a class="  text-overflow" href="{list_view}" title="{list_name}"><span class="text-muted pull-right hidden-xs"> {list_time}</span><span class="text-muted"> • </span>{list_name}</a>									
				</li>
				{/pic_list}
							</ul>
		</div>
	</div>
</div><!-- 最新资讯 -->
				</div>
				{include file="footer.php"}
	</body>
</html>