<html>
<head>
    <title>搜索结果-{cms_title}</title>
<meta name="keywords" content="{type_name}搜索结果" />
<meta name="description" content="{type_name}搜索结果" />   
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
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

    <div class="container">
        <div class="row">
        	<div class="col-lg-wide-75 col-xs-1 padding-0">	
			   	<div class="stui-pannel stui-pannel-bg clearfix">
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
							<div class="stui-pannel__head active bottom-line clearfix">	
								<h3 class="title">
									<img src="{cms_template}/image/icon_30.png"/>
						搜索结果:{type_name}</h3>
							</div>																		
						</div>
						<div class="stui-pannel_bd">
							<ul class="stui-vodlist__media col-pd clearfix">										
										{video_list:10}
								<li class="active clearfix">
									<div class="thumb">									
										<a class="v-thumb stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}">
											<span class="play hidden-xs"></span>
											<span class="pic-text text-right">HD</span>
										</a>																												
									</div>
									<div class="detail">
								    	<h3 class="title"><a href="{list_detail}"> {list_name}</a></h3>
										<p><span class="text-muted">上传时间：</span>{list_time}</p>
										<p class="margin-0 ">
											<a class="btn btn-min btn-primary" href="{list_detail}">立即播放</a>&nbsp;&nbsp;<a class="btn btn-min btn-default" href="/vod/detail/id/48320.html">查看详情</a>
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
	<li><a href="{cms_page:prev} ">上一页</a></li>
<li><a href="#">{cms_page:current}/{cms_page:count}</a></li>
	<li><a href="{cms_page:next} ">下一页</a></li>
	<li><a href="{cms_page:last}">尾页</a></li>
</ul>
<!-- 翻页 -->
	<div>{cms_banner_a} </div>
			</div>
			<div class="col-lg-wide-25 stui-pannel-side hidden-md hidden-sm hidden-xs">	
								<div class="stui-pannel stui-pannel-bg clearfix">						
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
							<div class="stui-pannel__head active bottom-line clearfix">
								<h3 class="title">
									<img src="{cms_template}/image/icon_1.png"/>
									电影热播榜
								</h3>																
							</div>
						</div>
						<div class="stui-pannel_bd clearfix">
							<ul class="stui-vodlist__media active col-pd clearfix">
							{rand_list:vod,7}
																	<li >
	<div class="thumb">
		<a class="m-thumb stui-vodlist__thumb lazyload" href="/vod/detail/id/26629.html" title=" {list_name}" data-original="{list_pic} "></a>
	</div>
	<div class="detail detail-side">
		<h4 class="title"><a href="/vod/detail/id/26629.html"><i class="icon iconfont icon-more text-muted pull-right"></i> {list_name}</a></h4>
		<p class="font-12 margin-0"><span class="text-muted">上传时间：</span>{list_time}</p>
	</div>	
{/rand_list} 	
</li><!-- 列表-->		
															</ul>
							<ul class="stui-vodlist__text active col-pd clearfix">
																	<li class="">
	<a class="text-overflow" href="/vod/detail/id/26629.html" title=" {list_name}"><span class="text-muted pull-right">已完结</span></a>
</li><!-- 列表-->	
	
															</ul>
						</div>
					</div>						
				</div>	
								<div class="stui-pannel stui-pannel-bg clearfix">						
					<div class="stui-pannel-box">
						<div class="stui-pannel_hd">
							<div class="stui-pannel__head active bottom-line clearfix">
								<h3 class="title">
									<img src="{cms_template}/image/icon_2.png"/>
									猜你喜欢
								</h3>																
							</div>
						</div>
						<div class="stui-pannel_bd clearfix">
							<ul class="stui-vodlist__media active col-pd clearfix">
							{new_list:vod,5}
																	<li >
	<div class="thumb">
		<a class="m-thumb stui-vodlist__thumb lazyload" href="{list_detail}" title=" {list_name}" data-original="{list_pic}"></a>
	</div>
	<div class="detail detail-side">
		<h4 class="title"><a href="{list_detail}"><i class="icon iconfont icon-more text-muted pull-right"></i>  {list_name}</a></h4>
		<p class="font-12 margin-0"><span class="text-muted">上传时间：</span>{list_time}</p>
	</div>																										
</li><!-- 列表-->		
															</ul>
							<ul class="stui-vodlist__text active col-pd clearfix">
																	<li class="">
	<a class="text-overflow" href="{list_detail}" title="{list_name}"><span class="text-muted pull-right">完结</span>
</li><!-- 列表-->{/new_list}									</ul>
						</div>
					</div>						
				</div>	
							</div>
        </div>
    </div>
    {include file="footer.php"} 
