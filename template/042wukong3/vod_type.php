<html>
<head>
    <title>{type_name} -{cms_title}</title>
<meta name="keywords" content="{cms_keywords}" />
<meta name="description" content="{cms_description}" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
{include file="include.php"}
<script type="text/javascript" src="{cms_template}/static/js/jquery.min.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/stui_default.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/stui_block.js"></script>
<script type="text/javascript" src="{cms_template}/static/js/home.js"></script>
</head>
{include file="header.php"}
<body>
<div class="stui-pannel_hd">
			<ul class="news-nav type-slide clearfix">	
				               {hd_menu}  <li class="col-md-6 col-sm-4 col-xs-3"><a href="{menu_link}">{menu_name}</a></li>{/hd_menu}
				               {video_menu}  <li class="col-md-6 col-sm-4 col-xs-3"><a href="{menu_link}">{menu_name}</a></li>{/video_menu}
                			</ul>
</div>
						
						<!-- 排序 -->		


<h3>当前位置:{type_name}</h3>
						<!-- end 排序 -->
						
								
						
						<div class="stui-pannel_bd">
							<ul class="stui-vodlist clearfix">
								{video_list:36}
																<li class="col-md-6 col-sm-4 col-xs-3">
									<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="{list_detail} " title="{list_name}" data-original="{list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right">{list_time}</span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="{list_detail}" title="{list_name}">{list_name}</a></h4>
		<p class="text text-overflow text-muted hidden-xs">热度:{list_hit}</p>
	</div>												
</div>	<!-- 列表-->															
								</li>
								{/video_list}
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
<!-- 翻页-->		
				</div>
	        </div>
	    </div>
	     <div>{cms_banner_a}</div>
	    {include file="footer.php"}
</body>
</html>