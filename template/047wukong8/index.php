<html>
<head>
	<title>{cms_title}</title>
	<meta name="keywords" content="{cms_keywords}" />
	<meta name="description" content="{cms_description}" /> 
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

			<!-- 列表 -->
			<div class="stui-pannel clearfix">
				<div class="stui-pannel__head clearfix">
					<span class="hidden-sm hidden-xs pull-right"></span>
					<h3 class="title">最近更新</h3>								
				</div>
				<ul class="stui-vodlist clearfix">
					{new_list:vod,12}						
					<li class="stui-vodlist__item">
						<a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}">						
							<span class="play hidden-xs"></span>		
							<span class="pic-text text-right"></span>
						</a>									
						<h4 class="stui-vodlist__title"><a href="{9CCMS-Index:DUrl}" title="{list_name}">{list_name}</a></h4>		
					</li>
					{/new_list} 
	
				</ul>			
			</div>
			{video_hot}
			<div class="stui-pannel clearfix">
				<div class="stui-pannel__head clearfix">
					<span class="hidden-sm hidden-xs pull-right"></span>
					<h3 class="title">{type_name}</h3>								
				</div>
				<ul class="stui-vodlist clearfix">
					{video_list:12}						
					<li class="stui-vodlist__item">
						<a class="stui-vodlist__thumb lazyload" href="{list_detail} " title=" {list_name}" data-original="{list_pic}">						
							<span class="play hidden-xs"></span>		
							<span class="pic-text text-right"></span>
						</a>									
						<h4 class="stui-vodlist__title"><a href="{list_detail}" title="{list_name}">{list_name}</a></h4>		
					</li>
					{/video_list} 
				</ul>			
			</div>	
			{/video_hot}
			<div class="stui-pannel clearfix">
				<div class="stui-pannel__head clearfix">
					<span class="hidden-sm hidden-xs pull-right"></span>
					<h3 class="title">直播推荐</h3>								
				</div>
				<ul class="stui-vodlist clearfix">
					{live_hot_list:12}						
					<li class="stui-vodlist__item">
						<a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}">						
							<span class="play hidden-xs"></span>		
							<span class="pic-text text-right"></span>
						</a>									
						<h4 class="stui-vodlist__title"><a href="{9CCMS-Index:DUrl}" title="{list_name}">{list_name}</a></h4>		
					</li>
				{/live_hot_list}
				</ul>			
			</div>
			
			<div class="stui-pannel clearfix">				
				<div class="stui-pannel__head clearfix"> 
					<h3 class="title">								
						友情链接
					</h3>								
				</div>																		
				<ul class="stui-link__text col-pd clearfix">
          {cms_link}			
							
				</ul>					
			</div>	
		{include file="footer.php"} 
	</div>
</div>
 </body>
</html>

