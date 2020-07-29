<html>
<head>
	<title>{cmsobj_name}-{cmsobj_typename}-{cms_title}视频介绍</title>
	<meta name="keywords" content="{cms_keywords},{cmsobj_typename},{cms_title}" />
	<meta name="description" content="{cms_description},{cmsobj_typename},{cms_title}" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">				
{include file="include.php"}
</head>
<body>
<div class="container">
	<div class="row">
	{include file="header.php"} 
	<div class="stui-pannel clearfix">
				<div class="type-list-fl">
              {cms_notice}
		    	</div>
	</div>
			<div class="stui-pannel clearfix">
				<div class="stui-content col-pd clearfix">
					<div class="stui-content__thumb fl-l">											
						<a class="pic" href="" title="{cmsobj_typename}">
							<img class="img-responsive lazyload"  src="{cmsobj_pic}"/>
						</a>										
					</div>
					<div class="stui-content__detail fl-l">
						<h3 class="title">{cmsobj_name}</h3>
						<p class="data"><span>类型：</span>{cmsobj_typename}</p>
						<p class="data"><span>更新时间:</span>{cmsobj_time}</p>
					    
						<div class="playbtn">
							<a class="btn btn-primary" href="{cmsobj_view}">立即播放</a>
						</div>
						<div class="playbtn o-bg">
						</div>
					</div>	
					<div class="stui-content__ad hidden-sm hidden-xs fl-r">
					</div>
				</div>				
			</div>
			<div class="stui-header__menu clearfix">
 {cms_banner_b}
			</div>
			<div class="stui-pannel clearfix">

				<div class="stui-pannel__head clearfix">
					<span class="hidden-sm hidden-xs pull-right"></span>
					<h3 class="title">推荐视频</h3>								
				</div>
				<ul class="stui-vodlist clearfix">
					{video_list:12}						
					<li class="stui-vodlist__item">
						<a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}">						
							<span class="play hidden-xs"></span>		
							<span class="pic-text text-right"></span>
						</a>									
						<h4 class="stui-vodlist__title"><a href="{list_detail}" title="{list_name}">{list_name}</a></h4>		
					</li>
				{/video_list}
	
				</ul>
				
			</div>
			
	{include file="footer.php"}		
	</div>
</div>

 </body>
</html>

