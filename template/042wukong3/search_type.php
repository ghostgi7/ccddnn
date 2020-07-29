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
        	<div class="col-lg-wide-75 col-xs-1 padding-0">	
			   	<div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
							<div class="stui-pannel__head active bottom-line clearfix">	
								<h3 class="title">
									<img src="{cms_template}/static/image/icon_26.png">
									{type_name}	</h3>
							</div>																		
						</div>
						<div class="stui-pannel_bd">
							<ul class="stui-vodlist__media col-pd clearfix">										
								{video_list:12}		
								<li class="active clearfix">
									<div class="thumb">									
										<a class="v-thumb stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}">
											<span class="play hidden-xs"></span>
											<span class="pic-text text-right">已完结</span>
										</a>																												
									</div>
									<div class="detail">
								    	<h3 class="title"><a href="javascript:;">{list_name}</a></h3>
								    	<p><span class="text-muted">播放量：</span>{list_hit}</p>
										<p><span class="text-muted">日期：</span>{list_time}</p>
											<a class="btn btn-min btn-primary" href="{list_view}">立即播放</a>&nbsp;&nbsp;<a class="btn btn-min btn-default" href=" {list_detail}">查看详情</a>
										</p>												    	    																									
									</div>
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
<!-- 翻页 -->
			</div>
			<div class="col-lg-wide-25 stui-pannel-side hidden-md hidden-sm hidden-xs">	
								<div class="stui-pannel stui-pannel-bg clearfix">						
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
							<div class="stui-pannel__head active bottom-line clearfix">
								<h3 class="title">
									<img src="{cms_template}/static/image/icon_1.png">
									国产热播榜
								</h3>																
							</div>
						</div>
						<div class="stui-pannel_bd clearfix">
							<ul class="stui-vodlist__text active col-pd clearfix">
								{type_list:vod,10,20}
																	<li class="bottom-line-dot">
	<a href="{list_detail}" title="{list_name}">
		<span class="text-muted pull-right hidden-md">
			已完结		</span>
		{list_name}</a>
</li>{/type_list}<!-- 列表-->											</ul>
						</div>
					</div>						
				</div>	
								<div class="stui-pannel stui-pannel-bg clearfix">						
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
							<div class="stui-pannel__head active bottom-line clearfix">
								<h3 class="title">
									<img src="{cms_template}/static/image/icon_2.png">
									动漫热播榜
								</h3>																
							</div>
						</div>
						<div class="stui-pannel_bd clearfix">
							<ul class="stui-vodlist__text active col-pd clearfix">
								{type_list:vod,5,14}
																	<li class="bottom-line-dot">
	<a href="{list_detail}" title="{list_name}">
		<span class="text-muted pull-right hidden-md">
			已完结		</span>{list_name}</a>
</li>{/type_list}<!-- 列表-->	
															</ul>
						</div>
					</div>						
				</div>	
							</div>
        </div>
    </div>
     <div>{cms_banner_a}</div>
{include file="footer.php"}
</body>
</html>
