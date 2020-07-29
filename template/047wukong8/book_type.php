<html>
<head>
	<title>{cms_title}分类{type_name} 在线视频列表页面</title>
	<meta name="keywords" content="{cms_keywords},{type_name}" />
	<meta name="description" content="{cms_description},{type_name}" /> 
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
		    		<ul class="clearfix">
					 {cms_notice}
		    		</ul>
		    	</div>
	</div>
			<div class="stui-pannel clearfix">

			
			
			
				<div class="stui-pannel__head clearfix">
					<span class="hidden-sm hidden-xs pull-right"></span>
					<h3 class="title">{type_name} </h3>								
				</div>
				<ul class="stui-vodlist clearfix">
					{book_list:12}					
					<li class="stui-vodlist__item">
						<a class="stui-vodlist__thumb lazyload" href="{list_view}" title="{list_name}" data-original="{cms_template}/static/images/123.png">						
							<span class="play hidden-xs"></span>		
							<span class="pic-text text-right"></span>
						</a>									
						<h4 class="stui-vodlist__title"><a href="{list_view}" title="{list_name}">{list_name} </a></h4>		
					</li>
					{/book_list}
	
				</ul>

<ul class="stui-page text-center cleafix">

						<li><a href="{cms_page:first}">首页</a></li>
						<li><a href="{cms_page:prev}">上一页</a></li>
						<li>{cms_page:current}/{cms_page:count}</li>
						<li><a href="{cms_page:next}">下一页</a></li>
						<li><a href="{cms_page:last}">尾页</a></li>

	
</ul>
				
			</div>
			
	{include file="footer.php"}		
	</div>
</div>


 </body>
</html>