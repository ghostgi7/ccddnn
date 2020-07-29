<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<title>{cms_title}</title>
	<meta name="description" content="{cms_description}" />
    <meta name="keywords" content="{cms_keywords}" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    {include file="include.php"}
</head>
<body>
    <div class="container">
        <div class="row">
			{include file="header.php"}
			<!-- 列表 -->
			{video_hot}
			<div class="stui-pannel clearfix">
				<div class="stui-pannel__head clearfix">
					<!-- <a class="text-muted pull-right" href="javascript:void(0)">更多 ></a> -->
					<!-- <span class="hidden-sm hidden-xs pull-right">
						{9CCMS:Type=2,3,4,5,6}
							<a href="{9CCMS:Url}" class="text-muted">{9CCMS:Name}</a> <span class="split-line"></span>
                		{/9CCMS:Type}					
					</span> -->
					<h3 class="title">
						{type_name}
					</h3>								
				</div>
				<ul class="stui-vodlist clearfix">
					{video_list:12}
					<li class="stui-vodlist__item">
						<a class="stui-vodlist__thumb lazyload" href="{list_detail}" title="{list_name}" data-original="{list_pic}" style="background-image: url({cms_template}/assets/images/load.gif);">					
							<span class="play hidden-xs"></span>		
						</a>									
						<h4 class="stui-vodlist__title"><a href="{list_detail}" title="{list_name}">{list_name}</a></h4>		
					</li>
					{/video_list}
				</ul>			
			</div>
			{/video_hot}
			<!-- end 列表 -->
			
			<!-- 友链 -->
			<div class="stui-pannel clearfix">				
				<div class="stui-pannel__head clearfix"> 
					<h3 class="title">								
						友情链接
					</h3>								
				</div>																		
				<ul id="IeUrl" class="stui-link__text col-pd clearfix">
					{cms_link}
				</ul>					
			</div>
			<!-- end 友链 -->
			
        </div>
    </div>

{include file="footer.php"}

</body>
</html>