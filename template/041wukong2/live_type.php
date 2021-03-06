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

    <div class="container">
        <div class="row">
        	<div class="col-lg-wide-8 col-xs-1 padding-0">
	            <div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box">
						
   {include file="top.php"} 	
						
						<!-- 排序 -->		
						<!-- end 排序 -->	
<h3>当前位置:{type_name}</h3>						
						
						<div class="stui-pannel_bd">
							<ul class="stui-vodlist clearfix">
							{live_list:20}
																<li class="col-md-5 col-sm-4 col-xs-3">
									<div class="stui-vodlist__box">
	<a class="stui-vodlist__thumb lazyload" href="{list_view}" title="{list_name}" data-original="{list_pic}">						
		<span class="play hidden-xs"></span>		
		<span class="pic-text text-right">HD</span>
	</a>									
	<div class="stui-vodlist__detail">
		<h4 class="title text-overflow"><a href="{list_view} " title="{list_name}">{list_name}</a></h4>
		<p class="text text-overflow text-muted hidden-xs">热度: {list_hit}</p>
	</div>												
</div>	<!-- 列表-->														
								</li>
								{/live_list}	
								 							</ul>	
						</div>
						
					</div>				
				</div>		
				<ul class="stui-page text-center clearfix">
	<li><a href="{cms_page:first}">首页</a></li>
	<li><a href="{cms_page:prev} ">上一页</a></li>	
<li><a href="#">{cms_page:current}/{cms_page:count}</a></li>		
	<li><a href="{cms_page:next} ">下一页</a></li>
	<li><a href="{cms_page:last}">尾页</a></li>	
</ul>
<!-- 翻页-->
	<div>{cms_banner_a} </div>		
			</div>				
			<div class="col-lg-wide-2 col-xs-1 stui-pannel-side visible-lg">
				<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="col-pd clearfix">												
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head bottom-line active clearfix">
				<h3 class="title">
					本周热门
				</h3>													
			</div>																		
		</div>
		<div class="stui-pannel_bd">																			
			<ul class="stui-vodlist__media active col-pd clearfix">
			 {rand_list:vod,5}
									<li >
	<div class="thumb">
		<a class="stui-vodlist__thumb" href="{list_detail}" title="{list_name}" style="width: 33.5px; background-image: url({list_pic});"></a>
	</div>
	<div class="detail detail-side" style="padding-top: 5px;">
		<p class="margin-0"><a href="{list_name}">{list_name}</a></p>	
		<div class="score">	
			<div class="star"><span class="star-cur" id="score"></span></div>
			<span class="branch">{list_time}</span>																
		</div>
	</div>																										
</li>	
 {/rand_list}
 </ul>										
		</div>	
	</div>	
</div>
<div class="stui-pannel stui-pannel-bg clearfix">
	<div class="col-pd clearfix">																
		<div class="stui-pannel_hd">
			<div class="stui-pannel__head bottom-line active clearfix">
				<h3 class="title">
					最新更新
				</h3>													
			</div>																		
		</div>
		<div class="stui-pannel_bd">																			
			<ul class="stui-vodlist__media active col-pd clearfix">
			{new_list:vod,5}
									<li >
	<div class="thumb">
		<a class="stui-vodlist__thumb" href="{list_detail}" title="{list_name}" style="width: 33.5px; background-image: url({list_pic});"></a>
	</div>
	<div class="detail detail-side" style="padding-top: 5px;">
		<p class="margin-0"><a href="{list_detail}">{list_name}</a></p>	
		<div class="score">	
			<div class="star"><span class="star-cur" id="score"></span></div>
			<span class="branch">{list_time}</span>																
		</div>
	</div>																										
</li>	
{/new_list} 
						</ul>										
		</div>	
	</div>
</div>
<!-- 侧栏列表 -->	
			</div>
        </div>
    </div>
    {include file="footer.php"} 
